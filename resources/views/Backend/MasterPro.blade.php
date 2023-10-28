<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>


<body>

    <!-- Header -->

    @include('Backend.Partials.Header_Pro')

    <!-- Slider -->


    @yield('Slider_Pro')


    <!-- Content -->

    <div class="container">
        @yield('Container')
    </div>



    <!-- Start_Footer -->

    @include('Backend.Partials.Footer_Pro')






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>