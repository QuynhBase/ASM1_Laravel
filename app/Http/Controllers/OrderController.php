<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class OrderController extends Controller
{
    //
    public function list(){
        $user = User::query()->first();

        $cart = Cart::query()->where('user_id', $user->id)->first();
        $totalAmount = 0;
        $product = $cart->cartItems()
        ->join('products', 'products.id', '=', 'cart_items.product_id')
        ->get(['products.id as product_id', 'products.name as product_name', 'products.image as product_image',
        'products.price as product_price', 'cart_items.quantity as quantity']);

        foreach (collect($product) as $item) {
            $totalAmount += $item['quantity'] * $item['product_price'];
        }
        $userId = $cart->user_id;
        return view('client.productPage.order', compact('product' ,'totalAmount' ,'userId'));
    }

    public function add(Request $request){
        try {
            // Check tài khoản đăng nhập
            $order = Order::query()->create([
                'user_id' => $request->userId,
                'user_email' => $request->user_email,
                'user_name' => $request->user_name,
                'user_address'=>$request->user_address,
                'user_phone'=>$request->user_phone,
                'total_price'=>$request->totalAmount,
            ]);

            // tạo order item
            foreach (json_decode($request->product) as $item) {
                $item->order_id = $order->id;
                OrderItem::query()->create((array) $item);

                // xóa sản phẩm đã mua trong giỏ hàng
                CartItem::query()->join('carts', 'carts.id', '=', 'cart_items.cart_id')
                    ->where(['product_id' => $item->product_id,
                        'carts.user_id' => $request->userId])->delete();
            }

        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
