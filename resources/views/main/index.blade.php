@extends('layouts.main')
@section('content')

@section('title', 'Home')
@livewireStyles
<div id="particles-js">
    <div class="intro">
        <div class="container">
            <div class="item">
                <div class="row justify-content-between align-items-center" id="box">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="intro-content">
                            <h1>
                                <!-- Trade with --> <strong class="text-primary">
                                    <!-- Bittrade -->
                                </strong>. <br>
                                <!-- Buy and sell
                                            cryptocurrency -->
                            </h1>
                            <p></p>
                        </div>

                        <!-- <div class="intro-btn">
                                        <a href="#" class="btn btn-primary">Get Started</a>
                                        <a href="#" class="btn btn-outline-primary">Browse Now</a>
                                    </div> -->
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<div class="price-grid section-padding" id="price-grid-bg">
    <div class="container">
        <livewire:market-price />
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc ETH"></i></span>
                                    <div class="media-body">
                                        Verge
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="ethChart1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc USDT"></i></span>
                                    <div class="media-body">
                                        Golem
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="usdtChart1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc EOS"></i></span>
                                    <div class="media-body">
                                        TerraKRW
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="eosChart1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
									<span><img src="public/images/about_l.png" style="width:98%" alt="" class="img-fluid"></span>
                                    <div class="media-body">
                                        NXGcoins
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 0.12</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="xtzChart1"></div>
                            </div>
                        </div>
                    </div>
            
            
            
        </div>
    </div>
</div>


