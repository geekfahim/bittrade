<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bittrade </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="public/vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="public/vendor/waves/waves.min.css">
    <link rel="stylesheet" href="public/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="public/css/style.css">
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

        <div class="header dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                            <a class="navbar-brand" href="index.html">
                                <h2 class="logo">
                                    <img class="img-fluid" src="public/images/bg/logo.png" alt="" > 
                                </h2>
                                </a>

                            <div class="dashboard_log my-2">
                                <div class="d-flex align-items-center">
                                    <div class="account_money">
                                        <ul>
                                            <li class="crypto">
                                                <span>0.0025</span>
                                                <i class="cc BTC"></i>
                                            </li>
                                            <li class="usd">
                                                <span>19.93 USD</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile_log dropdown">
                                        <div class="user" data-toggle="dropdown">
                                            <span class="thumb"><i class="la la-user"></i></span>
                                            <span class="name">Maria Pascle</span>
                                            <span class="arrow"><i class="la la-angle-down"></i></span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="accounts.html" class="dropdown-item">
                                                <i class="la la-user"></i> Account
                                            </a>
                                            <a href="history.html" class="dropdown-item">
                                                <i class="la la-book"></i> History
                                            </a>
                                            <a href="settings.html" class="dropdown-item">
                                                <i class="la la-cog"></i> Setting
                                            </a>
                                            <a href="lock.html" class="dropdown-item">
                                                <i class="la la-lock"></i> Lock
                                            </a>
                                            <a href="signin.html" class="dropdown-item logout">
                                                <i class="la la-sign-out"></i> Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="menu">
                <ul>
                    <li>
                        <a href="dashboard.html" data-toggle="tooltip" data-placement="right" title="Home">
                            <span><i class="la la-igloo"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="buy-sell.html" data-toggle="tooltip" data-placement="right" title="Exchange">
                            <span><i class="la la-exchange"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="accounts.html" data-toggle="tooltip" data-placement="right" title="Account">
                            <span><i class="la la-user"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.html" data-toggle="tooltip" data-placement="right" title="Setting">
                            <span><i class="la la-tools"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-title dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-content">
                            <p>Welcome Back,
                                <span> Maria Pascle</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-xxl-4">
                        <div class="card balance-widget">
                            <div class="card-header border-0 py-0">
                                <h4 class="card-title">Your Portfolio </h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="balance-widget">
                                    <div class="total-balance">
                                        <h3>$63411.00</h3>
                                        <h6>Total Balance</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <i class="cc BTC mr-3"></i>
                                            <div class="media-body">
                                                <h5 class="m-0">Bitcoin</h5>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 BTC</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <i class="cc LTC mr-3"></i>
                                            <div class="media-body">
                                                <h5 class="m-0">Litecoin</h5>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 LTC</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <i class="cc XRP mr-3"></i>
                                            <div class="media-body">
                                                <h5 class="m-0">Ripple</h5>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 XRP</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <i class="cc DASH mr-3"></i>
                                            <div class="media-body">
                                                <h5 class="m-0">Dash</h5>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 XRP</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
										<li class="media">
											<img src="./images/about_l.png" style="width:30px" alt="" class="img-fluid">&nbsp;
                                            <!--<i class="cc DASH mr-3"></i>-->
                                            <div class="media-body">
                                                <h5 class="m-0">Nxgcoins</h5>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 NXG</h5>
                                                <span>0.12 USD</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-8 col-xxl-8">
                        <div class="card profile_chart">
                            <div class="card-header py-0">
                                <div class="chart_current_data">
                                    <h3>254856 <span>USD</span></h3>
                                    <p class="text-success">125648 <span>USD (20%)</span></p>
                                </div>
                                <div class="duration-option">
                                    <a id="all" class="active">ALL</a>
                                    <a id="one_month" class="">1M</a>
                                    <a id="six_months">6M</a>
                                    <a id="one_year" class="">1Y</a>
                                    <a id="ytd" class="">YTD</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="timeline-chart"></div>
                                <div class="chart-content text-center">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">24hr Volume</p>
                                                <h5>$1236548.325</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">Market Cap</p>
                                                <h5>19B USD</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">Circulating Supply</p>
                                                <h5>29.4M BTC</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">All Time High</p>
                                                <h5>19.783.06 USD</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">Typical hold time </p>
                                                <h5>88 days</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">Trading activity </p>
                                                <h5>70% buy </h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">Popularity </p>
                                                <h5>#1 most held </h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-6">
                                            <div class="chart-stat">
                                                <p class="mb-1">Popularity </p>
                                                <h5>#1 most held </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header border-0 py-0">
                                <h4 class="card-title">Follow</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6 col-xxl-6">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc BTC"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Bitcoin <span>(24h)</span>
                                                        </h5>
                                                    </div>
                                                    <h4>USD 1254.36 <span class="badge badge-success ml-2">+ 06%</span>
                                                    </h4>
                                                </div>
                                                <div id="btcChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-xxl-6">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc ETH"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Ethereum <span>(24h)</span>
                                                        </h5>
                                                    </div>
                                                    <h4>USD 1254.36 <span class="badge badge-danger ml-2">- 06%</span>
                                                    </h4>
                                                </div>
                                                <div id="ltcChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-xxl-6">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc LTC"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Litecoin <span>(24h)</span>
                                                        </h5>
                                                    </div>
                                                    <h4>USD 1254.36 <span class="badge badge-primary ml-2"> 06%</span>
                                                    </h4>
                                                </div>
                                                <div id="xrpChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-xxl-6">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc XRP"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Ripple <span>(24h)</span>
                                                        </h5>
                                                    </div>
                                                    <h4>USD 1254.36 <span class="badge badge-danger ml-2">- 06%</span>
                                                    </h4>
                                                </div>
                                                <div id="dashChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-xxl-4">
                        <div class="card">
                            <div class="card-header border-0 py-0">
                                <h4 class="card-title">Exchange</h4>
                            </div>
                            <div class="card-body">
                                <div class="buy-sell-widget">
                                    <form method="post" name="myform" class="currency_validate">
                                        <div class="form-group">
                                            <label class="mr-sm-2">Currency</label>
                                            <div class="input-group mb-3">
                                                <select name='currency' class="form-control">
                                                    <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                                    <option value="litecoin">Litecoin</option>
                                                </select>
                                                <input type="text" name="usd_amount" class="form-control"
                                                    value="125.00 USD">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="mr-sm-2">Payment Method</label>
                                            <div class="input-group mb-3">
                                                <select name='currency' class="form-control">
                                                    <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                                    <option value="litecoin">Litecoin</option>
                                                </select>
                                                <input type="text" name="usd_amount" class="form-control"
                                                    value="125.00 USD">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="mr-sm-2">Enter your amount</label>
                                            <div class="input-group">
                                                <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC">
                                                <input type="text" name="usd_amount" class="form-control"
                                                    placeholder="125.00 USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="mb-0">Monthly Limit</p>
                                                <h6 class="mb-0">$49750 remaining</h6>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Exchange
                                            Now</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-xxl-8">
                        <div class="card">
                            <div class="card-header border-0 py-0">
                                <h4 class="card-title">Recent Activities</h4>
                                <a href="#">View More </a>
                            </div>
                            <div class="card-body">
                                <div class="transaction-table">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                            <tbody>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                    </td>

                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> Bitcoin
                                                    </td>
                                                    <td>
                                                        Using - Bank *******5264
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc LTC"></i> Litecoin
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-success">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc XRP"></i> Ripple
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc DASH"></i> Dash
                                                    </td>
                                                    <td>
                                                        Using - Card *******2321
                                                    </td>
                                                    <td class="text-success">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> Bitcoin
                                                    </td>
                                                    <td>
                                                        Using - Card *******2321
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="copyright">
                            <p>© Copyright 2020 <a href="#">Bittrade</a> I All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
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
        <!--<div class="sidebar-right">
            <a class="sidebar-right-trigger" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <div class="opt-background">
                        <p>Font Family</p>
                        <select class="form-control" name="theme_font" id="theme_font">
                            <option value="nunito">Nunito</option>
                            <option value="poppins">Poppins</option>
                            
                            <option value="opensans">Open Sans</option>

                        </select>
                    </div>
                    <div>
                        <p>Primary Color</p>
                        <div class="opt-nav-header-color">
                            <span>
                                <input type="radio" name="navigation_header" value="color_1"
                                    class="filled-in chk-col-primary" id="nav_header_color_1" />
                                <label for="nav_header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2"
                                    class="filled-in chk-col-primary" id="nav_header_color_2" />
                                <label for="nav_header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3"
                                    class="filled-in chk-col-primary" id="nav_header_color_3" />
                                <label for="nav_header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4"
                                    class="filled-in chk-col-primary" id="nav_header_color_4" />
                                <label for="nav_header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5"
                                    class="filled-in chk-col-primary" id="nav_header_color_5" />
                                <label for="nav_header_color_5"></label>
                            </span>
                        </div>
                    </div>
                    <div class="opt-header-color">
                        <p>Background Color</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary"
                                    id="header_color_1">
                                <label for="header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary"
                                    id="header_color_2">
                                <label for="header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary"
                                    id="header_color_3">
                                <label for="header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary"
                                    id="header_color_4">
                                <label for="header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary"
                                    id="header_color_5">
                                <label for="header_color_5"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->

    </div>



    <script src="public/js/global.js"></script>
    
    


    

    <script src="public/vendor/toastr/toastr.min.js"></script>
    <script src="public/vendor/toastr/toastr-init.js"></script>

    <script src="public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="public/vendor/circle-progress/circle-progress-init.js"></script>


    <!--  flot-chart js -->
    <script src="public/vendor/apexchart/apexcharts.min.js"></script>
    <script src="public/vendor/apexchart/apexchart-init.js"></script>


    <!-- <script src="./js/dashboard.js"></script> -->
    <script src="public/js/dashboard.js"></script>
    <script src="public/js/scripts.js"></script>

    <script src="public/js/settings.js"></script>
    <script src="public/js/quixnav-init.js"></script>
    <script src="public/js/styleSwitcher.js"></script>
</body>

</html>