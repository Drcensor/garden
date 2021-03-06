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
        $this->middleware('admin');
    }



    public function index() 
    {
         $users = DB::table('users')->get();

        $products = DB::table('products')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->orderBy('users_id', 'asc')
            ->paginate(4);

        return view('adminpanel', compact(['users','products']));
    }

     public function charts()
    {
       // return view('adminpanel');
        return view('adminpanelCharts');
    }


      public function editUser()
    {
        $users = DB::table('users')->get();

        return view('adminEditUser', compact('users'));
    }

      public function stock()
    {

         $editproducts = DB::table('products')->orderBy('id', 'asc')->latest() ->paginate(7);

        

        return view('adminstock', compact(['editproducts']));
    }



      public function productstock()
    {

        
        return view('adminNewProduct');
    }


      public function stockinsert()
    {

         $stockproducts = DB::table('products')->insert(
             [
                'plant' => request('plant'),
                 'description' => request( 'description'),
                'price' => request('price'),
                'stock' => request('stock')
               
             ]);    //inserting a product to db
        $editproducts = DB::table('products')->orderBy('id', 'asc')->latest() ->paginate(7);
  

         // $editproducts = DB::table('products')->orderBy('id', 'asc')->latest()->get();

        return view('adminNewProduct', compact(['editproducts']));
    }


    public function productdelete() {

          $editproduct = DB::table('products')->latest()->get();

         $editproducts = DB::table('products')->orderBy('id', 'asc')->latest()->paginate(5);

        return view('adminDeleteProduct', compact(['editproducts']));
    }

     public function adminUserDelete() {       

         $users = DB::table('users')->get();

        return view('adminDeleteUser', compact(['users'])); 
    }

    public function userDelete(Request $request) {

         $request->validate([

                'id' => 'required|int',
                
        ]);

         $delete = DB::table('users')->where('id', $_POST['id'])->delete();

         $users = DB::table('users')->get();

        return view('adminDeleteUser', compact(['users'])); 
    }


     public function adminproductdelete(Request $request) {

        $request->validate([

                'id' => 'required|int',
                
        ]);

        $delete = DB::table('products')->where('id', $_POST['id'])->delete();

        $editproduct = DB::table('products')->latest()->get();

        $editproducts = DB::table('products')->orderBy('id', 'asc')->latest()->paginate(5);
        
       return view('adminDeleteProduct', compact(['editproduct', 'editproducts']));
           // return $this->productdelete();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $users = DB::table('users')->get();
        return view('adminpaneledituser', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

       
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
    // public function update(Request $request, UserAdmin $userAdmin)
    // {
    //     //
    // }


    public function update()
    {

         

       $updates =  DB::table('users')
            ->where('id', $_POST['id'])
            ->update(['firstname' => ucfirst(request('firstname')),
             'lastname' => ucfirst(request('lastname')),
            'email' => request('email')
           
        ]);

            $users = DB::table('users')->latest()->get();

            return view('adminEditUser', compact(['users']));
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
