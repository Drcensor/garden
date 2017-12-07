<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use App\User;

use DB;

class QueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('thankyou');
    }

    public function show()
    {

        $users = DB::table('users')->get();

        return view('accounts', ['users' => $users]);

    }


    //  public function create()
    // {
       
    //     return view('query.product');

    //  }

      public function create()
    {

        DB::table('purchase')->insert(
             [
                'users_id' => auth()->id(),
                 'plant' => request('plant'),
                'quantity' => request('quantity'),
                'price' => request('price')

             ]);

        return view('thankyou');

    }




}
