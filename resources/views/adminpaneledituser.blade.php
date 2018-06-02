@extends('layouts.admin')

@section('style')

	<style>
		input {
			color: #000;
		}

		.even input{ 	color: #000;	border: 0px;	background-color: #f9f9f9;
			 }


			.odd input{ background-color:#fff; color: #000; border: 0px;
			} 
	</style>

@endsection

@section('content')

 @include('partials.accountUsers')

@endsection

@section('footer')

    @include('partials.adminFooter')

@endsection