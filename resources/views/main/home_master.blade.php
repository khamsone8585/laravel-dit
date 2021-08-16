<!DOCTYPE html>
<html lang="lo">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ກົມການຄ້າພາຍໃນ ກະຊວງອຸດສາຫະກໍາ ແລະ ການຄ້າ - @yield('title')</title>
    <meta content="ກົມການຄ້າພາຍໃນ ກະຊວງອຸດສາຫະກໍາ ແລະ ການຄ້າ" name="descriptison">
    <meta content="ກົມການຄ້າພາຍໃນ, ກະຊວງອຸດສາຫະກໍາ ແລະ ການຄ້າ, ສປປ ລາວ" name="keywords">
    <!-- Favicons -->
    
    <link href="{{asset('frontend/assets/img/dit.ico')}}" rel="icon">
    <link href="{{asset('frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon')}}">
    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>

    @include('main.body.navbar')

    @include('main.body.header')

    @if (Route::is('homeIndex'))
        @include('main.body.hero')
    @endif
    <!-- ======= Main Contents ======= -->

    <main id="main">
        
        @yield('content')

    </main>

    <!-- End #main -->

    @include('main.body.footer')

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176078140-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-176078140-1');
    </script>
</body>
</html>