<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Cart extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'carts';

    protected $fillable=['user_id','product_id','order_id','quantity','amount','price','status'];

    // public function product(){
    //     return $this->hasOne('App\Models\Product','id','product_id');
    // }
    // public static function getAllProductFromCart(){
    //     return Cart::with('product')->where('user_id',auth()->user()->id)->get();
    // }
    public function product()
    {
        return $this->belongsTo(Product::class); // assuming 'Product' is the related model
    }

    //public function product()
    //{
    //    return $this->belongsTo(Product::class, 'product_id');
    //}
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
