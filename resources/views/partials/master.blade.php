<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Garden') }}</title>

       
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--<script type='text/javascript' src='https://www.nidesign.co.uk/web-site-seo-design/plugins/cookie-law-info/js/cookielawinfo.js?ver=1.5.3'></script>-->
         <script type='text/javascript' src="{{ URL::asset('js/cookielawinfo.js') }}"></script>
         <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css"> 
         <link rel="stylesheet" href="<?php echo asset('css/formMedia.css')?>" type="text/css"> 
         <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
          <style> body{ background-color: white; } </style>
   
          @yield('style')

    </head>
    
    <body>
        @include('partials.auth') 

      

         @yield('content')



         @yield('footer')


                                       
    </body>
</html>
