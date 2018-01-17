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
    public function edit(order $order)
    {
        //
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


         $editproducts = DB::table('products')->latest()->get();  

            return view('adminstock', compact(['updates', 'editproducts']));
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
