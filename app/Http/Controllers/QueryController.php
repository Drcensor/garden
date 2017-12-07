<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use App\Purchase;

use DB;

use Carbon\Carbon;

class QueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($purchase)
    {
        $purchase = DB::table('purchase')->get();
         return view('thankyou', ['purchase' => $purchase]);
    }

    // public function show()
    // {

    //     $users = DB::table('users')->get();

    //     return view('accounts', ['users' => $users]);

    // }


    //  public function create()
    // {
       
    //     return view('query.product');

    //  }

      public function create()
    {

        $purchase = DB::table('purchase')->insert(
             [
                'users_id' => auth()->id(),
                 'plant' => request('plant'),
                'quantity' => request('quantity'),
                'price' => request('price')


             ]);

         $purchase = DB::table('purchase')->where('users_id', '=', auth()->id())->latest()->get();



        return view('thankyou', ['purchase' => $purchase]);

    }






}
