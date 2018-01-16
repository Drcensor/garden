<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

use Carbon\Carbon;

class QueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($products)
    {
        $products = DB::table('products')->get();

         return view('thankyou', ['products' => $products]);
    }

    

      public function create()
    {

        $orders = DB::table('orders')->insert(
             [
                'users_id' => auth()->id(),
                 'product_id' => request( 'product_id'),
                'quantity' => request('quantity')
               
             ]);    

         $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();

    
         $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')

            ->get();

            // UPDATE "products a  JOIN orders b ON a.quantity = b.quantity
            //         SET a.products - b.orders
            //         WHERE a.quantity = b.quantity";

             $newOrders = \DB::table('orders')->get();
                     foreach ($newOrders as $order){
                     $stock = \DB::table('products')->where('id', $order->product_id)->first()->stock;
                     if($stock > $order->quantity){
                     \DB::table('products')->where('id', $order->product_id)->decrement('stock',$order->quantity);
                 }

      
         return view('thankyou', compact(['ordered', 'products']));

    }




}


//->set ( 'products.stock', '-', 'orders.quantity')