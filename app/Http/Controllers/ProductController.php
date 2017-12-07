<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
    {
        return view('form1');
    }

     public function link()
    {
       
        return view('query.product');

     }
}
