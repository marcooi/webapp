<?php

namespace App\Http\Controllers;

use App\Quotation;
use App\QuotationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class QuotationController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:quotation-list|quotation-create|quotation-edit|quotation-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:quotation-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:quotation-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:quotation-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::with('products')
            ->join('companies', 'quotations.company_id', '=', 'companies.id')
            ->select('quotations.*', 'companies.description')
            ->paginate(10);


        return view('quotations.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotations.create');
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
            'sales_person_id' => 'required'
        ]);



        $user =  Auth::user()->name;

        $sales = new Quotation();
        $sales->company_id = $request->input('company_id');
        $sales->contact_person = $request->input('contact_person');
        $sales->sales_person_id = $request->input('sales_person_id');
        $sales->reff_no = $request->input('reff_no');
        $sales->contact_person = $request->input('contact_person');
        $sales->remark1 = $request->input('remark1');
        $sales->remark2 = $request->input('remark2');
        $sales->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');

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

        // dd($sales);


        DB::transaction(function () use ($request, $sales) {
            if ($sales->save()) {

                $count_product_id = count($request->product_id);
                for ($i = 0; $i < $count_product_id; $i++) {

                    $details = new QuotationDetail();
                    $details->quotation_id = $sales->id;
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



        return redirect()->route('quotations.index')
            ->with('success', 'Sales Quotation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        $quotations = DB::table('quotations')
            ->join('companies', 'quotations.company_id', '=', 'companies.id')
            ->join('employees', 'quotations.sales_person_id', '=', 'employees.id')
            ->select('quotations.*', 'companies.description', 'employees.name')
            ->where('quotations.id', $quotation->id)->first();

        $details = DB::table('quotation_details')
            ->join('products', 'quotation_details.product_id', '=', 'products.id')
            ->select('quotation_details.*', 'products.name')
            ->where('quotation_id', '=', $quotation->id)
            ->where('quotation_details.deleted_at', null)
            ->get();

        // $sales = Sale::with('products')
        //     ->join('companies', 'sales.company_id', '=', 'companies.id')
        //     ->select('sales.*', 'companies.description')
        //     ->paginate(10);

        // dd($details);

        return view('quotations.edit', compact('quotations', 'details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        request()->validate([
            'company_id' => 'required'
        ]);

        $user =  Auth::user()->name;

        $sales = Quotation::find($quotation)->first();
        $sales->company_id = $request->input('company_id');
        $sales->contact_person = $request->input('contact_person');
        $sales->sales_person_id = $request->input('sales_person_id');
        $sales->reff_no = $request->input('reff_no');
        $sales->contact_person = $request->input('contact_person');
        $sales->remark1 = $request->input('remark1');
        $sales->remark2 = $request->input('remark2');
        $sales->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');

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

        // $detailsx = QuotationDetail::where('id', $request->id)->get();
        //   dd($detailsx);


        DB::transaction(function () use ($request, $sales, $quotation) {
            if ($sales->save()) {

                // DB::table('quotation_details')
                //     ->where('quotation_id', '=', $sales->id)
                //     ->update(array('deleted_at' => DB::raw('NOW()')));


                $count_product_id = count($request->product_id);
                for ($i = 0; $i < $count_product_id; $i++) {

                    // $details = new QuotationDetail();
                    $details = QuotationDetail::find($request->id[$i])->first();
                    $details->quotation_id = $sales->id;
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

        return redirect()->route('quotations.index')
            ->with('success', 'Sales Quotation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        //
    }

    public function confirm($id)
    {
        $user =  Auth::user()->name;
        $sales = Quotation::find($id);
        $sales->is_confirmed = 1;
        $sales->updated_by = $user;

        $sales->save();

        return redirect()->route('quotations.index')
            ->with('success', 'Sales Quotation Confirmed successfully');
    }

    public function print($id)
    {
        // $quotations = Quotation::find($id)
        $quotations = DB::table('quotations')
            ->join('companies', 'quotations.company_id', '=', 'companies.id')
            ->where('quotations.id', $id)
            ->select(
                'quotations.*',
                'companies.description',
                'companies.address1',
                'companies.address2',
                'companies.kota',
                'companies.kode_pos',
                'companies.no_telp',
                'companies.no_fax',
                'companies.negara'
            )
            ->first();

            // dd($quotations);

        $details = QuotationDetail::where('quotation_id', $id)
            ->join('products', 'quotation_details.product_id', '=', 'products.id')
            ->get();

        //  dd($quotations);
        return view('quotations.print', compact('quotations', 'details'));
    }
}
