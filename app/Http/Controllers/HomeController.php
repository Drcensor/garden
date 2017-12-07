<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



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

         $purchase = DB::table('purchase')->where('users_id', '=', auth()->id())->latest()->get();



        $quantity = DB::table('purchase')->select(DB::raw('sum(purchase.quantity*purchase.price) AS total_sales'))->where('users_id', '=', auth()->id())->get();
         $price = DB::table('purchase')->select('price',  'quantity')->where('users_id', '=', auth()->id())->get();

         $total_sales = 'total_sales';
        // $int = intval($quantity );
        // $int2 = intval( $price );
        // $total = $int * $int2;

        return view('accounts', ['users' => $users], ['purchase' => $purchase],['purchase.quantity' => $quantity], ['purchase.price' => $price], ['total_sales' => $total_sales]);


        //return view('accounts');
    }
}
