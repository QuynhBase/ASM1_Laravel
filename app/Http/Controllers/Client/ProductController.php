<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function list(){
        $products = Product::query()->with('category')->paginate(16);
        return view('client.productPage.list', compact('products'));
    }

    public function detail($id){
        $product = Product::query()->where('id', $id)->with(['category'])->first();
        $products = Product::query()->latest('id')->paginate(7);
        return view('client.productPage.detail', compact('product', 'products'));
    }
}
