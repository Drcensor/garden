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

        return view('accounts', ['users' => $users], ['purchase' => $purchase]);

    }
}
