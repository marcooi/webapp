<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'name' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function searchProduct(Request $request)
    {
        $listproduct = Product::where('name', 'LIKE', '%' . $request->input('term', '') . '%')
            ->get(['id', 'name as text']);
        return ['results' => $listproduct];
    }

    public function searchInventory(Request $request)
    {
        $listproduct =  DB::table('Inventories')
            ->join('products', 'Inventories.product_id', '=', 'products.id')
            ->whereNull('disappearing_at')
            ->where('name', 'LIKE', '%' . $request->input('term', '') . '%')
            // ->get(['Inventories.id', 'products.name as text']);
            ->get(['Inventories.id', DB::raw('CONCAT(Inventories.id, " - ", products.name) AS text')]);

        return ['results' => $listproduct];
       
    }

    public function searchInventoryById($request)
    {
        $listproduct =  DB::table('Inventories')
            ->join('products', 'Inventories.product_id', '=', 'products.id')
            ->whereNull('disappearing_at')            
            ->where('Inventories.id', $request)           
            ->select('Inventories.*', DB::raw('CONCAT(Inventories.id, " - ", products.name) AS name') )
            ->get();


            // dd($request);
        return $listproduct->toJson(JSON_PRETTY_PRINT);
       
    }

    function searchProductById($request)
    {
        
        // $listproduct = Product::where('products.id', $request)
        // ->leftJoin('inventories', 'inventories.product_id', '=', 'products.id')
        // ->whereNull('products.deleted_at')   
        // ->whereNull('inventories.deleted_at')   
        // ->select('products.*',  DB::raw('IFNULL(inventories.qty, 0) as qty'))
        // ->get();

        $listproduct = Product::where('products.id', $request)
        ->whereNull('products.deleted_at') 
        ->get();  
                
        return $listproduct->toJson(JSON_PRETTY_PRINT);
        //  return [ $listproduct];
    }
}
