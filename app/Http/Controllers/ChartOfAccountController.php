<?php

namespace App\Http\Controllers;

use App\ChartOfAccount;
use App\ChartOfAccountCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class ChartOfAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $coas = ChartOfAccount::all();
        $coas = DB::table('chart_of_accounts')
            ->leftjoin('chart_of_account_categories', 'chart_of_accounts.category_id', '=', 'chart_of_account_categories.id')
            ->select(
                'chart_of_accounts.id',
                'chart_of_accounts.coa_id',
                'chart_of_accounts.name',
                'chart_of_account_categories.nama_kategori'
            )
            ->get();


        $categories = ChartOfAccountCategory::all();

        // dd($coas);

        return view('chart-of-accounts.index', compact('coas', 'categories'));

        // return view('chart-of-accounts.index', compact('coas', 'categories'))
        //     ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'coa_id' => 'required|unique:chart_of_accounts,coa_id,' . $request->id,
            'name' => 'required'
        ]);



        $user = ChartOfAccount::updateOrCreate(
            ['id' => $request->id],
            [
                'coa_id' => $request->coa_id,
                'name' => $request->name,
                'category_id' => $request->category_id

            ]
        );

        return Response::json($user);
        // return Response::json($request->id);



        // return redirect()->route('chart-of-accounts.index')
        //     ->with('success', 'Chart of Account created successfully.');
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

        $coa = ChartOfAccount::find($id);
        // return response()->json($coa);
        return response()->json($coa);
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

        $coa = ChartOfAccount::findOrFail($id);
        $coa->delete();

        return redirect()->route('chart-of-accounts.index')
            ->with('success', 'Chart of Account deleted successfully');
    }

    public function searchCoa(Request $request)
    {
       


        $listvendor = ChartOfAccount::where('name', 'LIKE', '%' . $request->input('term', '') . '%')
            // ->get(['id', 'name as text']);
            ->Select('id', DB::raw("CONCAT(coa_id,' | ',name) as text" ))
            ->get(['id', 'text']);


// return Response::json($user);
        return ['results' => $listvendor];

        // $listvendor = ChartOfAccount::where('name', 'LIKE', '%' . $request->input('term', '') . '%')
        // ->select(DB::raw("CONCAT('coa_id', 'name') AS text"),'id')->get()->pluck('id', 'text');

        // return ['results' => $listvendor];
    }
}
