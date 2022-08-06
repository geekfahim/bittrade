<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bittrade eCommerce</title>

    <meta name="keywords" content="Bittrade eCommerce" />
    <meta name="description" content="Bittrade eCommerce">
    <meta name="author" content="Bittrade eCommerce">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/images/icons/favicon.ico') }}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,500,600,700,800', 'Poppins:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ asset('public/assets/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);

    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/animate.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/vendor/fontawesome-free/css/all.min.css') }}">

    @stack('page_styles')
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice">
            <div class="container">
                <div class="notify-left flex-wrap d-flex align-items-center">
                    <h5 class="text-white"><strong>10% OFF</strong></h5>

                    <div class="main-heading">
                        <h5>Use <b class="text-dark">PORTO10</b> Coupon Code</h5>
                        <h6><small>* Minimal Purchase Price</small></h6>
                    </div>
                </div>

                <div class="notify-right d-block">
                    <h4><b class="text-dark">FREE NEXT DAY DELIVERY*</b></h4>
                    <h6><small>* On Business Days - On Orders Over $25</small></h6>
                </div>
            </div><!-- End .container -->
        </div><!-- End .top-notice-->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left header-dropdowns">
                        {{-- <div class="header-dropdown">
                            <a href="#" class="pl-0"><img src="{{ asset('public/assets/images/flags/en.png') }}" alt="England flag">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('public/assets/images/flags/en.png') }}" alt="England flag">Eng</a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('public/assets/images/flags/fr.png') }}" alt="France flag">Frh</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown --> --}}

                        {{-- <div class="header-dropdown ml-4">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div><!-- End .header-menu --> --}}

                        {{-- <span class="separator"></span> --}}

                        <div class="header-menu">
                            <ul class="mb-0 d-none d-lg-flex">
                                <li><a href="{{ route('shop.cart') }}">Cart</a></li>
                                <li><a href="{{ route('shop.checkout') }}">Checkout</a></li>
                                <li><a href="{{ route('shop.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div><!-- End .header-dropdown -->

                    <div class="header-right w-lg-max ml-0 ml-lg-auto">
                        <div class="header-contact d-none d-sm-flex align-items-center ml-auto">
                            <i class="icon-phone-2"></i>
                            <h6><a href="tel:#" class="d-block">+123 5678 890</a></h6>
                        </div><!-- End .header-contact -->

                        <span class="separator d-sm-block d-none"></span>

                        <div
                            class="header-search header-search-popup header-search-category d-block header-icon text-dark">
                            <a href="#" class="search-toggle btn p-0 icon-search-3" role="button">
                            </a>

                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control bg-white" name="q" id="q"
                                        placeholder="Search..." required="">
                                    <button class="btn fas fa-search bg-transparent p-0 border-0"
                                        type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div>

                        <a href="login.html" class="header-icon login-link text-dark"><i class="icon-user-2"></i></a>

                        <a href="#" class="header-icon position-relative">
                            <i class="icon-wishlist-2 text-dark"></i>
                            <span class="badge-circle">0</span>
                        </a>

                        <div class="dropdown cart-dropdown pl-1 text-dark">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count badge-circle">2</span>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>

                                        <a href="{{ route('shop.cart') }}" class="float-right">View Cart</a>
                                    </div><!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="{{ route('shop.product') }}">Woman Ring</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="{{ route('shop.product') }}" class="product-image">
                                                    <img src="{{ asset('public/assets/images/products/cart/product-1.jpg') }}" alt="product"
                                                        width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="{{ route('shop.product') }}">Woman Necklace</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="{{ route('shop.product') }}" class="product-image">
                                                    <img src="{{ asset('public/assets/images/products/cart/product-2.jpg') }}" alt="product"
                                                        width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price float-right">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route('shop.checkout') }}" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left d-none d-lg-flex">
                        <div class="main-nav d-flex w-lg-max">
                            <ul class="menu">
                                <li class="active">
                                    <a href="{{ route('shop.home') }}">Home</a>
                                </li>

                                <li class="border-0">
                                    <a href="{{ route('shop.category') }}" class="sf-with-ul border-0">Shop</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="menu-title mb-1">
                                                            <a href="#">Variations 1<span
                                                                    class="tip tip-new">New!</span></a>
                                                        </div>
                                                        <ul class="submenu">
                                                            <li><a href="category-banner-full-width.html">Fullwidth
                                                                    Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                                    Banner</a></li>
                                                            <li><a href="category-banner-boxed-image.html">Boxed Image
                                                                    Banner</a></li>
                                                            <li><a href="category-sidebar-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li><a href="category-sidebar-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li><a href="category-flex-grid.html">Product Flex Grid</a>
                                                            </li>
                                                            <li><a href="category-horizontal-filter1.html">Horizontal
                                                                    Filter1</a></li>
                                                            <li><a href="category-horizontal-filter2.html">Horizontal
                                                                    Filter2</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="menu-title mb-1">
                                                            <a href="#">Variations 2</a>
                                                        </div>
                                                        <ul class="submenu">
                                                            <li><a href="#">Product List Item Types</a></li>
                                                            <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                                    Scroll</a></li>
                                                            <li><a href="category-3col.html">3 Columns Products</a></li>
                                                            <li><a href="{{ route('shop.category') }}">4 Columns Products <span
                                                                        class="tip tip-new">New</span></a></li>
                                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-9 -->
                                            <div class="col-lg-3 p-0">
                                                <div class="banner h-100">
                                                    <a href="#">
                                                        <img src="{{ asset('public/assets/images/menu-banner-2.jpg') }}" alt="Menu banner">
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-3 -->
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>

                                <li class="megamenu-container border-0">
                                    <a href="{{ route('shop.product') }}" class="sf-with-ul border-0">Products</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul class="submenu">
                                                            <li><a href="{{ route('shop.product') }}">Horizontal Thumbnails</a></li>
                                                            <li><a href="product-full-width.html">Vertical
                                                                    Thumbnails</a></li>
                                                            <li><a href="{{ route('shop.product') }}">Inner Zoom</a></li>
                                                            <li><a href="product-addcart-sticky.html">Addtocart
                                                                    Sticky</a></li>
                                                            <li><a href="product-sidebar-left.html">Accordion Tabs</a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul class="submenu">
                                                            <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                            <li><a href="product-simple.html">Simple Product</a></li>
                                                            <li><a href="product-sidebar-left.html">With Left
                                                                    Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Product Layout Types</a>
                                                        </div>
                                                        <ul class="submenu">
                                                            <li><a href="{{ route('shop.product') }}">Default Layout</a></li>
                                                            <li><a href="product-extended-layout.html">Extended
                                                                    Layout</a></li>
                                                            <li><a href="product-full-width.html">Full Width Layout</a>
                                                            </li>
                                                            <li><a href="product-grid-layout.html">Grid Images
                                                                    Layout</a></li>
                                                            <li><a href="product-sticky-both.html">Sticky Both Side
                                                                    Info</a></li>
                                                            <li><a href="product-sticky-info.html">Sticky Right Side
                                                                    Info</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-9 -->
                                            <div class="col-lg-3 p-0">
                                                <div class="banner h-100">
                                                    <a href="#">
                                                        <img src="{{ asset('public/assets/images/menu-banner.jpg') }}" alt="Menu banner"
                                                            class="product-promo p-0">
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-3 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>

                                <li>
                                    <a href="#">Features</a>
                                    <ul>
                                        <li><a href="{{ route('shop.cart') }}">Shopping Cart</a></li>
                                        <li><a href="#">Checkout</a>
                                            <ul>
                                                <li><a href="{{ route('shop.checkout') }}">Checkout Shipping</a></li>
                                                <li><a href="{{ route('shop.checkout') }}">Checkout Shipping 2</a></li>
                                                <li><a href="{{ route('shop.checkout.review') }}">Checkout Review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dashboard</a>
                                            <ul>
                                                <li><a href="{{ route('shop.dashboard') }}">Dashboard</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('shop.about') }}">About Us</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="{{ route('shop.blog') }}">Blog</a></li>
                                                <li><a href="{{ route('shop.post') }}">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('shop.contact') }}">Contact Us</a></li>
                                        <li><a href="#" class="login-link">Login</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End .header-left -->

                    <div class="header-center justify-content-between">
                        <a href="{{ route('shop.home') }}" class="logo">
                            <img src="{{ asset('public/assets/images/logo.png') }}" alt="Porto Logo">
                            {{-- <img src="{{ asset('storage/app/public/photos/'.$settings->logo)}}" alt="Porto Logo"> --}}
                        </a>

                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                    </div><!-- End .header-center -->

                    <div class="header-right d-none d-lg-flex">
                        <div class="main-nav d-flex w-lg-max justify-content-end">
                            <ul class="menu">
                                <li><a href="{{ route('shop.blog') }}">Blog</a></li>
                                <li><a href="{{ route('shop.about') }}">About Us</a></li>
                                <li><a href="#">Elements</a></li>
                                <li><a href="#">Buy Porto!</a></li>
                            </ul>
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            @yield('content')
        </main><!-- End .main -->

        <footer class="footer font2 appear-animate" data-animation-delay="300" data-animation-duration="1200">
            <div class="instagram-section">
                <h2 class="section-title text-center">From Our Instagram</h2>
                <h6 class="section-subtitle text-center font-weight-normal">@portoecommerce</h6>

                <div class="owl-carousel owl-theme" data-owl-options="{
  'loop': false,
  'nav': false,
  'dots': false,
  'margin': 20,
  'items': 2,
  'responsive': {
  '480': {
  'items': 3
  },
  '576': {
  'items': 4
  },
  '768': {
  'items': 5
  },
  '992': {
  'items': 6
  },
  '1200': {
  'items': 7
  },
  '1400': {
  'items': 9
  }
  }
  }">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-1.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-2.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-3.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-4.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-5.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-6.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-7.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-8.jpg') }}" alt="instagram">
                    <img src="{{ asset('public/assets/images/instagrams/instagram-9.jpg') }}" alt="instagram">
                </div>
            </div><!-- End .instagram-section -->

            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-5 m-b-4">
                            <img src="{{ asset('public/assets/images/footer-logo.png') }}" alt="Logo" class="m-b-3 logo">

                            <p class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Praesent
                                pulvinar feugiat quam, vitae aliquam.</p>

                            <div class="row ls-0 footer-question">
                                <div class="col-5">
                                    <h6 class="mb-0">QUESTIONS</h6>
                                    <h3>1-888-123-456</h3>
                                </div>

                                <div class="col-7">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                            title="Facebook"></a>
                                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                            title="Twitter"></a>
                                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"
                                            title="Instagram"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-2 col-sm-4 m-b-4">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>

                                <ul class="links">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Track Your Order</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Product Support</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-2 -->

                        <div class="col-lg-2 col-sm-4 m-b-4">
                            <div class="widget">
                                <h4 class="widget-title">About</h4>

                                <ul class="links">
                                    <li><a href="my-account.html">About Porto</a></li>
                                    <li><a href="#">Our Guarantees</a></li>
                                    <li><a href="#">Terms And Conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Intellectual Property Claims</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-2 -->

                        <div class="col-lg-3 col-sm-4 m-b-4">
                            <div class="widget">
                                <h4 class="widget-title">Features</h4>

                                <ul class="links">
                                    <li><a href="#">Super Fast Wordpress Theme</a></li>
                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                    <li><a href="#">36 Unique Shop Layouts</a></li>
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile &amp; Retina Optimized</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-middle -->
            </div><!-- End. container -->

            <div class="bg-dark">
                <div class="container">
                    <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div class="footer-left">
                            <p class="footer-copyright py-3 pr-4 mb-0">&copy; Bittrade eCommerce {{ date('Y') }}. All Rights Reserved.
                            </p>
                        </div><!-- End .footer-left -->

                        <div class="footer-right">
                            <img src="{{ asset('public/assets/images/payments.png') }}" alt="payment">
                        </div><!-- End .footer-right -->
                    </div><!-- End .footer-bottom -->
                </div><!-- End .container -->
            </div><!-- End .bg-dark -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="border-0">
                        <a href="#">USD</a>
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                        </ul>
                    </li>
                    <li class="border-0 mb-2">
                        <a href="#">ENGLISH</a>
                        <ul>
                            <li><a href="#">ENGLISH</a></li>
                            <li><a href="#">FRENCH</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="{{ route('shop.home') }}">Home</a></li>
                    <li>
                        <a href="{{ route('shop.category') }}">Categories</a>
                        <ul>
                            <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="{{ route('shop.category') }}">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('shop.product') }}">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="{{ route('shop.product') }}">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span
                                                class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="{{ route('shop.product') }}">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="{{ route('shop.product') }}">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span
                                                class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="{{ route('shop.cart') }}">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="{{ route('shop.checkout') }}">Checkout Shipping</a></li>
                                    <li><a href="{{ route('shop.checkout') }}">Checkout Shipping 2</a></li>
                                    <li><a href="{{ route('shop.checkout.review') }}">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('shop.about') }}">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('shop.blog') }}">Blog</a>
                        <ul>
                            <li><a href="{{ route('shop.post') }}">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('shop.contact') }}">Contact Us</a></li>
                    <li><a href="#">ELEMENTS</a></li>
                    <li><a href="{{ route('shop.about') }}">ABOUT US</a></li>
                    <li><a href="login.html">LOG IN</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons d-flex">
                <a href="#" class="social-icon mr-3" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon mr-3" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
        style="background-image: url({{ asset('public/assets/images/newsletter_popup_bg.jpg') }})">
        <div class="newsletter-popup-content">
            <img src="{{ asset('public/assets/images/logo-black.png') }}" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                        placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->

    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body add-cart-box text-center">
                    <p>You've just added this product to the<br>cart:</p>
                    <h4 id="productTitle">ProductTitle</h4>
                    <img src="{{ asset('public/assets/images/products/product-1.jpg') }}" id="productImage" width="100" height="100"
                        alt="adding cart image">
                    <div class="btn-actions">
                        <a href="{{ route('shop.cart') }}" class="btn-primary" role="button">Go to cart page</a>
                        <a href="#" class="btn-primary" role="button" data-dismiss="modal">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.appear.min.js') }}"></script>
    @stack('page_scripts')
    <!-- Main JS File -->
    <script src="{{ asset('public/assets/js/main.min.js') }}"></script>
</body>

</html>
