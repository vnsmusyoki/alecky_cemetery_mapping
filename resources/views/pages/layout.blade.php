<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome | @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/animate.min.css') }}">
    <!-- main CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/main.css') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/animate.min.css') }}">
    <!-- font-awesome CSS-->
    <link rel="stylesheet" href="{{ asset('front-end/css/font-awesome.min.css') }}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/owl.transitions.css') }}">
    <!-- main menu CSS-->
    <link rel="stylesheet" href="{{ asset('front-end/css/meanmenu.min.css') }}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/lib/custom-slider/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front-end/lib/custom-slider/css/preview.css') }}" type="text/css"
        media="screen" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/responsive.css') }}">



    <!-- Custom Js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <style type="text/css">
        #mymap {

            width: 100%;
            height: 500px;
        }

    </style>
</head>

<body>
    <div class="wrapper-area">

        <header>

            <div class="main-header-area" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="{{ url('/') }}"><img src="{{ asset('front-end/img/logo.png') }}"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="main-menu-area">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="#about-us">What we Do</a></li>
                                        <li><a href="#book-us">Book Us</a></li>
                                        <li><a href="{{ url('/search-cemetery') }}">Search Cemetery</a></li>
                                        <li><a href="{{ url('contact-us') }}">Contact</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                            <div class="search-box">
                                <ul>
                                    <li>
                                        <form>
                                            <input type="text" required="" placeholder="Search...."
                                                class="search-form">
                                            <a class="search-button" href="#"><i aria-hidden="true"
                                                    class="fa fa-search"></i></a>
                                        </form>
                                    </li>
                                    <li class="shoping-bag"> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('/book-us') }}">Book Today</a></li>
                                        <li><a href="{{ url('contact-us') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
        </header>
        <!-- Header Area End Here -->
        @yield('content')
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-footer">
                                <p>Copyright 2021. All Rights Reserved. &nbsp; Designed by<a href="#"> Alecky</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>

    <!-- Bootstrap Js-->
    <script src="{{ asset('front-end/js/bootstrap.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('front-end/js/wow.min.js') }}"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('front-end/js/owl.carousel.min.js') }}"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('front-end/js/jquery.meanmenu.min.js') }}"></script>

    <!-- Nivo slider js-->
    <script src="{{ asset('front-end/lib/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front-end/lib/custom-slider/home.js') }}" type="text/javascript"></script>
    <!-- jQuery Srollup -->
    <script src="{{ asset('front-end/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
    <!-- jQuery Zoom -->
    <script src="{{ asset('front-end/js/jquery.zoom.min.js') }}"></script>

    <!-- Modernizr js -->
    <script src="{{ asset('front-end/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('front-end/js/plugins.js') }}"></script>
    <script src="{{ asset('front-end/js/main.js') }}"></script>
    <script type="text/javascript">
        var locations = <?php print_r(json_encode($locations)); ?>;
        var mymap = new GMaps({
            el: '#mymap',
            lat: 0.1617,
            lng: 37.7464,
            zoom: 8
        });
        $.each(locations, function(index, value) {
            mymap.addMarker({
                lat: value.latitude,
                lng: value.longitude,
                title: value.full_names,
                click: function(e) {


                    window.location.href = 'cemetery/' + value.cemetery_id + '';
                }
            });
        });
    </script>

</body>

</html>
