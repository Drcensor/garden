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

		             @include ('partials/nav')
		        </div>

	 <div cla/ss="content">


	 	

	<div id="form1">
										
										<h3>Please fill in the Form</h3>

										


		<form method="post" action="../user/thankyou ">

				{{csrf_field()}}


                    <label>Plant Name &#58;<input class="bigger" type="text" name="plant" value="Pointsettia" onclick="this.value='';"/><br /><br />


					<label>Quantity &#58; </label> <input class="bigger" type="number" name="quantity" min="0" max="5" value="0"/><br /><br />

					<label>Plant Price &#58;</label><input class="bigger" type="text" name="price" value="4.99" onclick="this.value='';"/><br /><br />
					<input type="reset" id="resetbuttonid" style="display:none;">

					

					<button type="submit" class="btn btn-primary">
                                    Purchase
                                </button>
		</form>

	</div><!--end of form tag -->

</div><!--end of content tag -->




</body>
</html>