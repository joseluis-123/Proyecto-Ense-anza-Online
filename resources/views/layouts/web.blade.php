<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/bootstrap.css') }}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/colors/color1.css') }}" id="colors">


</head>
<body class="bg-body2">
    <div class="boxed">
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>

        <div class="top border-bt-d1d1ff ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="flat-info style2">

                        </div>
                    </div> <!-- /.col-md-6 -->
                    <div class="col-lg-6 col-md-12 pd-left-0">
                        <div class="flat-action flat-text-right style2 float-right">
                            <ul>
                                <li class="register"><a href="#">REGISTRO</a></li>
                                <li class="user"><a href="#">LOGIN</a></li>
                            </ul>
                        </div> <!-- /.flat-action -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top -->

        <div id="header" class="bg-192836 style2">
            <div class="container">
                <div class="header-wrap clearfix">
                    <div id="logo">
                        <a href="/">
                            <img src="{{ asset('images/logo/logo-ft.png') }}" alt="bookflare"  width="157" height="29" data-retina="{{ asset('images/logo/logo-ft@2x.png') }}" data-width="157" data-height="29">
                        </a>
                    </div>
                    <div class="nav-wrap flat-text-right style1">
                        <nav id="main-nav">
                            <ul class="menu">
                                <li><a href="{{ route('inicio') }}">CURSOS</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="extra-menu flat-text-right">
                        <ul>
                            <li>
                                <div class="show-search text-right">
                                    <a href="#"><i class="icon-search"></i></a>
                                    <div class="submenu top-search widget-search">
                                        <div class="search-header">
                                            <form>
                                                <input type="search" name="key" placeholder="Search for Courses">
                                                <button class="btn-search"><span class="icon-search"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cart nav-top-cart-wrapper">
                                <a href="#"><span class="bf-icon icon-cart"></span></a> <span class="count-cart">0</span>
                                <div class="nav-shop-cart">
                                    <div class="widget_shopping_cart_content">
                                        <div class="woocommerce-min-cart-wrap">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget flat-text-center">
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <span>No existe items en el carrito</span>
                                                </li>
                                            </ul>
                                        </div><!-- /.widget_shopping_cart_content -->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile-button">
                        <span></span>
                    </div>
                </div>
            </div>
        </div> <!-- #header -->

        @yield('content')

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget-about">
                            <div id="logo-ft">
                                <a href="/"><img src="{{ asset('images/logo/logo-ft.png') }}" alt="bookflare"  width="157" height="29" data-retina="{{ asset('images/logo/logo-ft@2x.png') }}" data-width="157" data-height="29"></a>
                            </div>
                            <p class="description">We are a new design studio based in USA. We have over 20 years of combined experience, and know a thing or two about designing websites and mobile apps.</p>
                            <div class="list-info">
                                <ul>
                                    <li class="address"><a href="#">1107 Wood Street Saginaw, MI New York 48607</a></li>
                                    <li class="phone"><a href="#">+123 345 678 000</a></li>
                                    <li class="mail"><a href="#">info@example.com</a></li>
                                </ul>
                            </div>
                            <div class="socails">
                                <ul class="list">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-official"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-square"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget-link widget-ft">
                            <h6 class=" widget-title">USEFUL LINK</h6>
                            <div class="list-wrap clearfix">
                                <ul class="one-of-two">
                                    <li><a href="#">Register Activation Key</a></li>
                                    <li><a href="#"> Our Plans</a></li>
                                    <li><a href="#"> Government Solutions</a></li>
                                    <li><a href="#">Academic Solutions</a></li>
                                    <li><a href="#">Intellectual Property</a></li>
                                </ul>
                                <ul class="one-of-two">
                                    <li><a href="#">Free Trial</a></li>
                                    <li><a href="#"> Support</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-recent-work widget-ft">
                            <h6 class="widget-title">RECENT WORK</h6>
                            <div class="flat-recentOwl"  data-column="4" data-column2="3" data-loop="true"  data-column3="2" data-gap ="0" data-dots="false" data-nav="true" >
                                <div class="flat-imgbox style1 clearfix owl-carousel">
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-1.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-5.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-2.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-6.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-3.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-7.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-4.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-8.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-1.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-2.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-3.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-4.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-5.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-6.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-7.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="imgbox style1 transition-vline">
                                            <a href="#">
                                                <div class="imgbox-img img-vline">
                                                    <img src="images/footer/work-8.png" alt="bookflare">
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="btn-view-more">VIEW MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="bottom bg-15222e">
            <div class="container">
                <div class="row">
                    <div class="  col-md-6">
                        <div class="copyright flat-text-left">
                            <p>© Copyright 2018 <a href="#">tophive</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="  col-md-6">
                        <div class="widget flat-text-right no-border">
                            <ul class="list">
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Cookie Policy</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a id="scroll-top"></a>
    </div>

    <script src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('javascript/parallax.js') }}"></script>
    <script src="{{ asset('javascript/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('javascript/jquery-fancybox.js') }}"></script>
    <script src="{{ asset('javascript/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('javascript/jquery-isotope.js') }}"></script>
    <script src="{{ asset('javascript/waypoints.min.js') }}"></script>
    <script src="{{ asset('javascript/jquery.easing.js') }}"></script>
    <script src="{{ asset('javascript/jquery.cookie.js') }}"></script>
    <script src="{{ asset('javascript/smoothscroll.js') }}"></script>

    <script src="{{ asset('javascript/main.js') }}"></script>
</body>
</html>
