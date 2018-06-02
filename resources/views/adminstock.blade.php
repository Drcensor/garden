@extends('layouts.admin')

@section('style')

	<style>
		input {
			color: #000;
			width: 100px;
		}

		    .even input{ 	color: #000;	border: 0px;	background-color: #f9f9f9;
			 }


			.odd input{ background-color:#fff;  border: 0px;
 			}

 			.table th, tr {
				color: #000;
			}
	</style>

@endsection

@section('content')

 @include('partials.adminstok')

@endsection

@section('footer')

    @include('partials.adminFooter')

@endsection