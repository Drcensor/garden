
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

            .even input{    color: #000;    border: 0px;    background-color: #f9f9f9;
             }


            .odd input{ background-color:#fff; color: #000; border: 0px;
            }

           
     </style>

@endsection

@section('content')

    @include('partials.accountscontents')

@endsection


@section('footer')

    @include('partials.footer')

@endsection





       


        	
        
 
