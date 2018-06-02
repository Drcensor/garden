@extends('layouts.admin')

@section('style')
<style>

.table-striped > tbody > tr:nth-of-type(odd) {
  color: #000000;
  
}

.table-striped > tbody > tr:nth-of-type(even) {
  color: #000000;
  
}
.table-striped > thead > tr {
  color: #000000;
  
}

div {
     	bor/der: 1px red solid;

     }
hr {
	clear: both;
}
h1 {
	font-size: 22px;
}

.bg-blues {
	background-color: #1a8cff; 
}
</style>
@endsection



@section('content')

 @include('partials.accountUsersPurchases')

@endsection




@section('footer')

    @include('partials.adminFooter')

@endsection 