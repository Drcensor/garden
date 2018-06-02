@extends('partials.master')

@section('style')

   <style>
            div {

                bor/der: 1px black solid;
            }
            .containers{

                width:95%;
                text-align: center;
                margin: auto;
            }
            .picwid {
                width: 30%;
                margin: auto;
            }

            input[type="submit"]{
                background:#0098cb;
                border:0px;
                border-radius:5px;
                color:#fff;
                padding:10px;
                margin:20px auto;
            }

            li{
                list-style-type:none;
                margin-right:10px;
                margin-bottom:10px;
                float:left;
            }
            .table {
                float: right;
                width: 90%;               
            }
            
             .table1 {
                float: left;
                width: 11.5%;               
            }

           
           


           #customers tr input { background-color:#fff; color: #000; border: 0px;
            }
          

            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 90%;
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
            
            #customers1 tr input { background-color:#fff; color: #000; border: 0px;
            }
          

            #customers1 {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                
                border: 0px;
            }

            #customers1 td, #customers th {
                border: 0px solid #ddd;
                padding: 8px;
            }

            #customers1 tr:nth-child(even){background-color: #f2f2f2;}

            #customers1 tr:hover {background-color: #ddd;}

            #customers1 th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #336600;
                color: white;
            }
             

            .media-left {               
                width: 100%;
                float: right;
            }

            .wid1 {
                width: 70%;
                margin: auto;
            }

            .wid {
                width: 100%;
                margin: auto;
                 min-height: 200px;
            }

            .modal-content {               
                width: 80%;               
            }

            .links {                
                width: 95%; 
            }
            .content {
               min-height: 500px;
            }
           
     </style>

@endsection

@section('content')

    @include('partials.edituserdetails')


@endsection


@section('footer')

  @include('partials.footer')

@endsection
