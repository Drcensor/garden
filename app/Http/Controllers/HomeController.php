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

        //  $users = DB::table('users')->get();    

          $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();

            $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

           return view('accounts', compact(['ordered', 'products'])  );
    }

    public function update()
    {

         $users = DB::table('users')->get();

       $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update(['firstname' => ucfirst(request('firstname')),
             'lastname' => ucfirst(request('lastname')),
            'email' => request('email')
           
        ]);


            //$products = $this->show();

            
             $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

            return view('accounts', compact(['updates', 'products']));
    }

    

}


