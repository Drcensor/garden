@extends('partials.master')

@section('style')

   <style>
            div {

                bor/der: 1px black solid;
            }
            .containers{
                width:800px;
                text-align: center;
                margin: auto;
            }
           
     </style>

@endsection

@section('content')

    @include('partials.edituserdetails')

@endsection


@section('footer')

    @include('partials.footer')

@endsection
