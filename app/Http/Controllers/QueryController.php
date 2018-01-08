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

    // public function show()
    // {

    //     $users = DB::table('users')->get();

    //     return view('accounts', ['users' => $users]);

    // }


    //  public function create()
    // {
       
    //     return view('query.product');

    //  }

      public function create()
    {

       

        $orders = DB::table('orders')->insert(
             [
                'users_id' => auth()->id(),
                 'product_id' => request( 'product_id'),
                'quantity' => request('quantity')
               


             ]);

       

         $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();

    
      $products = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

          //$products = DB::table('products')->get();

         //  $product = 'select products.id,products.plant, products.price FROM products JOIN data ON products.id=orders.product_id';

           

      
       return view('thankyou', compact(['ordered', 'products' ,'product']));

    }




}
