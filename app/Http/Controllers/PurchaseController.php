<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Company;
use App\PurchaseDetail;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
// use App\Product;
// use App\Vendor;
// use PDF;
// use DB;


class PurchaseController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:purchase-list|purchase-create|purchase-edit|purchase-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:purchase-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:purchase-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:purchase-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $purchases = Purchase::with('products')->paginate(5);        

        return view('purchases.index', compact('purchases', 'companies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = DB::table('companies')->where('is_owner', '=', 1)->value('id');
        $addresses = Address::where('company_id', $companies)->get();

        return view('purchases.create', compact('companies', 'addresses'));
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
            'po_no' => 'required|unique:purchases',
            'date' => 'required',
            'time_of_delivery' => 'required'

        ]);

        $user =  Auth::user()->name;

        $purchase = new Purchase();
        $purchase->company_id = $request->input('company_id');
        $purchase->po_no = $request->input('po_no');
        $purchase->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d'); 
        $purchase->due_date = Carbon::createFromFormat('d/m/Y', $request->input('due_date'))->format('Y-m-d');       
        $purchase->so_no = $request->input('so_no');
        $purchase->payment_type = $request->input('payment_type');
        $purchase->time_of_delivery = $request->input('time_of_delivery');
        $purchase->remark1 = $request->input('remark1');
        $purchase->remark2 = $request->input('remark2');
        $purchase->sub_total = $request->input('sub_total');
        $purchase->ppn = $request->input('ppn');
        $purchase->ppn_amount = $request->input('ppn_amount');
        $purchase->discount = $request->input('discount');
        $purchase->grand_total = $request->input('grand_total');

        $purchase->created_by = $user;
        $purchase->updated_by = $user;


        DB::transaction(function () use ($request, $purchase) {
            if ($purchase->save()) {
                $count_product_id = count($request->product_id);
                for ($i = 0; $i < $count_product_id; $i++) {
                    $purchase_detail = new PurchaseDetail();
                    $purchase_detail->purchase_id = $purchase->id;
                    $purchase_detail->product_id = $request->product_id[$i];
                    $purchase_detail->qty = $request->qty[$i];
                    $purchase_detail->unit_price = $request->unit_price[$i];
                    $purchase_detail->total_price = $request->total_price[$i];
                    $purchase_detail->save();
                };
            };
        });

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase created successfully.');
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
        $purchases = Purchase::find($id);  
        $companies = Company::all();
        $purchasesdetail = DB::table('purchase_details')
            ->join('products', 'products.id', '=', 'purchase_details.product_id')
            ->where('purchase_id', '=', $id)
            ->where('purchase_details.deleted_at', null)
            ->select('purchase_details.*', 'products.name', 'products.detail')
            ->get();

        return view('purchases.edit', compact('purchases', 'companies', 'purchasesdetail'));
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
            'company_id' => 'required'
        ]);


        $purchase = Purchase::find($id);

        $purchase->company_id = $request->input('company_id');
        $purchase->po_no = $request->input('po_no');
        // $purchase->date = $request->input('date');
        $purchase->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d'); 
        $purchase->due_date = Carbon::createFromFormat('d/m/Y', $request->input('due_date'))->format('Y-m-d');    
        $purchase->payment_type = $request->input('payment_type');
        $purchase->time_of_delivery = $request->input('time_of_delivery');
        $purchase->remark1 = $request->input('remark1');
        $purchase->remark2 = $request->input('remark2');
        $purchase->sub_total = $request->input('sub_total');
        $purchase->ppn = $request->input('ppn');
        $purchase->ppn_amount = $request->input('ppn_amount');
        $purchase->discount = $request->input('discount');
        $purchase->grand_total = $request->input('grand_total');

        // $purchase_detail = PurchaseDetail::where('purchase_id', $id);    

        DB::transaction(function () use ($request, $purchase, $id) {
            if ($purchase->save()) {

                // delete detail
                DB::table('purchase_details')
                    ->where('purchase_id', '=', $id)
                    ->update(array('deleted_at' => DB::raw('NOW()')));

                $count_product_id = count($request->product_id);

                for ($i = 0; $i < $count_product_id; $i++) {

                    // insert detail
                    $purchase_detail = new PurchaseDetail();
                    $purchase_detail->purchase_id = $purchase->id;
                    $purchase_detail->product_id = $request->product_id[$i];
                    $purchase_detail->qty = $request->qty[$i];
                    $purchase_detail->unit_price = $request->unit_price[$i];
                    $purchase_detail->total_price = $request->total_price[$i];
                    $purchase_detail->save();
                };
            };
        });

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // DB::table('purchase_details')->where('purchase_is', '=', $id)->delete();
        DB::transaction(function () use ($id) {
            DB::table('purchase_details')
                ->where('purchase_id', '=', $id)
                ->update(array('deleted_at' => DB::raw('NOW()')));

            DB::table('purchases')
                ->where('id', '=', $id)
                ->update(array('deleted_at' => DB::raw('NOW()')));
        });

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase Order deleted successfully');
    }

    public function confirm($id)
    {
        $user =  Auth::user()->name;
        $purchases = Purchase::find($id);
        $purchases->is_confirmed = 1;
        $purchases->approved_by = $user;
        $purchases->approved_at = DB::raw('NOW()');

        $purchases->save();

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase Order deleted successfully');
    }

    public function printorder($id)
    {
        $purchases = Purchase::find($id);
        $companies = Company::all();
        $purchasesdetail = DB::table('purchase_details')
            ->join('products', 'products.id', '=', 'purchase_details.product_id')
            ->where('purchase_id', '=', $id)
            ->select('purchase_details.*', 'products.name', 'products.detail')
            ->get();


        

        // $purchases = DB::table('purchases')
        //     ->join('companies', 'companies.id', '=', 'purchases.company_id')            
        //     ->select('purchases.*', 'companies.description')
        //     ->get();

        // dd($purchasesdetail);


        // $pdf = PDF::loadView('purchases.print2',  compact('purchases', 'companies', 'purchasesdetail'));
        // return $pdf->stream('document.pdf');

        return view('purchases.print', compact('purchases', 'companies', 'purchasesdetail'));
    }

    function getPurchase($request)
    {
        $po = Purchase::where('company_id', $request)
            ->where('is_confirmed', '=', 1)
            ->get();


        return $po->toJson(JSON_PRETTY_PRINT);
        //  return [ $listproduct];

    }

    function getPurchaseDetail($request)
    {
        // $detail = PurchaseDetail::where('purchase_id', $request)->get();       
        $purchasesdetail = DB::table('purchase_details')
            ->join('products', 'products.id', '=', 'purchase_details.product_id')
            ->where('purchase_id', '=', $request)
            ->select('purchase_details.*', 'products.id', 'products.name', 'products.detail')
            ->get();

    //   dd($purchasesdetail);

        return $purchasesdetail->toJson(JSON_PRETTY_PRINT);
        //  return [ $listproduct];
    }

    function getPurchaseProduct($request)
    {
        // $detail = PurchaseDetail::where('purchase_id', $request)->get();       
        $purchasesproduct = DB::table('purchase_details')
            ->join('products', 'products.id', '=', 'purchase_details.product_id')
            ->where('purchase_details.product_id', '=', $request)
            ->select('purchase_details.*', 'products.id', 'products.name', 'products.detail')
            ->get();

    //    dd($purchasesproduct);

        return $purchasesproduct->toJson(JSON_PRETTY_PRINT);
        //  return [ $listproduct];
    }
}
