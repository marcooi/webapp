<?php

namespace App\Http\Controllers;

use App\Company;
use App\Vendor;
use Illuminate\Http\Request;

class VendorApiController extends Controller
{
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
