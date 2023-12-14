<!DOCTYPE html>
<html lang="en">

<head>
    @notifyCss
    <style>
        .notify {
            z-index: 1000000;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <x-notify::notify />
    @include('Backend.Partials.Header')


    @yield('Slider_Pro')


    <!-- Content -->

    <div class="container">
        @yield('Container')
    </div>


    <!-- Footer -->
    @include('Backend.Partials.Footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @notifyJs
</body>

</html>