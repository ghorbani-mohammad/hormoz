<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>گروه صنعتی هرمز</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('head')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      @font-face {
          font-family: iransans;
          src: url(fonts/iransans.woff2);
      }
      body{
        font-family: iransans;

      }
    </style>
  </head>

  <body>
    @include('contactHeader')
    @include('nav')
    <div class="container-fluid" style=" padding: 0px;">
      
      @yield('container-fluid-carousel')

    </div>

    <div class="container" style="direction: rtl;">
      @yield('container')
    </div>

    <div class="container-fluid px-0" style="direction: rtl;">
      
        @yield('content')

    </div>

    @include('footer')

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
