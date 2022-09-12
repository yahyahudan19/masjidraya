<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> @yield('title') | Masjid Raya Annur Polinema</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/home/assets/images/x-icon/logo.png')}}">

    <link rel="stylesheet" href="{{asset('template/home/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- Header Section Starts Here -->
    @include('homepage._page.header')
    <!-- Header Section Ends Here-->

    <!-- Banner Section start here -->
    @yield('banner')
    <!-- Banner Section end here -->

    @yield('content')

    <!-- Footer Section start here -->
    @include('homepage._page.footer')
    <!-- Footer Section end here -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->
    
    <!-- Sweet Alert-->
    @include('sweetalert::alert')

    <script src="{{asset('template/home/assets/js/jquery.js')}}"></script>
    <script src="{{asset('template/home/assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('template/home/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('template/home/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/home/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('template/home/assets/js/circularProgressBar.min.js')}}"></script>
    <script src="{{asset('template/home/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('template/home/assets/js/lightcase.js')}}"></script>
    <script src="{{asset('template/home/assets/js/functions.js')}}"></script>
</body>

</html>