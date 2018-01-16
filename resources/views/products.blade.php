@extends('partials.master')

@section('style')

  

   <link rel="stylesheet" href="../../public/css/multizoom.css" type="text/css" /><!--link for the image enlarger -->
			<link rel="stylesheet" type="text/css" href="../../public/css/garden.css"/>
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

    @include('partials.productcontent')

@endsection

@section('footer')

    @include('partials.footer')

@endsection




