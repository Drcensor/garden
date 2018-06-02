<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Product;

use App\order;

use DB;

class UserEditController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	 $users = DB::table('users')->where('id', '=', auth()->id())->latest()->get(); 
        return view('edituser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return redirect('user/edituser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function searchUser(Request $request)
    {
            $request->validate([
                'search' => 'required|string|max:25', 
            ]);

        $users = DB::table('users')
                        ->where('firstname', 'like', '%' . request('search') . '%')
                        ->orWhere('lastname', 'like', '%' . request('search') . '%')
                        ->get();

        
        return view('adminEditUser', compact('users'));
    }


     public function searchUser2(Request $request)
    {
            $request->validate([
                'search' => 'required|string|max:25', 
            ]);

        $users = DB::table('users')
                        ->where('firstname', 'like', '%' . request('search') . '%')
                        ->orWhere('lastname', 'like', '%' . request('search') . '%')
                        ->get();

        
        return view('adminDeleteUser', compact('users'));
    }

      public function searchUser3(Request $request)
    {
            $request->validate([
                'search' => 'required|string|max:25', 
            ]);

        $users = DB::table('users')
                        ->where('firstname', 'like', '%' . request('search') . '%')
                        ->orWhere('lastname', 'like', '%' . request('search') . '%')
                        ->get();

        
        return view('adminpaneledituser', compact('users'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    } 

     public function editFirstname(Request $request)
    {
    	$this->validate($request, [

                'firstname' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'firstname' => ucfirst(request('firstname')),
                     
        ]);

            return redirect('user/edituser');
    } 

     public function editLastname(Request $request)
    {
    	$this->validate($request, [

                'lastname' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'lastname' => ucfirst(request('lastname')),
                     
        ]);

            return redirect('user/edituser');
    } 

      public function editEmail(Request $request)
    {
    	$this->validate($request, [

                'email' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'email' => request('email'),
                     
        ]);

            return redirect('user/edituser');
    } 

      public function editStreet(Request $request)
    {
    	$this->validate($request, [

                'number_street' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
             'number_street' => request('number_street'),
                     
        ]);

            return redirect('user/edituser');
    } 

      public function editCity(Request $request)
    {
    	$this->validate($request, [

                'city' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'city' => request('city'),
                     
        ]);

            return redirect('user/edituser');
    } 


     public function editCounty(Request $request)
    {
    	$this->validate($request, [

                'county' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'county' => request('county'),
                     
        ]);

            //return $this->index();

            return redirect('user/edituser');
    } 


      public function editPostcode(Request $request)
    {
    	$this->validate($request, [

                'postcode' => 'required', 
                
                  ]);
         $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'postcode' => request('postcode')
                     
        ]);

            return redirect('user/edituser');
    } 




     public function profile() 
    {
        
        return view('profile',array('user' => Auth::User()) );
    } 

     public function update_avatar(Request $request){

      

    }

    public function uploads() {

      $updates =  DB::table('users')
            ->where('id', '=', auth()->id())
            ->update([
            'firstname' => ucfirst(request('firstname')),
             'lastname' => ucfirst(request('lastname')),
            'email' => request('email'),
            'number_street' => request('number_street'),
            'city' => request('city'),
            'county' => request('county'),
            'postcode' => request('postcode')           
        ]);

            return $this->show();
     }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
