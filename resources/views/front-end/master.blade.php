<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('front-end')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/tiny-slider.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/glightbox.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/style.css">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/flatpickr.min.css">


    <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

@include('front-end.include.header')

@yield('content')

@include('front-end.include.footer')

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>


<script src="{{asset('front-end')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front-end')}}/js/tiny-slider.js"></script>

<script src="{{asset('front-end')}}/js/flatpickr.min.js"></script>


<script src="{{asset('front-end')}}/js/aos.js"></script>
<script src="{{asset('front-end')}}/js/glightbox.min.js"></script>
<script src="{{asset('front-end')}}/js/navbar.js"></script>
<script src="{{asset('front-end')}}/js/counter.js"></script>
<script src="{{asset('front-end')}}/js/custom.js"></script>


</body>
</html>
