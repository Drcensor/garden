
@extends('partials.master')

@section('style') 

   <style>
            body {

                background-color: white
            }

            div {
                bord/er: 1px black solid;
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

            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                border: 0px;
            }

            #customers td, #customers th {
                border: 0px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #993333;
                color: white;
            }

            .table-striped th {
                background-color: #993333;
                color: #fff;
            }

           
     </style>

@endsection

@section('content')

    @include('partials.accountscontents')

@endsection


@section('footer')

    @include('partials.footer')

@endsection





       


        	
        
 
