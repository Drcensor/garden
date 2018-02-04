

 <!-- <script type="text/javascript">   
                        function Redirect() 
                        {  
                        window.location="form1"; 
                        } 
                        document.write("You will be redirected to your accounts page in 1 seconds"); 
                        setTimeout('Redirect()', 1000);   
 </script> -->

 @extends('layouts.nav')

@section('style')

	<style>
		input {
			color: #000;
		}

		.even input{ 	color: #000;	border: 0px;	background-color: #f9f9f9;
			 }


			.odd input{ background-color:#000066; color: #fff; border: 0px;
 			}
	</style>

@endsection

@section('content')

 @include('partials.adminNewProduct')

@endsection

@section('footer')

   

@endsection