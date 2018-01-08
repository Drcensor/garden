<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Garden') }}</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css"> 
        <style>
           

            div {

            	bor/der: 1px black solid;
            }
            .containers{
                width:400px;
                text-align: center;
                margin: auto;
            }
            .footer {

                min-height: 200px;
            }
        </style>

        
    </head>
    <body>
                  @include('partials.auth')

       


        	 <div class="content">

		             @include ('../partials/nav')

           
            	                <div class="title m-b-md">
            	                   {{ config('app.name', 'Garden') }}<br />
            	                </div>


	                <div class="links">

	                	  <h1>Your Accounts Information</h1>

	                	<strong>First name: </strong>{{$users = Auth::user()->firstname}}<br />
	                    <strong>Last name:  </strong> {{$users = Auth::user()->lastname}}<br />
	                    <strong>Email:      </strong>{{$users = Auth::user()->email}}<br />
	                    <strong>Created on: </strong>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at)) }}<br />
	                </div>


                     <div class="links">

                          <h1>Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>
                           
                          <div class="containers">

                        
                                     <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Quantity</th>
                                        <th>Plant Name</th>
                                        <th>Price</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach( $product as $purss )
                        
                                       <tr>                                                                                 
                                              <td>{{$purss->quantity}}</td> 
                                       
                                              <td>{{ $purss->plant }}</td>

                                              <td>{{ $purss->price  }}</td>

                                        </tr>

                                         @endforeach      
                                     
                                    </tbody>
                        </table>

                         </div>
 
                           
                        

            </div><!-- end of container-->

            </div><!-- end of content-->
            <div class='footer'></div>
        
    </body>
</html>
