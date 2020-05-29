<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:vendor-list|vendor-create|vendor-edit|vendor-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:vendor-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vendor-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vendor-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $vendors = Vendor::latest()->paginate(10);
        return view('vendors.index', compact('vendors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|max:6|unique:vendors',
            'description' => 'required'
        ]);


        $vendor = new Vendor;
        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description') ?? "";
        $vendor->address1 = $request->input('address1') ?? "";
        $vendor->address2 = $request->input('address2') ?? "";
        $vendor->kota = $request->input('kota') ?? "";
        $vendor->kode_pos = $request->input('kode_pos') ?? "";
        $vendor->no_telp = $request->input('no_telp') ?? "";
        $vendor->no_fax = $request->input('no_fax') ?? "";
        $vendor->npwp = $request->input('npwp') ?? "";
        $vendor->contact = $request->input('contact') ?? "";
        $vendor->email = $request->input('email') ?? "";
        $vendor->negara = $request->input('negara') ?? "";
        $vendor->is_active = $request->has('is_active') ?? 0;
        $vendor->is_vendor = $request->has('is_vendor') ?? 0;
        $vendor->is_customer = $request->has('is_customer') ?? 0;

        $vendor->save();

        // Vendor::create($request->all());

        return redirect()->route('vendors.index')
            ->with('success', 'Vendor created successfully.');
    }

    public function show(Vendor $vendor)
    {
        return view('vendors.show', compact('vendor'));
    }

    public function edit(Vendor $vendor)
    {
        // dd($vendor);

        return view('vendors.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor)
    {
        request()->validate([
            'name' => 'required|max:6',
            'description' => 'required'
        ]);

        // $vendor->update($request->all());

        // $vendor = new Vendor;
        // $vendor->name = $request->input('name');
        // $vendor->description = $request->input('description') ?? "";
        // $vendor->address1 = $request->input('address1') ?? "";
        // $vendor->address2 = $request->input('address2') ?? "";
        // $vendor->kota = $request->input('kota') ?? "";
        // $vendor->kode_pos = $request->input('kode_pos') ?? "";
        // $vendor->no_telp = $request->input('no_telp') ?? "";
        // $vendor->no_fax = $request->input('no_fax') ?? "";
        // $vendor->npwp = $request->input('npwp') ?? "";
        // $vendor->contact = $request->input('contact') ?? "";
        // $vendor->email = $request->input('email') ?? "";
        // $vendor->negara = $request->input('negara') ?? "";
        $vendor->is_active = $request->has('is_active') ?? 0;
        $vendor->is_vendor = $request->has('is_vendor') ?? 0;
        $vendor->is_customer = $request->has('is_customer') ?? 0;

        $vendor->update($request->all());
        // $vendor->update();

        return redirect()->route('vendors.index')
            ->with('success', 'Vendors updated successfully');
    }

    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('vendors.index')
            ->with('success', 'Vendors deleted successfully');
    }

    public function searchVendor(Request $request)
    {
        // return Vendor::all();

        $listvendor = Vendor::where('description', 'LIKE', '%' . $request->input('term', '') . '%')
            ->get(['id', 'description as text']);
        return ['results' => $listvendor];
    }

    function searchVendorById($request)
    {
        $listvendor = Vendor::where('id', $request)->get();
        //  dd($listvendor);
        return ['results' => $listvendor];
    }
}
