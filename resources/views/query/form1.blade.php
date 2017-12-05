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

            	border: 1px black solid;
            }

            #form1{

            	width: 300px;
            	text-align: center;
            	margin: auto;
            }

            .bigger {

            	float;right;
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
		                    <a href="{{ route('user/form1') }}">form to order</a>
		                    <a href="#">page to edit</a>
		                    <a href="https://laravel-news.com">News</a>
		                    <a href="https://forge.laravel.com">Forge</a>
		                    <a href="https://github.com/laravel/laravel">GitHub</a>
		            </div>
		        </div>

	 <div class="content">

	<div id="form1">
										
										<h3>Please fill in the Form</h3>

										
		<form method="post" action="user/purchase">
					<select id="totheright">
					  <option  value="Doctor">Doctor</option>
					  <option value="Miss">Miss</option>
					  <option  value="Mrs">Mrs</option>
					  <option  value="Mr" selected>Mr</option>
					</select><br /><br />
					<label>first Name &#58;</label><input class="bigger"  type="text" name="fname" value="name" onclick="this.value='';"/><br /><br />
					<label>Last Name &#58;</label><input class="bigger" type="text" name="lname" value="name" onclick="this.value='';"/><br /><br />

					<label>Mobile or Home phone &#58;</label><input class="bigger" type="text" name="phone" value="phone number" onclick="this.value='';"/><br /><br />
					<label>Email &#58;</label><input class="bigger" type="text" name="email" value="Email" onclick="this.value='';"/><br /><br />
					<label>Plant Name &#58;</label><input class="bigger" type="text" name="pcode" value="Plant Name" onclick="this.value='';"/><br /><br />
					<label>Plant Code &#58;</label><input class="bigger" type="text" name="pcode" value="Plant Code" onclick="this.value='';"/><br /><br />
					<label>Quantity &#58; </label> <input class="bigger" type="number" name="quantity" min="1" max="5" /><br /><br />
					<input type="reset" id="resetbuttonid" style="display:none;">

					<img 
						 class="totheright"
					   src="images/reset.png" 
					   width="68" 
					   height="28" 
					   alt="reset the form" 
					   title="Click to reset the form."
					   onclick="document.getElementById('resetbuttonid').click()">
					<input class="totheright1" type="image" src="images/send.png" alt="Submit" width="68" height="28"  />
		</form>

	</div><!--end of form tag -->

</div><!--end of content tag -->




</body>
</html>