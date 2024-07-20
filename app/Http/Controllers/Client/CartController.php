<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        // dd($products);
        return view('client.productPage.cartProduct', compact('products') );
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('client.productPage.detailProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request, $id)
    {
        //
        
        $productPage = Product::find($id);
        Cart::add([
            'id' => $productPage->id,
            'image' => $productPage->image,
            'name' => $productPage->name,
            'price' => $productPage->discount ?? $productPage->price,
            'quantity' => 1,

        ]);

        dd(Cart::content());

        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
