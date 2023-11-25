<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="Codescandy" name="author">

  <title>Welcome to Online Shoping</title> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://freshcart.codescandy.com/assets/libs/slick-carousel/slick/slick.css" rel="stylesheet"/>
  <link href="https://freshcart.codescandy.com/assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet"/>
  <link href="https://freshcart.codescandy.com/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet"/>

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="https://freshcart.codescandy.com/assets/images/favicon/favicon.ico"/>

  <!-- Libs CSS -->
  <link href="https://freshcart.codescandy.com/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://freshcart.codescandy.com/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet"/>
  <link href="https://freshcart.codescandy.com/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet"/>

  <!-- Theme CSS -->
  <link rel="stylesheet" href="https://freshcart.codescandy.com/assets/css/theme.min.css">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>

</head>


<body>
  <!-- Header -->
  @include('Frontend.Partials.Header')




  <main>
    @yield('login')
    @yield('slider')
    @yield('category')
    @yield('discount')
    @yield('product')
    @yield('best_sale')
    @yield('offer')
    @yield('my_account')
    @yield('department')
  </main>


  <!-- Footer -->


  @include('Frontend.Partials.Footer')


  <!-- Javascript-->

  <!-- Libs JS -->
  <script src="https://freshcart.codescandy.com/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="https://freshcart.codescandy.com/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://freshcart.codescandy.com/assets/libs/simplebar/dist/simplebar.min.js"></script>

  <!-- Theme JS -->
  <script src="https://freshcart.codescandy.com/assets/js/theme.min.js"></script>
  <script src="https://freshcart.codescandy.com/assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <script src="https://freshcart.codescandy.com/assets/js/vendors/countdown.js"></script>
  <script src="https://freshcart.codescandy.com/assets/libs/slick-carousel/slick/slick.min.js"></script>
  <script src="https://freshcart.codescandy.com/assets/js/vendors/slick-slider.js"></script>
  <script src="https://freshcart.codescandy.com/assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="https://freshcart.codescandy.com/assets/js/vendors/tns-slider.js"></script>
  <script src="https://freshcart.codescandy.com/assets/js/vendors/zoom.js"></script>
  <script src="https://freshcart.codescandy.com/assets/js/vendors/increment-value.js"></script>

</body>

</html>