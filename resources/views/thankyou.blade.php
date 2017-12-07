<!DOCTYPE html>
<html>
<head>
	<title>purchase</title>

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

            #form1{

            	width: 350px;
            	te/xt-align: center;
            	margin: auto;
            }

            .bigger {

            	float:right;
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
             
                     <div class="links">

                          <h1>Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>
                           
                         <ul>
                             
                             @foreach($purchase as $pur)
                        
                         <li>
                          your ID:{{ $pur->users_id}}<br />  
                          Plant Name:{{ $pur->plant  }}<br />
                          Quantity of plants: {{ $pur->quantity}}<br />
                          Price  of Plant: £ {{ $pur->price}}<br />
                          purchased on: {{ $pur->created_at}}<br /> <br />
                        </li>

                         @endforeach

                           </ul>
                       
                    </div>
         </div>

    </body>
    </html>