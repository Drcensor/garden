<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use DB;

use Carbon\Carbon;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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

    public function searchUser(Request $request)
    {
            $request->validate([
                'search' => 'required|string|max:25', 
            ]);

        $users = DB::table('users')
                        ->where('firstname', 'like', request('search') . '%')
                        ->get();

        
        return view('admin/allUsers', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

         $users = DB::table('users')->get();

       //  $products = $this->show(); 

        $products = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->paginate(7);
            
       return view('adminpurchases', compact(['users','products']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

         $_POST['id'];

         $updates =  DB::table('products')
            ->where('id',  $_POST['id'])
            ->update([


            'plant' => request('plant'),

             'description' => request('description'),

             'price' => request('price'),

             'stock' => request('stock'),

             'created_at' => request('created_at')
           
        ]);

              $editproducts = DB::table('products')->orderBy('id', 'asc')->latest() ->paginate(7);
         // $editproducts = DB::table('products')->latest()->get();  

            return view('adminstock', compact(['editproducts']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
