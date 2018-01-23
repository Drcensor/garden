<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

use Carbon\Carbon;


class ProductController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }


   public function index()
    {
         
        return view('form1');
    }


    

     public function link()
    {
       
        return view('query.product');

     }




     public  function show() {

     	 $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

     	return view('productdelete', compact('products'));
     }



     public function basket() {

        //


        return view('products');
     }


     public function delete(Request $request) {


     	$request->validate([

                'id' => 'required|int',
                'quantity' => 'required|int'
        ]);

        $delete = DB::table('orders')->where('id', $request['id'])->delete();

        $update = DB::table('products')->where('id', $_POST['product_id'])->increment('stock', $request['quantity']);   

     	 $products = DB::table('products')->where('users_id', '=', auth()->id())
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();
 
     	

     	return view('productdelete', compact('delete','products'));
     }

     public function admindelete(Request $request) {

          $delete = DB::table('orders')->where('id', $_POST['id'])->delete();

            $update = DB::table('products')->where('id', $_POST['product_id'])->increment('stock', $request['quantity']); 

          $users = DB::table('users')->get();

          $products = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

          return view('adminpurchases', compact(['delete','users','products']));
     }
}
