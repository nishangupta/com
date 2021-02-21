<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>ASP - Abroad Study Planner</title>
    
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @stack('css')
        
    </head>
    <body>
    
      @yield('content')

    <script src="{{asset('js/app.js')}}"></script>  
    @stack('js')
    </body>
</html>