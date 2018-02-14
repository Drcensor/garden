<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Pagination\LengthAwarePaginator;



class HomeController extends Controller
{

    //protected $price;
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
         // $baskets = DB::table('basket')->where('users_id', '=', auth()->id())->count();

        $orders = DB::table('orders')->where('users_id', '=', auth()->id())->count();

        return view('home', compact('orders', 'baskets'));
    }

    public function show()
    {
            $users = DB::table('users')->where('id', '=', auth()->id())->latest()->get(); 
            $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();
           $users_id = 'image'.auth()->id();

            $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->paginate(5);
            
           return view('accounts', compact(['users', 'ordered', 'products', 'baskets', 'users_id'])  );
    }


    public function update()
    {

       $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'firstname' => ucfirst(request('firstname')),
             'lastname' => ucfirst(request('lastname')),
            'email' => request('email'),
            'number_street' => request('number_street'),
            'city' => request('city'),
            'county' => request('county'),
            'postcode' => request('postcode')           
        ]);

            return $this->show();
    }


    public function edit() {
       
         $users = DB::table('users')->where('id', '=', auth()->id())->latest()->get(); 

          $users_id = 'image'.auth()->id();

        return view('edituser', compact(['baskets', 'users_id']));

    }

   
    

}


