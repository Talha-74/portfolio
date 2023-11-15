<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Mirrored from marketifythemes.net/html/tokyo/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:27:12 GMT -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Name of your web site">
        <meta name="author" content="Marketify">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Tokyo | Home</title>

        <link
            href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dark.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
        <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->

    </head>

    <body class="dark">

        <div id="preloader">
            <div class="loader_line"></div>
        </div>

        <div class="tokyo_tm_all_wrap" data-magic-cursor="show" data-enter="fadeInUp" data-exit>

            <div class="tokyo_tm_topbar">
                <div class="topbar_inner">
                    <div class="logo" data-type="image">
                        <a href="#">
                            <img src="img/logo/logo.png" alt />
                            <h3>TOKYO</h3>
                        </a>
                    </div>
                    <div class="trigger">
                        <div class="hamburger hamburger--slider">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tokyo_tm_mobile_menu">
                <div class="menu_list">
                    <ul class="transition_link">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            @include('layout.sidebar')

            <div class="rightpart">
                <div class="rightpart_in">
                    {{-- HOme section --}}
                    @yield('content')
                </div>
            </div>

            <div class="mouse-cursor cursor-outer"></div>
            <div class="mouse-cursor cursor-inner"></div>

        </div>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="js/jquery.js"></script>
        <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
        <script src="js/plugins.js"></script>
        <script src="js/init.js"></script>

    </body>

    <!-- Mirrored from marketifythemes.net/html/tokyo/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:28:43 GMT -->

</html>
