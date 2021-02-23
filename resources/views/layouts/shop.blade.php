<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="OneTech shop project">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>@yield('page-header','Ecommerce')</title>
      
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
  </head>
  <body class="home-page home-01">

    <div class="super_container" id="app">
      @include('inc.shop.header')

      @yield('content')

      @include('inc.shop.footer')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    {{-- <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script> --}}
    {{-- <script src="assets/js/bootstrap.min.js"></script> --}}
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/functions.js"></script>

    @stack('js')

  </body>
    
</html>