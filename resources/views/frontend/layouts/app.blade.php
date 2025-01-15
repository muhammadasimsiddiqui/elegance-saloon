<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Elegance Saloon</title>
    <meta name="author" content="iThemesLab">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicons -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/assets/favicon/apple-icon-144x144.png') }}">

    <!-- load google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cPlayfair+Display:400,700" rel="stylesheet">

    <!-- all stylesheets include start -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/flaticon/flaticon.css') }}">
    <!-- OwlCarousel css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/owl.theme.css') }}">
    <!-- bootstrap date picker -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap-datepicker.standalone.css') }}">
    <!-- theme style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.min.css') }}">
    <!-- all stylesheets include end -->
</head>
<body>

    <!-- ========================= header start ========================= -->
    @include('frontend.partials.header')
    <!-- ========================= header end ========================= -->

    <!-- ========================= page start ========================= -->
    @yield('content')
    <!-- ========================= page end ========================= -->

    <!-- ========================= footer start ========================= -->
    @include('frontend.partials.footer')    
    <!-- ========================= footer end ========================= -->

    <!-- back to to btn start -->
    <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
    <!-- back to to btn end -->

    <!-- all js include start -->
    <!-- jquery latest version -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <!-- bootstrap latest version -->
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Appear js file -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.appear.js') }}"></script>
    <!-- CountTo js file -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.countTo.js') }}"></script>
    <!-- Owl Carousel js file -->
    <script src="{{ asset('frontend/assets/js/vendor/owl.carousel.min.js') }}"></script>
    <!-- bootstrap date picker js file -->

    <!-- jquery form validator, date picker & booking js -->
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/validator.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/booking.js') }}"></script>

    <!-- template main js file -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- all js include end -->
</body>
</html>
