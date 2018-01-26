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

             .bigger2 {

                width: 35px;
            }

            .bigger3 {

                width: 70px;
            }

            .content-left {

                float: left;
                width: 30%;
                margin-left: 10px;
            }

            .side-bar {
                float: left;
                width: 22%;
                margin: 60px 0px 0px 10px;
                min-width: 22%;
                background-color: #f9f9f9;

            }

            .content-right {

                float: right;
                width: 45%;
                padding-top: 20px;
                margin-right: 10px;
            }

             .even input{    color: #000;    border: 0px;    background-color: #f9f9f9;
             }


            .odd input{ background-color:#fff; color: #000; border: 0px;
            }
          
        </style>

@endsection





@section('content')

    @include('partials.purchase')

@endsection


@section('footer')

    @include('partials.footer')

@endsection


	

        	




