@extends('partials.master')

@section('style')

   <style>
            div {

                bor/der: 1px black solid;
            }
            .containers{
                width:1000px;
                text-align: center;
                margin: auto;
            }

             .even input{    color: #000;    border: 0px;    background-color: #f9f9f9;
             }


            .odd input{ background-color:#fff; color: #000; border: 0px;
            }
           
     </style>

@endsection

@section('content')

    @include('partials.productdeletepage')

@endsection


@section('footer')

    @include('partials.footer')

@endsection