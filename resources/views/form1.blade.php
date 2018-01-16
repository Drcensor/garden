@extends('partials.master')


@section('style')

   <style>
            

            div {

                bor/der: 1px black solid;
            }

            #form1{

                width: 950px;
                te/xt-align: center;
                margin: auto;
            }

            .bigger {

                flo/at:right;
            }
        </style>

@endsection





@section('content')

    @include('partials.purchase')

@endsection


@section('footer')

    @include('partials.footer')

@endsection


	

        	




