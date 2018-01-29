@extends('partials.master')

@section('style')

  <style>
#cookie-law-info-bar {
	border: 0;
	font-size: 10pt;
	margin: 0 auto;
	padding: 5px 0;
	position: absolute;
	text-align: center;
	width: 100%;
	z-index: 9999;
}
#cookie-law-info-again {
	font-size: 10pt;
	margin: 0;
	padding: 2px 10px;
	text-align: center;
	z-index: 9999;
	cursor: pointer;
}
#cookie-law-info-bar span {
	vertical-align: middle;
}
/** Buttons (http://papermashup.com/demos/css-buttons) */
.cli-plugin-button, .cli-plugin-button:visited {
	background: #222 url('../images/overlay.png') repeat-x;
	display: inline-block;
	padding: 5px 10px 6px;
	color: #fff;
	text-decoration: none;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	position: relative;
	cursor: pointer;
	margin: auto 10px;
}
.cli-plugin-button:hover {
	background-color: #111;
	color: #fff;
}
.cli-plugin-button:active {
	top: 1px;
}
.small.cli-plugin-button, .small.cli-plugin-button:visited {
	font-size: 11px;
}
.cli-plugin-button, .cli-plugin-button:visited,
	.medium.cli-plugin-button, .medium.cli-plugin-button:visited {
	font-size: 13px;
	font-weight: bold;
	line-height: 1;
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
}

/*
.large.cli-plugin-button, .large.cli-plugin-button:visited {
	font-size: 14px;
	padding: 8px 14px 9px;
}
.super.cli-plugin-button, .super.cli-plugin-button:visited {
	font-size: 34px;
	padding: 8px 14px 9px;
}
.pink.cli-plugin-button, .magenta.cli-plugin-button:visited {
	background-color: #e22092;
}
.pink.cli-plugin-button:hover {
	background-color: #c81e82;
}
.green.cli-plugin-button, .green.cli-plugin-button:visited {
	background-color: #91bd09;
}
.green.cli-plugin-button:hover {
	background-color: #749a02;
}
.red.cli-plugin-button, .red.cli-plugin-button:visited {
	background-color: #e62727;
}
.red.cli-plugin-button:hover {
	background-color: #cf2525;
}
.orange.cli-plugin-button, .orange.cli-plugin-button:visited {
	background-color: #ff5c00;
}
.orange.cli-plugin-button:hover {
	background-color: #d45500;
}
.blue.cli-plugin-button, .blue.cli-plugin-button:visited {
	background-color: #2981e4;
}
.blue.cli-plugin-button:hover {
	background-color: #2575cf;
}
.yellow.cli-plugin-button, .yellow.cli-plugin-button:visited {
	background-color: #ffb515;
}
.yellow.cli-plugin-button:hover {
	background-color: #fc9200; 
}*/
</style>

   <link rel="stylesheet" href="../../public/css/multizoom.css" type="text/css" /><!--link for the image enlarger -->
			<link rel="icon"  type="image/jpg"  href="../images/favicon.jpg"/><!-- a link to the favicon image placed in the title above  -->
			 <link rel="stylesheet" href="<?php echo asset('css/product.css')?>" type="text/css"> 
				<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
				</script>-->
				<script type="text/javascript" src="../js/jquery1.min.js"></script>
				<script type="text/javascript" src="../../js/multizoom.js"></script>
				<script type="text/javascript" src="../../js/multizoom1.js">
				</script>
				
@endsection 


@section('content')
</div>
@include('partials.header')

@include('partials.nav')
</div>

@include('partials.indexfrontpage')

@endsection

@section('footer')

    @include('partials.footer')

    <div id="cookie-law-info-bar"><span>This website uses cookies to improve your experience. We'll assume you're ok with this, but you can opt-out if you wish.<a href="#" id="cookie_action_close_header"  class="medium cli-plugin-button cli-plugin-main-button" >Accept</a> </span></div>    
    <script type="text/javascript">
      //<![CDATA[
      jQuery(document).ready(function() {
        cli_show_cookiebar({
          settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#00aeef","border":"#444","border_on":false,"button_1_button_colour":"#000","button_1_button_hover":"#000000","button_1_link_colour":"#fff","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":false,"font_family":"inherit","header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":false,"scroll_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":false,"show_once":"10000"}'
        });
      });
      //]]>
    </script>

@endsection

