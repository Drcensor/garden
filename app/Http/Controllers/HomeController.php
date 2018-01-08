<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

use Carbon\Carbon;



class HomeController extends Controller
{

    protected $price;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {

          $users = DB::table('users')->get();

         // $product = DB::table('products')->get();

          $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();

            $product = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

          

         // return view('accounts', ['users' => $users], ['ordered' => $ordered], ['product' => $product] );
           return view('accounts', compact(['users' ,'ordered', 'product'])  );
    }
}


//, ['products' => $products]