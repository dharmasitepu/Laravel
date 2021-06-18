<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

    <title>@yield('title')</title>
  </head>
  <body>
    @include('layout.v_nav')
    @yield('content')

<footer class="page-footer fint-small bg-primary">
    <div class="container container-fluid text-center">
    Footer
    </div>
</footer>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
  </body>
</html>