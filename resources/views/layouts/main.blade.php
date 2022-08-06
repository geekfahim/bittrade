<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'BitTrade') }} - @yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('storage/app/public/photos/'.$settings->favicon)?:''}}" type="image/png"/>
    <link rel="stylesheet" href="{{ asset('vendor/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                <h2 class="logo">
                                    <img src="{{ asset('storage/app/public/photos/'.$settings->logo)}}" alt="{{$settings->site_name}}" title="" class="img-fluid" />
                                </h2>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('price')}}">Price</a>
                                        </li>
                                        <!--<li class="nav-item">
                                            <a class="nav-link" href="{{url('legal')}}">Legal</a>
                                        </li>--->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Wallet
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="public/wallets/bittrade-1.0.0_win64-setup.zip" download>Windows</a>
                                                <a class="dropdown-item" href="public/wallets/bittrade-1.0.0_linux-gnu64.tar.gz" download>Linux</a>
                                                <a class="dropdown-item" href="public/wallets/bittrade-1.0.0_mac-osx64.dmg" download>Mac</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Company
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url('about')}}">About us</a>
                                                <a class="dropdown-item" href="{{url('blog')}}">Blog</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Support
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url('contact')}}">Contact us</a>
                                                <a class="dropdown-item" href="{{url('helpdesk')}}">Help Desk</a>
                                                <a class="dropdown-item" href="{{url('faq')}}">FAQ</a>
                                            </div>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="{{url('legal')}}">Legal</a>
                                        </li>
                                        @if($settings->site_preference =="Web dashboard only")
        									@guest

        									 <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
        									 <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
        									@else
        										<li class="nav-item dropdown">
        											<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
        											<div class="dropdown-menu">
        												<a class="dropdown-item" href="dashboard">Dashboard</a>
        												<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        													  document.getElementById('logout-form').submit();">Logout</a>
        												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        													{{ csrf_field() }}
        												</form>
        											</div>
        										</li>
        									 @endguest
        								@else
        									<li><a href="{{$settings->bot_link}}" class="btn-log ">Get started</a></li>
        								@endif
                                    </ul>
                                </div>
                               <!-- <div class="signin-btn">
                                    @if($settings->site_preference =="Web dashboard only")
										@guest
											<a class="btn btn-primary" href="login">Sign in</a>
											<a class="btn btn-primary" href="register">Register</a>
										@else
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="dashboard">Dashboard</a>
													<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
														  document.getElementById('logout-form').submit();">Logout</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														{{ csrf_field() }}
													</form>
												</div>
											</li>
										 @endguest
									@else
										<li><a href="{{$settings->bot_link}}" class="btn-log ">Get started</a></li>
									@endif
                                </div>-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="bottom section-padding" style="background-image: url({{ asset('images/bg/343253-PB1Q6N-747.jpg') }}); background-repeat: no-repeat; position: relative;background-size:cover">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="bottom-logo">
                            <h2 class="logo">
                                    <img class="img-fluid" src="{{ asset('storage/app/public/photos/upload-logo.png1617292120') }}" alt="" >
                                </h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="bottom-widget">

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="bottom-widget">
                            <h4 class="widget-title"><!-- Support --></h4>
                            <ul>
                                <li><a href="#"><!-- Ticket --></a></li>
                                <li><a href="#"><!-- FAQ --></a></li>
                                <li><a href="#"><!-- Blog --></a></li>
                                <li><a href="#"><!-- Helpdesk --></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="bottom-widget">
                            <h4 class="widget-title"><!-- Exchange Pair --></h4>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <ul>
                                        <li><a href="#"><!-- ETH to BTC --></a></li>
                                        <li><a href="#"><!-- BTC to ETH --></a></li>
                                        <li><a href="#"><!-- LTC to ETH --></a></li>
                                        <li><a href="#"><!-- USDT to BTC --></a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <ul>
                                        <li><a href="#"><!-- BTC to USDT --></a></li>
                                        <li><a href="#"><!-- LTC to BTC --></a></li>
                                        <li><a href="#"><!-- XMR to BTC --></a></li>
                                        <li><a href="#"><!-- ETC to DASH --></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="copyright">
                            <p>&copy; Copyright @ Bittrade&nbsp; I All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--removeIf(production)-->
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">

        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->
    </div>






    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl-carousel-init.js') }}"></script>

    <script src="{{ asset('vendor/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/apexchart/apexchart-init.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>

    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/quixnav-init.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('vendor/particles-js/particles.js') }}"></script>
    <script src="{{ asset('vendor/particles-js/js/app.js') }}"></script>


</body>

</html>
