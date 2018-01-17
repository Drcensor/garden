<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function order(){

        return $this->hasMany(Order::class);
    }

    public function show() {
     $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();
    }

}
