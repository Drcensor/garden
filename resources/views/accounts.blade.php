
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
            .footer {
               min-height: 100px;
            }
     </style>

@endsection

@section('content')

    @include('partials.accountscontents')

@endsection


@section('footer')

    @include('partials.footer')

@endsection





       


        	
        
 
