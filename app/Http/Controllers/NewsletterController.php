<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Auth;
use App\Mail\Newsletter;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
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

        $this->validate($request, [

                'email' => 'required|max:155', 
                
                  ]);

         $email = $_POST['email'];
        
         $result = DB::table('newsletters')->where( 'email', '=', $email)->count();
    
         if($result = 0){
                 $news = DB::table('newsletters')->insert(
                     [
                        'users_id' => auth()->id(),
                        'email' => request('email'),
                       
                     ]);    //inserting a newsletter to db 
               
                  $id = Auth::id();

                  $user = User::find($id);


                  //  \Mail::to($user)->send(new Newsletter);
                    
                    session()->flash('message', 'Thank you for your email!'); 

                  return view('index');
    
     }else{
         
                   session()->flash('message', 'you have already given your email!'); 

                   return back();
           }

}


     public function newsStore(Request $request)
    {

        $this->validate($request, [

                'email' => 'required|max:155', 
                
                  ]);


          $email = $request['email'];

          $result = DB::table('newsletters')->where( 'email', '=', $email)->count();   

          if($result == 0){

                  $news = DB::table('newsletters')->insert(
                      [
                         'users_id' => 0,
                         'email' => request('email'),
                       
                      ]);

                     session()->flash('message', 'Thank you for your email!');  
                
                      return back();

           }else{

                    session()->flash('message', 'you have already given your email!');   
                    return back();
          }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        return view('test');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