<div class="getstart section-padding" id="getstart-bg" style="height:800px">
    <div class="container" style="float:right">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title">
                    <h2>Get started in a few minutes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="la la-user-plus"></i></span>
                    <h3>Create an account</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="la la-bank"></i></span>
                    <h3>Link your bank account</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="la la-exchange"></i></span>
                    <h3>Start buying & selling</h3>
                </div>
            </div>
        </div>
    </div>
    <div style="float:left">
        <script type="text/javascript">
	atOptions = {
		'key' : '7f56ea5a3f0a8f6da2c365d393554a31',
		'format' : 'iframe',
		'height' : 600,
		'width' : 160,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highconvertingformats.com/7f56ea5a3f0a8f6da2c365d393554a31/invoke.js"></scr' + 'ipt>');
</script>
    </div>
</div>


<div class="portfolio section-padding" data-scroll-index="2" id="portfolio-bg">
    <div class="container">
        <div class="row py-lg-5 justify-content-center">
            <div class="col-xl-7">
                <div class="section-title text-center">
                    <h2>Create your cryptocurrency portfolio today</h2>
                    <p>Bittrade has a variety of features that make it the best place to start trading</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-7 col-lg-6">
                <div class="portfolio_list">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="media">
                                <span class="port-icon"> <i class="la la-bar-chart"></i></span>
                                <div class="media-body">
                                    <h4>Manage your portfolio</h4>
                                    <p>Buy and sell popular digital currencies, keep track of them in the one
                                        place.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="media">
                                <span class="port-icon"> <i class="la la-calendar-check-o"></i></span>
                                <div class="media-body">
                                    <h4>Recurring buys</h4>
                                    <p>Invest in cryptocurrency slowly over time by scheduling buys daily,
                                        weekly,
                                        or monthly.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="media">
                                <span class="port-icon"> <i class="la la-lock"></i></span>
                                <div class="media-body">
                                    <h4>Vault protection</h4>
                                    <p>For added security, store your funds in a vault with time delayed
                                        withdrawals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="media">
                                <span class="port-icon"> <i class="la la-mobile"></i></span>
                                <div class="media-body">
                                    <h4>Mobile apps</h4>
                                    <p>Stay on top of the markets with the Bittrade app for <a href="#">Android</a>
                                        or
                                        <a href="#">iOS</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="portfolio_img">
                    <img src="{{ asset('public/images/portfolio.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>





<div class="promo section-padding" id="promo-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center">
                    <h2>The most trusted cryptocurrency platform</h2>
                    <p> Here are a few reasons why you should choose Bittrade
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="promo-content">
                    <div class="promo-content-img">
                        <img class="img-fluid" src="{{ asset('public/images/svg/protect.svg') }}" alt="">
                    </div>
                    <h3>Secure storage </h3>
                    <p>We store the vast majority of the digital assets in secure offline storage.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="promo-content">
                    <div class="promo-content-img">
                        <img class="img-fluid" src="{{ asset('public/images/svg/cyber.svg') }}" alt="">
                    </div>
                    <h3>Protected by insurance</h3>
                    <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="promo-content">
                    <div class="promo-content-img">
                        <img class="img-fluid" src="{{ asset('public/images/svg/finance.svg') }}" alt="">
                    </div>
                    <h3>Industry best practices</h3>
                    <p>Bittrade supports a variety of the most popular digital currencies.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="appss section-padding" id="appss-bg" style="background-position:25% 25%">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-7 col-lg-6 col-md-6">
                <div class="appss-content">
                    <h2>The secure app to store crypto yourself</h2>
                    <ul>
                        <li><i class="la la-check"></i> All your digital assets in one place</li>
                        <li><i class="la la-check"></i> Use Decentralized Apps</li>
                        <li><i class="la la-check"></i> Pay friends, not addresses</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary my-1 waves-effect">
                            <img src="{{ asset('public/images/android.svg') }}" alt="">
                        </a>
                        <a href="#" class="btn btn-primary my-1 waves-effect">
                            <img src="{{ asset('public/images/apple.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="appss-img">
                    <img class="img-fluid" src="{{ asset('public/images/bg/16.jpg') }}" alt=""
                        style="background-repeat: no-repeat; position: relative; background-size: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog section-padding" id="blog-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <img class="img-fluid" src="{{ asset('public/images/bg/22.jpg') }}" alt=""
                            style="background-repeat: no-repeat; position: relative; background-size: 100%;">
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h4 class="card-title">Why does Litecoin need MimbleWimble?</h4>
                            </a>
                            <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                of
                                old tosh baking cakes.!</p>
                        </div>
                        <div class="card-footer">
                            <div class="meta-info">
                                <a href="#" class="author"><img src="{{ asset('public/images/avatar/5.jpg') }}" alt="">
                                    Admin</a>
                                <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <img class="img-fluid" src="{{ asset('public/images/bg/14.jpg') }}" alt=""
                            style="background-repeat: no-repeat; position: relative; background-size: 100%;">
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h4 class="card-title">How to securely store your HD wallet seeds?</h4>
                            </a>
                            <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                of
                                old tosh baking cakes.!</p>
                        </div>
                        <div class="card-footer">
                            <div class="meta-info">
                                <a href="#" class="author"><img src="{{ asset('public/images/avatar/6.jpg') }}" alt="">
                                    Admin</a>
                                <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <img class="img-fluid" src="{{ asset('public/images/bg/15.jpg') }}" alt=""
                            style="background-repeat: no-repeat; position: relative; background-size: 100%;">
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h4 class="card-title">Exclusive Interview With Xinxi Wang Of Litecoin</h4>
                            </a>
                            <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                of
                                old tosh baking cakes.!</p>
                        </div>
                        <div class="card-footer">
                            <div class="meta-info">
                                <a href="#" class="author"><img src="{{ asset('public/images/avatar/7.jpg') }}" alt="">
                                    Admin</a>
                                <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="get-touch section-padding" id="get-touch-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title">
                    <h2>Get in touch. Stay in touch.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <div class="media">
                        <span><i class="fa fa-shield"></i></span>
                        <div class="media-body">
                            <h4>24 / 7 Support</h4>
                            <p>Got a problem? Just get in touch. Our support team is available 24/7.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <div class="media">
                        <span><i class="fa fa-cubes"></i></span>
                        <div class="media-body">
                            <h4>Bittrade Blog</h4>
                            <p>News and updates from the world’s leading cryptocurrency exchange.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <div class="media">
                        <span><i class="fa fa-certificate"></i></span>
                        <div class="media-body">
                            <h4>Careers</h4>
                            <p>Help build the future of technology. Start your new career at Bittrade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <div class="media">
                        <span><i class="fa fa-life-ring"></i></span>
                        <div class="media-body">
                            <h4>Community</h4>
                            <p>Bittrade is global. Join the discussion in our worldwide communities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@livewireScripts
@endsection