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


    public function products() {

        $baskets = DB::table('basket')->where('users_id', '=', auth()->id())->count();

        return view('products', compact('baskets'));
    }

    

      public function create()
    {

        $orders = DB::table('orders')->insert(
             [
                'users_id' => auth()->id(),
                 'product_id' => request( 'product_id'),
                'quantity' => request('quantity')
               
             ]);    //inserting a order to db

           $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();   //selecting all from orders to display

           $products = DB::table('products')->get();
          
          $update = DB::table('products')->where('id', $_POST['product_id'])->decrement('stock', $_POST['quantity']);  //returning stock to database 

           $baskets = DB::table('basket')->where('users_id', '=', auth()->id())->count();             

         return view('thankyou', compact(['ordered', 'baskets']));

    }




}
