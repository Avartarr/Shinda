<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Shindi</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Shindi">
    <meta name="author" content="SW-THEMES">
    @livewireStyles
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800',
                    'Segoe+Script:300,400,500,600,700,800', 'Lato:300,400,500,600,700,800'
                ]
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo40.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">




</head>

<body>

    @livewireScripts
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-left top-notice d-none d-md-flex p-0 font2">
                        <h5 class="d-inline-block text-dark mb-0 ls-0">Refer to a friend and Get <b>10% OFF</b></h5>
                        <a href="{{ route("shop") }}" class="category text-white ls-0">START SHARING</a>
                        <small>* Limited time only.</small>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-auto w-sm-100 justify-content-end">
                        <div class="info-box info-box-icon-left p-0">
                            <i class="icon-shipping"></i>

                            <div class="info-box-content">
                                <h4>FREE Express Shipping On Orders $99+</h4>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <!-- End .info-box -->

                        <div class="separator"></div>

                        <div class="header-dropdown font2">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header-dropdown mr-0 pl-2 font2">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="separator"></div>

                        <div class="info-box-container align-items-center">
                            <div class=" info-box info-box-icon-left">
                                <i class="icon-pin"></i>

                                <div class="info-box-content">
                                    <h4>Our Stores</h4>
                                </div>
                                <!-- End .info-box-content -->
                            </div>
                            <!-- End .info-box -->

                            <div class="info-box info-box-icon-left">
                                <i class="icon-shipping-truck"></i>

                                <div class="info-box-content">
                                    <h4 class="ls-0">Track Your Order</h4>
                                </div>
                                <!-- End .info-box-content -->
                            </div>
                            <!-- End .info-box -->

                            <div class="info-box info-box-icon-left">
                                <i class="icon-help-circle"></i>

                                <div class="info-box-content">
                                    <h4>Help</h4>
                                </div>
                                <!-- End .info-box-content -->
                            </div>
                            <!-- End .info-box -->
                        </div>
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container-fluid">
                    <div class="header-left justify-content-lg-center">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{ route("homepage") }}" class="logo">
                            <img src="assets/images/SHINDI LOGO xx.png" class="" width="70" height="30">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div
                            class="header-icon header-search header-search-inline header-search-category d-sm-block d-none w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper mr-1">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>

                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact header-wishlist d-lg-flex pl-4 pr-sm-4 pr-2 ml-2">
                            <a href="{{ route("shop") }}" class="header-icon mr-0" title="wishlist"><i
                                    class="icon-wishlist-2"></i></a>
                            <h6 class="text-capitalize"><span>Favorites</span><a href="#">Wishlist</a>
                            </h6>
                        </div>

                        <div class="header-contact d-lg-flex pr-sm-4 pr-2">
                            <a href="" class="header-icon mr-0" title="login"><i
                                    class="icon-user-2"></i></a>
                            <h6 class="text-capitalize"><span class="ls-n-20">Welcome</span><a href="">Sign
                                    In
                                    / Register</a></h6>
                        </div>

                        <div class="separator"></div>

                        <div class="cart-dropdown-wrapper d-flex align-items-center pt-2">
                            <span class="cart-subtotal text-right font2 mr-3">Shopping Cart
                                {{-- <span class="cart-price d-block font2">$0.00</span> --}}
                            </span>

                            <div class="dropdown cart-dropdown">
                                <a href="" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-display="static">
                                 <a href="{{ route("cart") }}"><i class="icon-cart-thick"></i></a>
                                    {{-- <span class=" cart-count badge-circle">3</span> --}}
                                </a>


                                <!-- End .dropdown-menu -->
                            </div>
                            <!-- End .dropdown -->
                        </div>
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->

        <main class="main home">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                    <aside class="col-lg-3 order-lg-first sidebar-home mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="side-menu-wrapper text-uppercase border-0 font2">
                                <h2 class="side-menu-title ls-n-10">Specials and Offers</h2>

                                <nav class="side-nav">
                                    <ul class="menu menu-vertical with-icon sf-arrows d-block no-superfish">
                                        <li>
                                            <a href="#" class="p-0"><i
                                                    class="icon-percent-shape"></i>Special
                                                Offers<span class="sf-with-ul menu-btn"></span></a>

                                            <ul>
                                                <li><a href="{{ route("shop") }}">Special Offers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="p-0"><i class="icon-business-book"></i>Our
                                                Recipes<span class="sf-with-ul menu-btn"></span></a>

                                            <ul>
                                                <li><a href="#">Our Recipes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                                <h2 class="side-menu-title ls-n-10 pb-2">Departments</h2>

                                <nav class="side-nav">
                                    <ul class="menu menu-vertical sf-arrows d-block no-superfish">
                                        <li>
                                            <a href="">All Hair<span
                                                    class="sf-with-ul menu-btn"></span></a>
                                            <div class="megamenu megamenu-fixed-width megamenu-one">
                                                <div class="row">
                                                    <div class="col-lg-3 mb-1 pb-2">
                                                        <!--  <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                            1</a> -->
                                                        <a href="{{ route("shop") }}" class="nolink pl-0">All Hair</a>
                                                        {{-- <ul class="submenu">
                                                            <li><a href="">Hair</a></li>
                                                            <li><a href="">Weavon</a></li>

                                                        </ul> --}}
                                                    </div>

                                                    <div class="col-lg-5 p-0 d-lg-block d-none">
                                                        <div class="menu-banner menu-banner-2">
                                                            <figure>
                                                                <img src="assets/images/demoes/demo40/menu-banner-1.jpg"
                                                                    alt="Menu banner" class="product-promo w-100" style="margin-left: 80%">
                                                            </figure>
                                                            <i>OFF</i>
                                                            <div class="banner-content">
                                                                <h4>
                                                                    <span class="text-dark">UP TO</span><br />
                                                                    <b class="text-dark">50%</b>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 d-lg-block d-none">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End .megamenu -->
                                        </li>

                                        <li>
                                            <a href="">Lashes and Make-Up<span
                                                    class="sf-with-ul menu-btn"></span></a>
                                                    <div class="megamenu megamenu-fixed-width megamenu-one">
                                                        <div class="row">
                                                            <div class="col-lg-3 mb-1 pb-2">
                                                                <!--  <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                                    1</a> -->
                                                                <a href="{{ route("Lashes") }}" class="nolink pl-0">Lashes And Make-Up</a>
                                                                <ul class="submenu">


                                                                </ul>
                                                            </div>

                                                            <div class="col-lg-5 p-0 d-lg-block d-none">
                                                                <div class="menu-banner menu-banner-2">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/lash5.png"
                                                                            alt="Menu banner" class="product-promo w-100" style="margin-left: 80%">
                                                                    </figure>
                                                                    <i>OFF</i>
                                                                    <div class="banner-content">
                                                                        <h4>
                                                                            <span class="text-dark">UP TO</span><br />
                                                                            <b class="text-dark">50%</b>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-lg-block d-none">

                                                            </div>
                                                        </div>
                                                    </div>
                                        </li>

                                        <li>
                                            <a href="">Nail Art & Tools<span
                                                    class="sf-with-ul menu-btn"></span></a>
                                                    <div class="megamenu megamenu-fixed-width megamenu-one">
                                                        <div class="row">
                                                            <div class="col-lg-3 mb-1 pb-2">
                                                                <!--  <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                                    1</a> -->
                                                                <a href="{{ route("nails") }}" class="nolink pl-0">Nail Art & Tools</a>
                                                            </div>
                                                            <div class="col-lg-5 p-0 d-lg-block d-none">
                                                                <div class="menu-banner menu-banner-2">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/nail13.jpg"
                                                                            alt="Menu banner" class="product-promo w-100" style="margin-left: 80%">
                                                                    </figure>
                                                                    <i>OFF</i>
                                                                    <div class="banner-content">
                                                                        <h4>
                                                                            <span class="text-dark">UP TO</span><br />
                                                                            <b class="text-dark">50%</b>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-lg-block d-none">

                                                            </div>
                                                        </div>
                                                    </div>
                                        </li>





                                        <li>
                                            <a href="">Average<span
                                                    class="sf-with-ul menu-btn"></span></a>
                                                    <div class="megamenu megamenu-fixed-width megamenu-one">
                                                        <div class="row">
                                                            <div class="col-lg-3 mb-1 pb-2">
                                                                <!--  <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                                    1</a> -->
                                                                <a href="{{ route("average") }}" class="nolink pl-0">Average</a>

                                                            </div>

                                                            <div class="col-lg-5 p-0 d-lg-block d-none">
                                                                <div class="menu-banner menu-banner-2">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/menu-banner-1.jpg"
                                                                            alt="Menu banner" class="product-promo w-100" style="margin-left: 80%">
                                                                    </figure>
                                                                    <i>OFF</i>
                                                                    <div class="banner-content">
                                                                        <h4>
                                                                            <span class="text-dark">UP TO</span><br />
                                                                            <b class="text-dark">50%</b>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-lg-block d-none">

                                                            </div>
                                                        </div>
                                                    </div>
                                        </li>

                                        <li>
                                            <a href="">Standard<span
                                                    class="sf-with-ul menu-btn"></span></a>
                                                    <div class="megamenu megamenu-fixed-width megamenu-one">
                                                        <div class="row">
                                                            <div class="col-lg-3 mb-1 pb-2">
                                                                <!--  <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                                    1</a> -->
                                                                <a href="{{ route("standard") }}" class="nolink pl-0">Standard</a>

                                                            </div>

                                                            <div class="col-lg-5 p-0 d-lg-block d-none">
                                                                <div class="menu-banner menu-banner-2">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/menu-banner-1.jpg"
                                                                            alt="Menu banner" class="product-promo w-100" style="margin-left: 80%">
                                                                    </figure>
                                                                    <i>OFF</i>
                                                                    <div class="banner-content">
                                                                        <h4>
                                                                            <span class="text-dark">UP TO</span><br />
                                                                            <b class="text-dark">50%</b>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-lg-block d-none">

                                                            </div>
                                                        </div>
                                                    </div>
                                        </li>
                                        <li>
                                            <a href="">Premium<span
                                                    class="sf-with-ul menu-btn"></span></a>
                                                    <div class="megamenu megamenu-fixed-width megamenu-one">
                                                        <div class="row">
                                                            <div class="col-lg-3 mb-1 pb-2">
                                                                <!--  <a href="#" class="nolink pl-0 d-lg-none d-block">VARIATION
                                                                    1</a> -->
                                                                <a href="{{ route("premium") }}" class="nolink pl-0">Premium</a>

                                                            </div>

                                                            <div class="col-lg-5 p-0 d-lg-block d-none">
                                                                <div class="menu-banner menu-banner-2">
                                                                    <figure>
                                                                        <img src="assets/images/demoes/demo40/menu-banner-1.jpg"
                                                                            alt="Menu banner" class="product-promo w-100" style="margin-left: 80%">
                                                                    </figure>
                                                                    <i>OFF</i>
                                                                    <div class="banner-content">
                                                                        <h4>
                                                                            <span class="text-dark">UP TO</span><br />
                                                                            <b class="text-dark">50%</b>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-lg-block d-none">

                                                            </div>
                                                        </div>
                                                    </div>
                                        </li>



                                    </ul>
                                </nav>

                                </li>
                                <!--  -->

                                </ul>
                                <!-- </nav> -->

                            </div>
                            <!-- End .side-menu-container -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside>
                    <!-- End .col-lg-3 -->

                    <div class="col-lg-9">
                        <div class="main-content">
                            @yield('content')
                            <x-Footer>

                            </x-Footer>
                            <!-- End .footer -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End .main -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="{{ route("homepage") }}">Home</a></li>

                    <li>
                        <a href="{{ route("shop") }}">Products</a>

                            </li>
                    </li>

                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="https://1.envato.market/DdLk5" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    {{-- <li><a href="login.html">My Account</a></li> --}}
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Cart</a></li>
                    <li><a href="" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{ route("shop") }}">
                <i class="icon-home"></i>Home
            </a>
        </div>


        <div class="sticky-info">
            <a href="" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
        style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
           <a href="{{ route("homepage") }}"> <img src="assets/images/SHINDI LOGO xx.png" class="" width="70" height="30"></a>
            {{-- <h2>Subscribe to newsletter</h2> --}}

            <p style="color: white">
                Subscribe to the Shindi mailing list to receive updates on new arrivals, special offers and our
                promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                        placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label" style="color: white">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div>
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
</body>

</html>
