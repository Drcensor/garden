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
          

          $update = DB::table('products')->where('id', $_POST['product_id'])->decrement('stock', $_POST['quantity']);                

         return view('thankyou', compact(['ordered', 'products']));

    }

}
