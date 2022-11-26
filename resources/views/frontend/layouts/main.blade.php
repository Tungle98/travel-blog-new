<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Travel Vi Vu Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendors/jquery-ui/jquery-ui.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    @yield('style-css')
</head>

<body>

<!--================Header Menu Area =================-->
@include('frontend.layouts.header')
<!--================ Header Menu Area =================-->

<!--================ Home Banner Area =================-->
@yield('content')
<!--================ End Popular Post Area =================-->

<!--================ start footer Area  =================-->
@include('frontend.layouts.footer')
<!--================ End footer Area  =================-->

<!-- ####################### Start Scroll to Top Area ####################### -->
<div id="back-top">
    <a title="Go to Top" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
<!-- ####################### End Scroll to Top Area ####################### -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/stellar.js')}}"></script>
<script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/js/mail-script.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('frontend/js/theme.js')}}"></script>
</body>

</html>
