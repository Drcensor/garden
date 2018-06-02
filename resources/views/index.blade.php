 <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>The Garden Nursey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type='text/javascript' src="{{ URL::asset('js/cookielawinfo.js') }}"></script>
   <script src="https://maps.googleapis.com/maps/api/js"></script><!--script for google maps  -->
        <script>
          function initialize() {
            var mapCanvas = document.getElementById('map_canvas');
            var mapOptions = {
            center: new google.maps.LatLng(53.002668, -2.179404),
            zoom:16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
              }
            var map = new google.maps.Map(mapCanvas, mapOptions)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
          </script><!--script for google maps  -->
  <link rel="stylesheet" href="<?php echo asset('css/company.css')?>" type="text/css"> 
  <style>

  </style>



   @yield('style') 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Garden Nursery</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right text-center">
          @guest
        <li><a href="/">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="{{ route('login') }}">LOGIN</a></li>
        <li><a href="{{ route('register') }}">REGISTER</a></li> 
         @else
        <li><a href="/">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="/user">DASHBOARD</a></li>
         @endguest
      </ul>
    
    </div>
  </div>
</nav>
          @if ($flash = session('message'))
           <div class="alert alert-success" role="alert" style="position: absolute; top:200px; z-index: 10; height:40px; width:30%;">
                <strong>{{ $flash }}</strong>
           </div>

           @endif
<div class="jumbotron text-center">
  <h1>The Garden Nursery</h1> 
  <p>We specialize in Bedding Plants</p>  


   
    @guest
         <form method="POST" action="/sub2">
           {{ csrf_field() }}
    
       <div class="input-group">
           <input type="email" name="email" class="form-control" size="155" placeholder="For our News Letter Email Address" required>
              
            <div class="input-group-btn">
            <button type="submit" class="btn btn-danger">Subscribe</button>
         </div>      
       </div> 
    </form>

      @else
      <form method="POST" action="/sub">
        {{ csrf_field() }}
        
           <div class="input-group">
               <input type="email" name="email" class="form-control" size="155" placeholder="For our News Letter Email Address" required>
                  
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger" >Subscribe</button>          
                </div>      
           </div> 
       </form>

     @endguest


  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8" id="wid">
      <h2>Info About Us</h2><br>

            <form class="example" action="/action_page.php" style="max-width:300px">
                <input type="text" placeholder="Search.." name="search2">
                <button type="submit" class="fa fa-search btn btn-danger">Search</button>
            </form>

      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br>&nbsp;<button class="btn btn-success btn-lg">Get in Touch</button><br>
      <p></p>
    </div>
    <div class="col-sm-4">
     <!--  <span class="glyphicon glyphicon-signal logo"></span> -->
    </div>
  </div>
</div>



<div class="container-fluid bg-green" >
  <div class="row">
   

    <div class="container">
  <h2>Sample Plants That We Have Available</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="width:100%; height: 500px;">

      <div class="item active">
        <img src="../images/pointsettial.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>POINTSETTIA'S</h3>
          <p>There are many varieties</p>
        </div>
      </div>

      <div class="item">
        <img src="../images/geraniuml.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>GERANIUM'S</h3>
          <p>Many colours available</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../images/orchidl.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>ORCHID'S</h3>
          <p>We love Creating New Varieties</p>
        </div>
      </div>

      <div class="item">
        <img src="../images/rosesl.jpg" alt="New York" style="width:100%; ">
        <div class="carousel-caption">
          <h3>NEW ROSES</h3>
          <p>We Have The Biggest Choices</p> 
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <!--  <span class="glyphicon glyphicon-chevron-left"></span> -->
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <!--   <span class="glyphicon glyphicon-chevron-right"></span> -->
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center ">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4 ">
      <span class="glyphicon glyphicon-tree-deciduous logo-small"></span>
      <h4>BEDDING PLANTS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-conifer logo-small"></span>
      <h4>GARDENING SERVIVES</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>INDOOR PRODUCTS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>SHEDS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-grain logo-small"></span>
      <h4>SEEDS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-blackboard logo-small"></span>
      <h4 >GARDEN TOOLS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-green">
  <h2>Portfolio</h2><br>
  <h4>Offers we have Made</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail"> 
       <p>£280.00</p>
        <p><strong>12 x 12 SHED</strong></p>
        <p>Bought, delivered and built in situe</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <p>£499.00</p>
        <p><strong>300 Bedding Plants</strong></p>
        <p>Bought delivered and planted</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail" style="color: #000">
        <p>£80.00</p>
        <p><strong>5 Garden tools</strong></p>
        <p>5 garden tools for the Price of 4</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
     <!--  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing for Garden Maintenance</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>

  <div class="row ">


    <div class="col-sm-4 col-xs-12" >
      <div class="panel panel-default text-center" >
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>1</strong> Hour</p>
          <p><strong>1</strong> Person</p>
          <p><strong>12"</strong> Lawn Mower</p>
          <p><strong>2</strong> bags for weeds</p>
          <p><strong>Free</strong> Quotes </p>
        </div>
        <div class="panel-footer">
          <h3>£19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>


    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Average</h1>
        </div>
        <div class="panel-body">
          <p><strong>2</strong> Hours</p>
          <p><strong>1</strong> Person</p>
          <p><strong>12"</strong> Lawn Mower</p>
          <p><strong>4</strong> bags for weeds</p>
          <p><strong>Free</strong>Quotes</p>
        </div>
        <div class="panel-footer">
          <h3>£39</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div> 


    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>2</strong> Hours</p>
          <p><strong>2</strong> People</p>
          <p><strong>15"</strong> Lawn Mower</p>
          <p><strong>8</strong> bags for weeds</p>
          <p><strong>2</strong> times a month</p>
        </div>
        <div class="panel-footer">
          <h3>£99</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid" style="background-color: #336600">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Stoke on Trent, UK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 7515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> enquires@gardennursey.com</p>
    </div>

    <div class="col-sm-7 slideanim">

      <form method="POST" action="/email">
    {{ csrf_field() }}
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text"  required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" type="text" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group"> 
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </form>


    </div>
  </div>
</div>


 <div id="map_canvas"  style="height:400px;width:100%;"></div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><a href=" {{  route('loginAdmin') }}">StokeBid designs</a></p>

<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.stokebid.com%2F" rel="nofollow" target="_blank" class="button share-on-facebook" title="Share on Facebook"><button type="button" class="btn btn-primary">Facebook</button></a>
<a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.stokebid.com%2F" rel="nofollow" target="_blank" class="button share-on-googleplus" title="Share on Google"><button type="button" class="btn btn-success">Google+</button></stokebid.com>
<a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.stokebid.com%2F&amp;via=stokebid.com" rel="nofollow" target="_blank" class="button share-on-twitter" title="Share on Twitter"><button type="button" class="btn btn-warning">Twitter</button></a>

</footer>


 <div id="cookie-law-info-bar">
      <span>This website uses cookies to improve your experience. We'll assume you're ok with this, but you can opt-out if you wish.
        <a href="#" id="cookie_action_close_header"  class="medium cli-plugin-button cli-plugin-main-button" >Accept</a>
           </span>
 </div> 


    <script type="text/javascript">
      //<![CDATA[
      jQuery(document).ready(function() {
        cli_show_cookiebar({
          settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#00aeef","border":"#444","border_on":false,"button_1_button_colour":"#000","button_1_button_hover":"#000000","button_1_link_colour":"#fff","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":false,"font_family":"inherit","header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":false,"scroll_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":false,"show_once":"10000"}'
        });
      });
      //]]>
    </script>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 9000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
