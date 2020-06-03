<?php

namespace App\Http\Controllers;

use App\GoodReceipt;
use App\Inventory;
use App\Product;
use App\Purchase;
use App\PurchaseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReceiptController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:goodreceipt-list|goodreceipt-create|goodreceipt-edit|goodreceipt-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:goodreceipt-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:goodreceipt-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:goodreceipt-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $receipts = GoodReceipt::all();

        // $tes = DB::table('good_receipts')            
        //     ->join('purchases', 'purchases.id', '=', 'good_receipts.purchase_id')
        //     ->join('companies', 'purchases.company_id', '=', 'companies.id')
        //     // ->join('purchase_details', 'purchase_details.purchase_id', '=', 'good_receipts.id')
        //     ->join('products', 'products.id', '=', 'good_receipts.product_id')
        //     ->where('good_receipts.deleted_at', null)
        //     ->get();

        // dd($tes);

        $receipts = DB::table('good_receipts')
            ->join('purchases', 'purchases.id', '=', 'good_receipts.purchase_id')
            ->join('companies', 'purchases.company_id', '=', 'companies.id')
            // ->join('purchase_details', 'purchase_details.purchase_id', '=', 'good_receipts.id')

            ->join('products', 'products.id', '=', 'good_receipts.product_id')
            // ->join('products', 'products.id', '=', 'purchase_details.product_id')
            // ->where('purchase_id', '=', $id)
            ->where('good_receipts.deleted_at', null)
            ->select('companies.description', 'good_receipts.*', 'products.name', 'products.detail', 'purchases.po_no')
            ->paginate(10);



        //    dd($receipts);
        return view('receipts.index', compact('receipts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receipts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'company_id' => 'required',
            'purchase_id' => 'required',
            'receive_at' => 'required'
        ]);


        $user =  Auth::user()->name;
        DB::transaction(function () use ($request, $user) {

            $count_product_id = count($request->product_id);
            for ($i = 0; $i < $count_product_id; $i++) {

                if ($request->qty[$i] > 0) {

                    $inventory = new Inventory();
                    $inventory->product_id = $request->product_id[$i];
                    $inventory->purchase_id = $request->purchase_id;
                    $inventory->qty = $request->qty[$i];
                    $inventory->appearing_id = 210;
                    $inventory->appearing_at = Carbon::createFromFormat('d/m/Y', $request->receive_at)->format('Y-m-d');
                    $inventory->created_by = $user;
                    $inventory->updated_by = $user;
                    $inventory->save();

                    Product::find($request->product_id[$i])->increment('qty', $request->qty[$i]);



                    $receipt = new GoodReceipt();
                    $receipt->purchase_id = $request->purchase_id;
                    $receipt->product_id = $request->product_id[$i];
                    $receipt->inventory_id = $inventory->id;
                    $receipt->qty = $request->qty[$i];
                    $receipt->serial_no = $request->serial_no[$i];
                    $receipt->surat_jalan_no = $request->surat_jalan_no[$i];
                    $receipt->created_by = $user;
                    $receipt->updated_by = $user;
                    $receipt->receive_at = Carbon::createFromFormat('d/m/Y', $request->receive_at)->format('Y-m-d');

                    $receipt->save();
                }
            };
        });

        return redirect()->route('receipts.index')
            ->with('success', 'Goods Receipt created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $headers = DB::table('good_receipts')
            ->join('purchases', 'purchases.id', '=', 'good_receipts.purchase_id')
            ->join('companies', 'purchases.company_id', '=', 'companies.id')
            ->where('good_receipts.deleted_at', null)
            ->where('good_receipts.id', $id)
            ->select('good_receipts.*', 'purchases.company_id', 'companies.description',  'purchases.po_no')
            ->first();

        // dd($headers);

        $details = DB::table('good_receipts')
            ->join('purchase_details', 'purchase_details.purchase_id', '=', 'good_receipts.purchase_id')
            ->join('products', 'products.id', '=', 'good_receipts.product_id')
            ->where('good_receipts.deleted_at', null)
            ->where('good_receipts.id', $id)
            ->select('good_receipts.*', 'products.name', 'purchase_details.qty as order_qty')
            ->get();


        return view('receipts.edit', compact('headers', 'details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'company_id' => 'required',
            'purchase_id' => 'required',
            'receive_at' => 'required'
        ]);

        $count_id = count($request->id);
        for ($i = 0; $i < $count_id; $i++) {

            if (Inventory::where('id', '=', $request->id[$i])->whereNotNull('disappearing_at')->exists()) {
                return redirect()->route('receipts.index')
                    ->with('warning', 'Cannot edit, data already disappeared!.');
            }
        };

        $user =  Auth::user()->name;

        DB::transaction(function () use ($request, $user, $id) {
            $count_id = count($request->id);
            for ($i = 0; $i < $count_id; $i++) {

                $receipts = GoodReceipt::find($id);
                $receipts->qty = $request->qty[$i];
                $receipts->receive_at = Carbon::createFromFormat('d/m/Y', $request->receive_at)->format('Y-m-d');
                $receipts->serial_no = $request->serial_no[$i];
                $receipts->surat_jalan_no = $request->surat_jalan_no[$i];
                $receipts->updated_by = $user;
                $receipts->updated_at = Carbon::now();
                $receipts->save();

                $adjustplus = $request->qty[$i] - $request->ori_qty[$i];

                if ($adjustplus > 0) {
                    Product::find($request->product_id[$i])->increment('qty', $adjustplus);
                } else {
                    $adjustmin = $request->ori_qty[$i] - $request->qty[$i];
                    Product::find($request->product_id[$i])->decrement('qty', $adjustmin);
                };



                $inventory = Inventory::find($request->inventory_id[$i]);
                $inventory->qty = $request->qty[$i];
                $inventory->appearing_at = Carbon::createFromFormat('d/m/Y', $request->receive_at)->format('Y-m-d');
                $inventory->updated_by = $user;
                $inventory->updated_at = Carbon::now();
                $inventory->save();
            };
        });

        return redirect()->route('receipts.index')
            ->with('success', 'Goods Receipt updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // $inventory = DB::table('good_receipts')->where('id', '=', $id)->select('inventory_id', 'product_id', 'qty')->get();
        $inventory = GoodReceipt::find($id);

        
        if (Inventory::where('id', '=', $inventory->inventory_id)->whereNotNull('disappearing_at')->exists()) {
            return redirect()->route('receipts.index')
                ->with('warning', 'Cannot delete, data already disappeared!.');
        }

        $user =  Auth::user()->name;


        DB::transaction(function () use ($id, $inventory, $user) {
            DB::table('good_receipts')
                ->where('id', '=', $id)
                ->update(
                    array(
                        'deleted_at' => DB::raw('NOW()'),
                        'updated_at' => DB::raw('NOW()'),
                        'updated_by'       => $user
                    )
                );

            Product::find($inventory->product_id)->decrement('qty', $inventory->qty);

            DB::table('inventories')
                ->where('id', '=', $inventory->inventory_id)
                ->update(
                    array(
                        'deleted_at' => DB::raw('NOW()'),
                        'updated_at' => DB::raw('NOW()'),
                        'updated_by'       => $user
                    )
                );
        });


        return redirect()->route('receipts.index')
            ->with('success', 'Goods Receipt deleted successfully');
    }
}
