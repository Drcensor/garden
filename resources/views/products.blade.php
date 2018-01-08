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

            hr {

            	clear: both;
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

            	bord/er: 1px black solid;
            }
            .containers{
                width:400px;
                text-align: center;
                margin: auto;
            }
            #footer {

                min-height: 200px;
                bottom: 0px;
                
            }

            #centering {

            	width: 1000px;
            	height: 700px;
            	margin: auto;
            	
            }

            



.targetarea { /* CSS for container div(s) of the zoomable image */
	width: 325px; /* wide or wider than the widest zoomable image */
	height: 338px; /* high or higher than the tallest zoomable image */
	margin-top:3px;
}

#two { /* Added CSS for second target div of zoomable images */
	height: 243px; /* high or higher than the tallest zoomable image */
}

.targetarea img { /* zoomable image */
	margin: auto; /* for horizontal centering */
	display: block; /* also for horizontal centering */
	position: relative; /* along with on the fly calculations in script, for vertical centering */
	border-width: 0;
}

.thumbs { /* divs holding the trigger links - styles optional, used here to center their links below their respective zoomable image */
	padding-top: 25px;
	width: 325px;
	text-align: center;
}

.thumbs a { /* trigger links on the thumbnail images */
	text-decoration: none; /* avoid underlines of images, text or spaces in these links */
}

.thumbs img { /* trigger images - the thumbnails used to load new zoomable images into the targetarea */
	border-width: 0; /* avoid default borders in some browsers */
}

#description, #description2 {
	position: absolute; /* required for description folows image bottom (descpos: true) */
	width: 325px; /* should be width of zoomable image container (.targetarea) */
	text-align: center;
	font: bold 95% sans-serif;
	margin-top: 3px; /* when following image bottom, this sets a fixed distance for that */
	color: #222;
	background-color: #fff;
}
/*css below is for the image and text box*/


/*this is for products page*/
.onebyone{
	float:left;
	height:210px;
	width:100%;
	margin:10px 0 0 0;
}

.onebyone img {
	width:200px;
	height:200px;
	border:0px;
	margin:0 0 0 30px;
	
}
.sidebyside{
	float:left;
	margin-left: 30px;
	
}
.outerbox{
	float:left;
	height:80px;
	width:100%;
	padding:0px;
	margin:10px 0 10px 0;
}
.innerbox{
	float:left;
	border:solid #666 1px;
	height:80px;
	width:198px;
	margin:3px 0px 0px 30px;
}
.innerbox p {
	padding:0px;
	margin:0px;
}

/* h1 on the about us page and Contact page*/
.cen{
	text-align:center;
	font-weight: bold;
}
.col{
	color:red;
}


        </style>

        
   

		
	
			<meta charset="utf-8">
			
			<link rel="stylesheet" href="../../public/css/multizoom.css" type="text/css" /><!--link for the image enlarger -->
			<link rel="stylesheet" type="text/css" href="../../public/css/garden.css"/>
			<link rel="icon"  type="image/jpg"  href="../images/favicon.jpg"/><!-- a link to the favicon image placed in the title above  -->
			
				<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
				</script>-->
				<script type="text/javascript" src="../js/jquery1.min.js"></script>
				<script type="text/javascript" src="../../js/multizoom.js"></script>
				<script type="text/javascript" src="../../js/multizoom1.js">
				</script>
				
			
	
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
        	 	<div>

		             @include ('../partials/nav')
		        </div>
           
	                <div class="title m-b-md">
	                   {{ config('app.name', 'Garden') }}<br />


	                </div>
				
<div id="centering">								

				<div class="onebyone"><!--image enlarger requires multizoom and mulitizoom1 js files to work  -->

							<img id="image1" class="sidebyside"  src="../images/pointsettiasmall.jpg" alt="plant of the pointsettia"/>

							<img id="image2" class="sidebyside" src="../images/hyacinthsmall.jpg" alt="plant of the hyacinth "/>

							<img id="image3" class="sidebyside" src="../images/pansysmall.jpg" alt="plant of the pansy "/>

							<img id="image4" class="sidebyside" src="../images/geraniumsmall.jpg" alt="plant of the geranium "/>
				</div>

		<div class="outerbox">

						<div class="innerbox">
						<p class="cen">
						<strong>Pointsettia</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />
						
						</p>
						</div>

						<div class="innerbox">
						<p class="cen">
						<strong>Hyacinth</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />
						
						</p>
						</div>

						<div class="innerbox">
						<p class="cen">
						<strong>Pansy</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />
						
						</p>
						</div>

						<div class="innerbox">
						<p class="cen">
						<strong>Geranium</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />
						
						</p>
						</div>

		</div>


			<div class="onebyone">
						<img id="image5" class="sidebyside"  src="../images/cyclamensmall.jpg" alt="plant of the cyclamen"/>

						<img id="image6" class="sidebyside" src="../images/spider-plantsmall.jpg" alt="plant of the spider-plant" />

						<img id="image7" class="sidebyside" src="../images/orchidsmall.jpg" alt="plant of the orchid" />

						<img id="image8" class="sidebyside" src="../images/rainbow-rosesmall.jpg" alt="plant of the rainbow-roses "/>
			</div>
			<div class="outerbox">

						<div class="innerbox">
						<p class="cen">
						<strong>Cyclamen</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />
						</p>
						</div>

						<div class="innerbox">
						<p class="cen">
						<strong>Spider Plant</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />						
						</p>
						</div>

						<div class="innerbox">
						<p class="cen">
						<strong>Orchid</strong><br />
						a perfect gift for you<br />
						<a href="#">put in Basket &#163;5.99</a><br />						
						</p>
						</div>

						<div class="innerbox">
						<p class="cen">
						<strong>Rainbow rose</strong><br />
						a perfect gift for You<br />
						<a href="#">put in Basket &#163;5.99</a><br />						
						</p>
						</div>

			</div>
</div><!--center the images  -->
</div><!-- end of content-->
<hr />
							
								
			<!--    changes will be above here  -->					
								<div id="footer">
									<p id="copy">
								&copy; <script  type="text/javascript">
				<!-- Initialize variables and define array for date				
				var time=new Date();				
				var year=time.getYear();
				if (year < 2000)
				year = year + 1900;				
				document.write( year);
				// End script for copyright date -->
					 </script>
					 </p>
					 <p id="terms">
					<a href="privacy-policy.html">Privacy Policy </a> 
									</p>
									<div id="media">
									<img id="money" src="../images/paypal.gif" alt="logo" />
									<a href="https://www.facebook.com/"><img class="media1" src="../images/facebook.png" alt="logo" /></a>
									<a href="https://twitter.com/"><img class="media1" src="../images/twitter.png" alt="logo" /></a>
									
									</div>
								</div><!--end of footer-->

						
				

	
	</body>
</html>