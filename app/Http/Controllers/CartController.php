<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function list(){
        $user = User::query()->first();

        $cart = Cart::query()->where('user_id', $user->id)->first();
        $totalAmount = 0;
        $products = $cart->cartItems()
        ->join('products', 'products.id', '=', 'cart_items.product_id')
        ->get(['products.name as product_name', 'products.image as product_image',
        'products.price as product_price', 'cart_items.quantity as quantity']);

        foreach (collect($products) as $item) {
            $totalAmount += $item['quantity'] * $item['product_price'];
        }
        $userId = $cart->user_id;

        return view('client.productPage.cart', compact('products' ,'totalAmount' ,'userId'));
    }

    public function add(Request $request){
        // dd($request->all());
        $product = Product::query()->where('id', $request->product_id)->first();

        $user = User::query()->first();
        $cart = Cart::query()->where('user_id', $user->id)->first();

        if(empty($cart)){
            $cart = Cart::query()->create(['user_id' => $user->id]);
        }

        $data = [
            'product_id' =>$product->id,
            'cart_id' => $cart->id,
            'quantity' => $request->quantity
        ];

        // $cartItem = CartItem::query()->where('product_id', $product->id)->first();
        if(empty($cartItem)){
            CartItem::query()->create($data);
        } else{
            $data["quantity"] = $cartItem->quantity + $request->quantity;
            $cartItem->update(["quantity" => $data["quantity"]]);
        }

        return redirect()->route('cart.list');


    }



}
