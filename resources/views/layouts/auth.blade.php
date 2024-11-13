<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="WeVentura" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="{{ asset('app/img/logo_only.svg') }}">

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&amp;display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/vendor/custom-font.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/main.css') }}">
</head>

<body>

    @yield('content')

    <!-- JS here -->
    <script src="{{ asset('auth/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/type.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/vanilla-tilt.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/smooth-scroll.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/isotope-docs.min.js') }}"></script>
    <script src="{{ asset('auth/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}"></script>

</body>

</html>
