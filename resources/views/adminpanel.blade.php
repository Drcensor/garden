@extends('layouts.nav')

@section('style')
<style>

.table-striped > tbody > tr:nth-of-type(odd) {
  color: #000000;
  
}
</style>
@endsection



@section('content')

 @include('partials.accountUsersPurchases')

@endsection




@section('footer')

    @include('partials.adminFooter')

@endsection 