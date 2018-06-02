<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Product;

use App\order;

use DB;

class SearchController extends Controller
{
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


     public function searchUserDelete(Request $request) 
    {
            $request->validate([
                'search' => 'required|string|max:25', 
            ]);

        $users = DB::table('users')
                        ->where('firstname', 'like', '%' . request('search') . '%')
                        ->orWhere('lastname', 'like', '%' . request('search') . '%')
                        ->get();

        
        return view('searchUserDelete', compact('users'));
    }

      public function searchUserEdit(Request $request) 
    {
            $request->validate([
                'search' => 'required|string|max:25', 
            ]);

        $users = DB::table('users')
                        ->where('firstname', 'like', '%' . request('search') . '%')
                        ->orWhere('lastname', 'like', '%' . request('search') . '%')
                        ->get();

        
        return view('searchUserEdit', compact('users'));
    }

    public function editPage() 
    {

          $users = DB::table('users')->get();
        return view('searchUserEdit', compact('users'));
    }

    public function userEdit() 
    {
          $users = DB::table('users')->get();
        return view('searchUserEdit', compact('users'));

    }

     public function deletePage() 
    {

          $users = DB::table('users')->get();
        return view('searchUserDelete', compact('users'));
    }

    public function userDelete() 
    {
          $users = DB::table('users')->get();
        return view('searchUserEdit', compact('users'));

    }
}
