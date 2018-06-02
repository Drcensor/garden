@extends('layouts.admin')

@section('style')
<style type="text/css">
	
.table th, tr {
	color: #000;
}
input {
	color: #000;
}

</style>

@endsection

@section('content')

@include('partials.searchuseredit')

@endsection

@section('footer')

    @include('partials.adminFooter')

@endsection