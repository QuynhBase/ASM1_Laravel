<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductPage;
use App\Http\Requests\StoreProductPageRequest;
use App\Http\Requests\UpdateProductPageRequest;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;

class ProductPageController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Product::query()->paginate(24);
        $category = Product::query()->get();
        return view('client.productPage.listProduct', compact('data', 'category'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductPageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductPage $productPage, $id)
    {
        //
        
        $productPage = DB::table('products')->where('id', $id)->first();
        $data = DB::table('products')->paginate(7);
        // dd($productPage);

        return view('client.productPage.detailProduct', compact('data', 'productPage' ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductPage $productPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductPageRequest $request, ProductPage $productPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductPage $productPage)
    {
        //
    }
}
