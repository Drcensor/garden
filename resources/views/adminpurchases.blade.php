@extends('layouts.nav')

@section('style')

	<style>

			.table-striped > tbody > tr:nth-of-type(odd)  {  background-color: #f9f9f9; 
			}

			.table-time > tbody > tr:nth-of-type(odd)  {	background-color: #000066;
			}



			.even input{ 	color: #000;	border: 0px;	background-color: #f9f9f9;
			 }


			.odd input{ background-color:#000066; color: #fff; border: 0px;
			}

	</style>

@endsection

@section('content')

@include('partials.adminAllOrders')

@endsection

@section('footer')

    @include('partials.adminFooter')

@endsection