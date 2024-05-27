<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/{{ route('home') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 12:00:06 GMT -->
<head>
    <title>Rentaly </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()" class="dark-scheme">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
         <!-- header begin -->
         <header class="transparent has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@rentaly.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('home') }}">
                                            <img class="logo-1" src="images/logo-light.png" alt="">
                                            <img class="logo-2" src="images/logo-light.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('car') }}">Cars</a>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('booking') }}">Booking</a></li>
                                    <li><a class="menu-item" href="{{ route('account-dashboard') }}">My Account</a>
                                    </li>
                                    {{-- <li><a class="menu-item" href="#">Pages</a>
                                        <ul>
                                            <li><a class="menu-item" href="about.html">About Us</a></li>
                                            <li><a class="menu-item" href="contact.html">Contact</a></li>
                                            <li><a class="menu-item" href="login.html">Login</a></li>
                                            <li><a class="menu-item" href="register.html">Register</a></li>
                                            <li><a class="menu-item" href="404.html">Page 404</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a class="menu-item" href="#">News</a>
                                        <ul>
                                            <li><a class="menu-item" href="news-standart-right-sidebar.html">News Standard</a>
                                                <ul>
                                                    <li><a class="menu-item" href="news-standart-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-standart-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-standart-no-sidebar.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="news-grid-right-sidebar.html">News Grid</a>
                                                <ul>
                                                    <li><a class="menu-item" href="news-grid-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-grid-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-grid-no-sidebar.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a class="menu-item" href="#">Elements</a>
                                        <ul>
                                            <li><a class="menu-item" href="preloader.html">Preloader</a></li>
                                            <li><a class="menu-item" href="icon-boxes.html">Icon Boxes</a></li>
                                            <li><a class="menu-item" href="badge.html">Badge</a></li>
                                            <li><a class="menu-item" href="counters.html">Counters</a></li>
                                            <li><a class="menu-item" href="gallery-popup.html">Gallery Popup</a></li>
                                            <li><a class="menu-item" href="icons-elegant.html">Icons Elegant</a></li>
                                            <li><a class="menu-item" href="icons-etline.html">Icons Etline</a></li>
                                            <li><a class="menu-item" href="icons-font-awesome.html">Icons Font Awesome</a></li>
                                            <li><a class="menu-item" href="map.html">Map</a></li>
                                            <li><a class="menu-item" href="modal.html">Modal</a></li>
                                            <li><a class="menu-item" href="popover.html">Popover</a></li>
                                            <li><a class="menu-item" href="tabs.html">Tabs</a></li>
                                            <li><a class="menu-item" href="tooltips.html">Tooltips</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="{{ route('login') }}" class="btn-main">Sign In</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        {{ $slot }}
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="{{ route('home') }}">
                                        Copyright 2023 - By Awais
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    {{-- <div id="selector">
        <div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>
    </div> --}}

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset("js/designesia.js") }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/{{ route('home') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 12:00:27 GMT -->
</html>

