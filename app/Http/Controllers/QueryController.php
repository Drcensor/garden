<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('query.form1');
    }

    public function show()
    {

        $users = DB::table('users')->get();

        return view('accounts', ['users' => $users]);


        //return view('accounts');
    }




}
