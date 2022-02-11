<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Tennis Club du Bois de la Cambre - @yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@stack('styles')

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
  </head>
  <body>
    
@include('layouts.header')

<main>


@yield('content')


</main>

<!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
 @include('layouts.footer')


  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://kit.fontawesome.com/9a75d89802.js" crossorigin="anonymous"></script>
 @stack('scripts')     
  </body>
</html>
