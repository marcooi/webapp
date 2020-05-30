<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:company-list|company-create|company-edit|company-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:company-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:company-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:company-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $company = Company::latest()->paginate(10);
        return view('companies.index', compact('company'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'name' => 'required|max:6|unique:companies',
            'description' => 'required'
        ]);


        $company = new Company;
        $company->name = $request->input('name');
        $company->description = $request->input('description') ?? "";
        $company->address1 = $request->input('address1') ?? "";
        $company->address2 = $request->input('address2') ?? "";
        $company->kota = $request->input('kota') ?? "";
        $company->kode_pos = $request->input('kode_pos') ?? "";
        $company->no_telp = $request->input('no_telp') ?? "";
        $company->no_fax = $request->input('no_fax') ?? "";
        $company->npwp = $request->input('npwp') ?? "";
        $company->contact = $request->input('contact') ?? "";
        $company->email = $request->input('email') ?? "";
        $company->negara = $request->input('negara') ?? "";
        $company->is_active = $request->has('is_active') ?? 0;
        $company->is_vendor = $request->has('is_vendor') ?? 0;
        $company->is_owner = $request->has('is_owner') ?? 0;
        $company->is_customer = $request->has('is_customer') ?? 0;

        $company->save();

        // Vendor::create($request->all());

        return redirect()->route('companies.index')
            ->with('success', 'Company created successfully.');

        // request()->validate([
        //     'name' => 'required'
        // ]);

        // Company::create($request->all());

        // return redirect()->route('companies.index')
        //     ->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        request()->validate([
            'name' => 'required|max:6',
            'description' => 'required'
        ]);

        $company->is_active = $request->has('is_active') ?? 0;
        $company->is_vendor = $request->has('is_vendor') ?? 0;
        $company->is_customer = $request->has('is_customer') ?? 0;
        $company->is_owner = $request->has('is_owner') ?? 0;

        $company->update($request->all());

        return redirect()->route('companies.index')
            ->with('success', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
            ->with('success', 'Company deleted successfully');
    }

    public function searchCompany(Request $request)
    {
        $listvendor = Company::where('is_owner', '=', 0)
            ->where('description', 'LIKE', '%' . $request->input('term', '') . '%')
            ->get(['id', 'description as text']);
        return ['results' => $listvendor];
    }

    function searchCompanyById($request)
    {
        $listvendor = Company::where('id', $request)->get();

        return ['results' => $listvendor];
    }

    function getCustomer(Request $request)
    {
        $listvendor = Company::where('is_customer', 1)
            ->where('is_active', 1)
            ->where('description', 'LIKE', '%' . $request->input('term', '') . '%')
            ->get(['id', 'description as text']);

        return ['results' => $listvendor];
    }

    public function searchVendor(Request $request)
    {
        $listvendor = Company::where('is_owner', '=', 0)
            ->where('is_vendor', '=', 1)
            ->where('description', 'LIKE', '%' . $request->input('term', '') . '%')
            ->get(['id', 'description as text']);
        return ['results' => $listvendor];
    }
}
