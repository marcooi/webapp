<?php

namespace App\Http\Controllers;

use App\Address;
use App\Sale;
use App\SaleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
// use PDF;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sales = DB::table('sales')
        //     ->join('companies', 'sales.company_id', '=', 'companies.id')
        //     ->select('sales.*', 'companies.description')
        //     ->paginate(10);

        $sales = Sale::with('products')
            ->join('companies', 'sales.company_id', '=', 'companies.id')
            ->select('sales.*', 'companies.description')
            ->paginate(10);


        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $test = Sale::max('invoice_no', 'tt_invoice_no', 'delivery_order_no');

        // dd($test);

        return view('sales.create');
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
            'sales_person_id' => 'required',
            'invoice_no' => 'required|unique:sales',
            'tt_invoice_no' => 'required|unique:sales',
            'delivery_no' => 'required|unique:sales',
            'po_no' => 'required|unique:sales',

        ]);

        $user =  Auth::user()->name;

        $sales = new Sale();
        $sales->company_id = $request->input('company_id');
        $sales->shipping_address_id = $request->input('shipping_address_id');
        $sales->sales_person_id = $request->input('sales_person_id');
        $sales->po_no = $request->input('po_no');
        $sales->po_date = Carbon::createFromFormat('d/m/Y', $request->input('po_date'))->format('Y-m-d');
        $sales->invoice_no = $request->input('invoice_no');
        $sales->invoice_date = Carbon::createFromFormat('d/m/Y', $request->input('invoice_date'))->format('Y-m-d');
        $sales->tt_invoice_no = $request->input('tt_invoice_no');
        $sales->tt_invoice_date = Carbon::createFromFormat('d/m/Y', $request->input('tt_invoice_date'))->format('Y-m-d');
        $sales->delivery_no = $request->input('delivery_no');
        $sales->delivery_date =  Carbon::createFromFormat('d/m/Y', $request->input('delivery_date'))->format('Y-m-d');
        $sales->sub_total = $request->input('sub_total');
        $sales->shipping_fee = $request->input('shipping_fee');
        $sales->ppn = $request->input('ppn');
        $sales->ppn_amount = $request->input('ppn_amount');
        $sales->pph_23 = $request->input('total_pph_23');
        $sales->pph_23_amount = $request->input('total_pph_23_amount');
        $sales->discount = $request->input('discount');
        $sales->grand_total = $request->input('grand_total');
        $sales->created_by = $user;
        $sales->updated_by = $user;


        DB::transaction(function () use ($request, $sales) {
            if ($sales->save()) {

                $count_product_id = count($request->product_id);
                for ($i = 0; $i < $count_product_id; $i++) {

                    $details = new SaleDetail();
                    $details->sale_id = $sales->id;
                    $details->product_id = $request->product_id[$i];
                    $details->qty = $request->qty[$i];
                    $details->unit_price = $request->unit_price[$i];
                    $details->total_price = $request->total_price[$i];
                    $details->pph_23 = $request->pph_23[$i];
                    $details->pph_23_amount = $request->pph_23_amount[$i];

                    $details->save();
                };
            };
        });



        // $sales->save();

        // Vendor::create($request->all());

        return redirect()->route('sales.index')
            ->with('success', 'Sales Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $sales = DB::table('sales')
            ->join('companies', 'sales.company_id', '=', 'companies.id')
            ->join('employees', 'sales.sales_person_id', '=', 'employees.id')
            ->select('sales.*', 'companies.description', 'employees.name')
            ->where('sales.id', $sale->id)->first();

        $details = DB::table('sale_details')
            ->join('products', 'sale_details.product_id', '=', 'products.id')
            ->select('sale_details.*', 'products.name')
            ->where('sale_id', '=', $sale->id)
            ->where('sale_details.deleted_at', null)
            ->get();

        // $sales = Sale::with('products')
        //     ->join('companies', 'sales.company_id', '=', 'companies.id')
        //     ->select('sales.*', 'companies.description')
        //     ->paginate(10);

        // dd($details);

        return view('sales.edit', compact('sales', 'details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'company_id' => 'required',
            'sales_person_id' => 'required',
            'invoice_no' => 'required|unique:sales',
            'tt_invoice_no' => 'required|unique:sales',
            'delivery_no' => 'required|unique:sales',
            'po_no' => 'required|unique:sales',

        ]);

        $user =  Auth::user()->name;

        $sales = Sale::find($id);
        // $sales = new Sale();
        $sales->company_id = $request->input('company_id');
        $sales->sales_person_id = $request->input('sales_person_id');
        $sales->po_no = $request->input('po_no');
        $sales->po_date = Carbon::createFromFormat('d/m/Y', $request->input('po_date'))->format('Y-m-d');
        $sales->invoice_no = $request->input('invoice_no');
        $sales->invoice_date = Carbon::createFromFormat('d/m/Y', $request->input('invoice_date'))->format('Y-m-d');
        $sales->tt_invoice_no = $request->input('tt_invoice_no');
        $sales->tt_invoice_date = Carbon::createFromFormat('d/m/Y', $request->input('tt_invoice_date'))->format('Y-m-d');
        $sales->delivery_no = $request->input('delivery_no');
        $sales->delivery_date =  Carbon::createFromFormat('d/m/Y', $request->input('delivery_date'))->format('Y-m-d');
        $sales->sub_total = $request->input('sub_total');
        $sales->shipping_fee = $request->input('shipping_fee');
        $sales->ppn = $request->input('ppn');
        $sales->ppn_amount = $request->input('ppn_amount');
        $sales->pph_23 = $request->input('total_pph_23');
        $sales->pph_23_amount = $request->input('total_pph_23_amount');
        $sales->discount = $request->input('discount');
        $sales->grand_total = $request->input('grand_total');
        $sales->created_by = $user;
        $sales->updated_by = $user;


        DB::transaction(function () use ($request, $sales, $id) {
            if ($sales->save()) {

                DB::table('sale_details')
                    ->where('sale_id', '=', $id)
                    ->update(array('deleted_at' => DB::raw('NOW()')));


                $count_product_id = count($request->product_id);
                for ($i = 0; $i < $count_product_id; $i++) {

                    $details = new SaleDetail();
                    $details->sale_id = $sales->id;
                    $details->product_id = $request->product_id[$i];
                    $details->qty = $request->qty[$i];
                    $details->unit_price = $request->unit_price[$i];
                    $details->total_price = $request->total_price[$i];
                    $details->pph_23 = $request->pph_23[$i];
                    $details->pph_23_amount = $request->pph_23_amount[$i];

                    $details->save();
                };
            };
        });

        // dd($id);

        return redirect()->route('sales.index')
            ->with('success', 'Sales Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {

        if (Sale::where('id', $sale->id)->where('is_confirmed', '=', 1)->exists()) {
            return redirect()->route('sales.index')
                ->with('warning', 'Cannot delete, data already confirmed !.');
        } else {

            DB::transaction(function () use ($sale) {
                DB::table('sale_details')
                    ->where('sale_id', $sale->id)
                    ->where('deleted_at', null)
                    ->update(array('deleted_at' => DB::raw('NOW()')));

                DB::table('sales')
                    ->where('id', '=', $sale->id)
                    ->where('deleted_at', null)
                    ->update(array('deleted_at' => DB::raw('NOW()')));
            });


            return redirect()->route('sales.index')
                ->with('success', 'Sales Order deleted successfully');
        }
    }

    public function confirm($id)
    {
        $user =  Auth::user()->name;
        $sales = Sale::find($id);
        $sales->is_confirmed = 1;
        $sales->updated_by = $user;

        $sales->save();

        return redirect()->route('sales.index')
            ->with('success', 'Sales Order Confirmed successfully');
    }

    public function printorder(Request $request, $id)
    {
        $header = DB::table('sales')
            ->join('companies', 'sales.company_id', '=', 'companies.id')
            ->join('employees', 'sales.sales_person_id', '=', 'employees.id')
            ->select(
                'sales.*',
                'employees.name',
                'companies.description',
                'companies.address1',
                'companies.address2',
                'companies.kota',
                'companies.kode_pos',
                'companies.no_telp',
                'companies.no_fax'
            )
            ->where('sales.id', $id)->first();


        $shipping = Address::find($header->shipping_address_id)->first();

        $details = DB::table('sale_details')
            ->join('products', 'sale_details.product_id', '=', 'products.id')
            ->select('sale_details.*', 'products.name')
            ->where('sale_id', '=', $id)
            ->where('sale_details.deleted_at', null)
            ->get();


       

            // $pdf = PDF::loadView('sales.invoice', compact('header', 'shipping', 'details'));            
            // return $pdf->stream('document.pdf');

          

        switch ($request->print_option) {
            case '1':
                return view('sales.invoice', compact('header', 'shipping', 'details'));
                break;
            case '2':
                return view('sales.tt-invoice', compact('header', 'shipping', 'details'));
                break;
            case '3':
                return view('sales.delv-order', compact('header', 'shipping', 'details'));
                break;
        }

        // $purchases = DB::table('purchases')
        //     ->join('companies', 'companies.id', '=', 'purchases.company_id')            
        //     ->select('purchases.*', 'companies.description')
        //     ->get();

        // dd($purchasesdetail);


        // $pdf = PDF::loadView('purchases.print2',  compact('purchases', 'companies', 'purchasesdetail'));
        // return $pdf->stream('document.pdf');

        // return view('purchases.print', compact('purchases', 'companies', 'purchasesdetail'));
    }

   
}
