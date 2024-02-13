<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - LuxChill</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
{{--    <link href="/assets/client/assets/img/favicon.png" rel="icon">--}}
{{--    <link href="/assets/client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">--}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor CSS Files -->
{{--    <link href="/assets/client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/assets/client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">--}}
{{--    <link href="/assets/client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">--}}
{{--    <link href="/assets/client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">--}}
{{--    <link href="/assets/client/assets/vendor/aos/aos.css" rel="stylesheet">--}}

    <!-- Template Main CSS Files -->
{{--    <link href="/assets/client/assets/css/variables.css" rel="stylesheet">--}}
{{--    <link href="/assets/client/assets/css/main.css" rel="stylesheet">--}}
</head>

<body>

<!-- ======= Header ======= -->
@include('layouts.header')
<!-- End Header -->

<main id="main" class="container ">

    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts.footer')

<!-- Vendor JS Files -->
{{--<script src="/assets/client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="/assets/client/assets/vendor/swiper/swiper-bundle.min.js"></script>--}}
{{--<script src="/assets/client/assets/vendor/glightbox/js/glightbox.min.js"></script>--}}
{{--<script src="/assets/client/assets/vendor/aos/aos.js"></script>--}}
{{--<script src="/assets/client/assets/vendor/php-email-form/validate.js"></script>--}}

<!-- Template Main JS File -->
{{--<script src="/assets/client/assets/js/main.js"></script>--}}

</body>

</html>