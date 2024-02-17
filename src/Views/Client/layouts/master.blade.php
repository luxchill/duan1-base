<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - LuxChill</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">
    {{--    Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{--    Fontawesome--}}
    <script src="https://kit.fontawesome.com/12ffb45aae.js" crossorigin="anonymous"></script>
    {{--    Jquery--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--    Icon--}}
    <link rel="icon"
          href="https://png.pngtree.com/template/20190626/ourmid/pngtree-marijuana-cbd-logo-vector-image_219812.jpg">
</head>
<body>
@include('layouts.header')
<div class="container" style="height: auto; min-height: 100vh">
    @yield('content')
</div>
@include('layouts.footer')
@yield('script')
{{--@stack('scripts')--}}
</body>
</html>