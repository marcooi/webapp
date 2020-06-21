<?php

namespace App\Http\Controllers;

use App\Company;
use App\Journal;
use App\JournalDetail;
use App\JournalType;
use App\Purchase;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class JournalController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:journal-list|journal-create|journal-edit|journal-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:journal-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:journal-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:journal-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::select('id', 'po_no')->get();
        $purchases = Purchase::select('id', 'po_no')->get();
        $journals = Journal::with('company')->get();

        return view('journals.index', compact('journals', 'purchases', 'sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = DB::table('journal_types')->get();

        // dd($types);
        return view('journals.create', compact('types'));
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
            'type_id' => 'required',
            'date' => 'required',
            'company_id' => 'required',
            'po_invoice_no' => 'required'

        ]);


        $user =  Auth::user()->name;

        $journals = new Journal();
        $journals->type_id = $request->type_id;
        $journals->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');
        $journals->company_id = $request->company_id;
        $journals->po_invoice_no = $request->po_invoice_no;
        $journals->total_debit = $request->total_debit;
        $journals->total_credit = $request->total_credit;
        $journals->created_by = $user;
        $journals->updated_by = $user;


        // dd($request);

        DB::transaction(function () use ($request, $journals) {
            if ($journals->save()) {
                $count_coa_id = count($request->coa_id);
                for ($i = 0; $i < $count_coa_id; $i++) {

                    $journal_detail = new JournalDetail();
                    $journal_detail->journal_id = $journals->id;
                    $journal_detail->chart_of_account_id = $request->coa_id[$i];
                    $journal_detail->description = $request->description[$i];
                    $journal_detail->debit = $request->debit[$i];
                    $journal_detail->credit = $request->credit[$i];
                    $journal_detail->save();
                };
            };
        });

        return redirect()->route('journals.index')
            ->with('success', 'Journal created successfully.');
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

        $journals = DB::table('journals')
            ->join('journal_types', 'journals.type_id', '=', 'journal_types.id')
            ->join('companies', 'journals.company_id', '=', 'companies.id')
            ->where('journals.id', $id)
            ->select(
                'journal_types.name as type_name',
                'type_id',
                'companies.description as company_description',
                'company_id',
                'date',
                'po_invoice_no',
                'total_debit',
                'total_credit',
                DB::raw('(CASE WHEN type_id = 1 THEN (select po_no from sales where id = po_invoice_no) ELSE (select po_no from purchases where id = po_invoice_no) END) AS po_invoice_no_desc')
            )
            ->first();

        $details = DB::table('journal_details')
            ->join('chart_of_accounts', 'journal_details.chart_of_account_id', '=', 'chart_of_accounts.id')
            ->where('journal_id', $id)
            ->select(
                'journal_details.id',
                'journal_details.journal_id',
                'chart_of_account_id',
                'description',
                'debit',
                'credit',
                DB::raw("CONCAT(chart_of_accounts.coa_id,' | ',chart_of_accounts.name) as coa_name")
            )
            ->get();

        // $journals = Journal::with('company')->find($id)->first(); 
        // $journals = Journal::with('type')->where('id',$id)->get(); 

        // dd($journals);

        return view('journals.edit', compact('journals', 'details'));
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
        //
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

        $user =  Auth::user()->name;

        DB::transaction(function () use ($id, $user) {
            DB::table('journal_details')
                ->where('journal_id', '=', $id)
                ->update(
                    array(
                        'deleted_at' => DB::raw('NOW()')
                    )
                );

            DB::table('journals')
                ->where('id', '=', $id)
                ->update(
                    array(
                        'deleted_at' => DB::raw('NOW()'),
                        'updated_by' => $user
                    )
                );
        });

        return redirect()->route('journals.index')
            ->with('success', 'Journal deleted successfully');
    }

    // public function journalType($request)
    // {
    //     $listproduct = JournalType::where('name', 'LIKE', '%' . $request->input('term', '') . '%')
    //         ->get(['id', 'name as text']);
    //     return ['results' => $listproduct];
    // }
}
