<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SiPaDiGi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="{{ url ('assets/css2.css') }}"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{ url ('assets/all.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url ('assets/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url ('assets/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url ('assets/style.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body class="body-wrapper">

<!-- HEADER -->
@include('frontend._partials.header')
<!-- END HEADER -->

<!-- KONTEN -->
@yield('content')
<!-- END KONTEN -->




    <!-- JavaScript Libraries -->
    <script src="{{ url ('assets/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url ('assets/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ url ('assets/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url ('assets/wow.min.js') }}"></script>
    <script src="{{ url ('assets/easing.min.js') }}"></script>
    <script src="{{ url ('assets/waypoints.min.js') }}"></script>
    <script src="{{ url ('assets/owl.carousel.min.js') }}"></script>
    <script src="{{ url ('assets/counterup.min.js') }}"></script>
    <script src="{{ url ('assets/parallax.min.js') }}"></script>
    <script src="{{ url ('assets/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url ('assets/main.js') }}"></script>
</body>

</html> 