
@extends('partials.master')

@section('style')

   <style>
            body {

                background-color: white
            }
            div {

                bor/der: 1px black solid;
            }
            td {

                color: #000
            }
            .containers{
                width:1000px;
                text-align: center;
                margin: auto;
            }

           
     </style>

@endsection

@section('content')

    @include('partials.accountscontents')

@endsection


@section('footer')

    @include('partials.footer')

@endsection





       


        	
        
 
