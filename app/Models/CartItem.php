<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'cart_id',
        'quantity'
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function products(){
        return $this->hasOne(Product::class);
    }

}
