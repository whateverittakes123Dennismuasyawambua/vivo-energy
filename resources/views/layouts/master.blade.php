<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vivo Energy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/slicknav.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/fontawesome-all.min.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/themify-icons.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/slick.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}">
            <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
            <link rel="stylesheet" href="{{asset("assets/css/media.css")}}">
            <link rel="stylesheet" href = "{{asset("assets/css/fullpage.css")}}">
        <!-- java script -->
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder-velogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')


	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('./assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('./assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('./assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('./assets/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="{{ asset('./assets/js/gijgo.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('./assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('./assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('./assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('./assets/js/jquery.sticky.js') }}"></script>

        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="{{ asset('./assets/js/jquery.counterup.min.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('./assets/js/contact.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('./assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.ajaxchimp.min.js') }}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('./assets/js/plugins.js') }}"></script>
        <script src="{{ asset('./assets/js/main.js') }}"></script>

    </body>
</html>