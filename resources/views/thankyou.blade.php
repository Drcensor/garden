@extends('partials.master')

@section('style')

   <style>
             div {

                bor/der: 1px black solid;
            }
            .containers{
                width:400px;
                text-align: center;
                margin: auto;
            }
     </style>

       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection

@section('content')

    @include('partials.thanku')

@endsection

@section('footer')

    @include('partials.footer')

@endsection



