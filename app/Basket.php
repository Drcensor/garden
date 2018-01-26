<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }

     public function product(){

        return $this->belongsTo(product::class);
    }


    public function order(){

        return $this->hasMany(Order::class);
    }
}
