

 <!-- <script type="text/javascript">   
                        function Redirect() 
                        {  
                        window.location="form1"; 
                        } 
                        document.write("You will be redirected to your accounts page in 1 seconds"); 
                        setTimeout('Redirect()', 1000);   
 </script> -->

 @extends('layouts.admin')

@section('style')

	<style>
			input {
			color: #000;
			}

			.even input{ 	color: #000;	border: 0px;	background-color: #f9f9f9;
			 }


			.odd input{ background-color: #fff; border: 0px;
 			}

 			.table th, tr {
				color: #000;
			}
	</style>

@endsection

@section('content')

 @include('partials.adminNewProduct')

@endsection

@section('footer')

   

@endsection