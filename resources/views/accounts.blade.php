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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
               height: 100px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            div {

            	bor/der: 1px black solid;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/user') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>


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
                           
                         <ul>
                             
                             @foreach($purchase as $pur)
                        
                                         <li>
                                                 
                                                  Plant Name:{{ $pur->plant  }}<br />
                                                  Quantity of plants: {{ $pur->quantity}}<br />
                                                  Price  of Plant: £ {{ number_format($pur->price, 2)}}<br />    
                                                  purchased on: {{ date('d-m-Y', strtotime( $pur->created_at)) }}<br /> 
                                                  Total cost of Plants:£ {{ number_format($pur->quantity * $pur->price, 2) }}<br /><br />

                                        </li>

                         @endforeach

                       

                           </ul>
                       
                    </div>

            </div><!-- end of content-->
        
    </body>
</html>
