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

     	 $products = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();

     	return view('productdelete', compact('products'));
     }



     public function delete() {

     	 //$ordered = DB::table('orders')->where('users_id', '=', auth()->id())->latest()->get();

     	$delete = DB::table('orders')->where('id', '=', $_POST["id"])->delete();

     	 $products = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->get();
 
     	

     	return view('productdelete', compact('delete','products'));
     }
}
