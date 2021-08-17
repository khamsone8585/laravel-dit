<!DOCTYPE html>
<html lang="en">

<head>
    <title>DIT-MOIC | admin | @yield('title') </title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link href="{{asset('frontend/assets/img/dit.ico')}}" rel="icon">
    <link href="{{asset('frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon')}}">

        <!-- Font laos -->
        <link rel="stylesheet" href="{{asset('backend/assets/css/laos/font-laos.css')}}">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/themify-icons/themify-icons.css')}}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/icofont/css/icofont.css')}}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

    <!-- Weather css -->
    <link href="{{asset('backend/assets/css/svg-weather.css')}}" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/main.css')}}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    </head>

    <body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        @include('admin.body.header')
        <!-- Side-Nav-->
        @include('admin.body.sidebar')

        <div class="content-wrapper">
            <!-- Main content starts -->
                @yield('content')
            <!-- Main content ends -->
        </div>
    </div>
    <!-- Required Jqurey -->
    <script src="{{asset('backend/assets/plugins/Jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/tether/dist/js/tether.min.js')}}"></script>

    <!-- Required Fremwork -->
    <script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Scrollbar JS-->
    <script src="{{asset('backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

    <!--classic JS-->
    <script src="{{asset('backend/assets/plugins/classie/classie.js')}}"></script>

    <!-- notification -->
    <script src="{{asset('backend/assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

    <!-- Sparkline charts -->
    <script src="{{asset('backend/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

    <!-- Counter js  -->
    <script src="{{asset('backend/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/countdown/js/jquery.counterup.js')}}"></script>

    <!-- Echart js -->
    <script src="{{asset('backend/assets/plugins/charts/echarts/js/echarts-all.js')}}"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{asset('backend/assets/js/main.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/pages/dashboard.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/pages/elements.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/menu.min.js')}}"></script>

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
