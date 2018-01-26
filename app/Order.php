<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   public function user(){

        return $this->belongsTo(User::class);
    }

     public function product(){

        return $this->belongsTo(product::class);
    }

     public function basket(){

        return $this->belongsTo(Basket::class);
    }
}
