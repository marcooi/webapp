<?php

namespace App\Http\Controllers;

use App\Address;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:address-list|address-create|address-edit|address-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:address-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:address-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:address-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $listaddress = DB::table('addresses')
            ->join('companies', 'addresses.company_id', '=', 'companies.id')
            ->select('addresses.*', 'companies.description')
            ->paginate(10);

        return view('addresses.index', compact('listaddress'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'address1' => 'required'
        ]);

        // dd($request);

        Address::create($request->all());

        return redirect()->route('addresses.index')
            ->with('success', 'Address created successfully');
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
    public function edit(Address $address)
    {
        $companyname = DB::table('companies')->where('id', $address->company_id)->value('description');

        return view('addresses.edit', compact('address', 'companyname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        request()->validate([
            'company_id' => 'required',
            'address1' => 'required'
        ]);

        $address->update($request->all());

        return redirect()->route('addresses.index')
            ->with('success', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getOwnerShippingAddress($request)
    {
        $company = Company::firstWhere('is_owner', 1)->get('id');
        $addresses = Address::where('company_id', $company)->get();


        // return $addresses->toJson(JSON_PRETTY_PRINT);        
    }

    public function searchShippingAddress($id)
    {
        $company = Company::find($id);
        $addresses = Address::where('company_id', $company->id)->get(['id', 'address1 as text']);


        // dd($addresses);
        // $company = Company::firstWhere('is_owner', 1)->get('id');
        // $listaddress = Address::where('company_id', $company)
        //     ->where('name', 'LIKE', '%' . $request->input('term', '') . '%')
        //     ->get(['id', 'name as text']);

        return $addresses->toJson(JSON_PRETTY_PRINT);
    }
}
