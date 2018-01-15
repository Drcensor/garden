<?php

namespace App\Http\Controllers;

use App\UserAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

use Carbon\Carbon;

class UserAdminController extends Controller
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
       // return view('adminpanel');
        return view('adminpanel');
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
       //  $admins = DB::table('user_admins')->where('users_id', '6')->get();

        //  $this->validate(request(),[

        //     'username' => 'required',
        //     'password' => 'required'

        // ]);

         // $user = DB::table('users')->where([

         //    'email' => 'dr@gmail.com',
         //     'password' => '123456'
         // ])->get();

         // \auth::login($user);

        //  if(auth()->attempt(request([
        //     'email' => 'dr@gmail.com',
        //     'password' => '123456'
        // ])));

        return view('adminpanel');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(UserAdmin $userAdmin)
    {
        $this->validate(request(),[

            'username' => 'required',
            'password' => 'required'

        ]);
     //  \auth()->loginAdmin($useradmin);

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAdmin $userAdmin)
    {
        auth()->logout();
        return redirect()->home();
    }
}
