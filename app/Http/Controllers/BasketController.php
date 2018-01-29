<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

use Carbon\Carbon;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }  


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $basket = DB::table('basket')->insert(
             [
                'users_id' => auth()->id(),
                 'product_id' => request( 'product_id'),
                'quantity' => request('quantity')
               
             ]);    //inserting a basket to db

         $baskets = DB::table('basket')->where('users_id', '=', auth()->id())->count();

            return view('products', compact('baskets'));    
    }


    

      public function complete(Request $request)
    {

        $orders = DB::table('orders')->insert(
             [
                'users_id' => auth()->id(),
                 'product_id' => request( 'product_id'),
                'quantity' => request('quantity')
               
             ]);    //inserting a order to db

        $request->validate([

                'id' => 'required|int',
                'quantity' => 'required|int'
        ]);

            $ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();   //selecting all from orders to display
            $product = DB::table('products')->latest()->get();
            $update = DB::table('products')->where('id', $_POST['product_id'])->decrement('stock', $request['quantity']);  //returning stock to database 


            $delete = DB::table('basket')->where('id', $_POST['id'])->delete(); 

            $basket = DB::table('basket')->where('users_id', '=', auth()->id())->latest()->get();

            $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('basket', 'products.id', '=', 'basket.product_id')
            ->get();
          
            $baskets = DB::table('basket')->where('users_id', '=', auth()->id())->count();             

         return view('form1', compact(['ordered', 'baskets', 'products', 'basket']));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        // $basket = DB::table('basket')->where('users_id', '=', auth()->id())->latest()->get();

        //   $products = DB::table('products')->where('users_id', '=', auth()->id())
        //     ->join('orders', 'products.id', '=', 'basket.product_id')
        //     ->get();

        //    return view('accounts', compact(['basket', 'products'])  );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Basket $basket)
    {
       $request->validate([

                'id' => 'required|int',
                'quantity' => 'required|int'
        ]);

         $basket = DB::table('basket')->where('users_id', '=', auth()->id())->latest()->get();


        $delete = DB::table('basket')->where('id', $_POST['id'])->delete(); 

        

         $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('basket', 'products.id', '=', 'basket.product_id')
            ->get();
 
        $baskets = DB::table('basket')->where('users_id', '=', auth()->id())->count();

        return view('form1', compact('delete','products', 'basket', 'baskets'));
    }
}
