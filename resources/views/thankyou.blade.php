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
            .containers{
                width:400px;
                text-align: center;
                margin: auto;
            }
        </style>

       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

                        <div class="container">

                            

                                 <h1>Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>

                                 <div class="containers">
                                           
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{$users = Auth::user()->firstname}}</td>
                                        <td>{{$users = Auth::user()->lastname}}</td>
                                        <td>{{$users = Auth::user()->email}}</td>
                                      </tr>
                                    </tbody>
                                  </table>

                              </div>
                        </div>
                   


                   

                        <div class="containers">

                         

                                     <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Quantity</th>
                                        <th>Plant Name</th>
                                        <th>Price</th>
                                        <th>Cancel</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                        
                                         @foreach($products as $purss)
                        
                                       <tr>                                                                                 
                                              <td>{{$purss->quantity}}</td> 
                                       
                                              <td>{{ $purss->plant }}</td>

                                              <td>{{ $purss->price  }}</td>

                                              <td> <button type="submit" class="btn btn-primary"> cancel </button></td>

                                        </tr>

                                         @endforeach      
                                     
                                    </tbody>
                        </table>

                         </div>

                    </div>
                           
                        

            </div><!-- end of content-->
        
    </body>
</html>
