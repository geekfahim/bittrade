@extends('layouts.shop')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('shop.home') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div>
    </nav>

    <div class="container mb-6">
        <div class="row">
            <div class="col-lg-9">
                <article class="post">
                    <div class="post-media">
                        <a href="{{ route('shop.post') }}">
                            <img src="{{ asset('public/assets/images/blog/post-1.jpg') }}" alt="Post">
                        </a>
                    </div><!-- End .post-media -->

                    <div class="post-body">
                        <div class="post-date">
                            <span class="day">29</span>
                            <span class="month">Jun</span>
                        </div><!-- End .post-date -->

                        <h2 class="post-title">
                            <a href="{{ route('shop.post') }}">Post Format - Image</a>
                        </h2>

                        <div class="post-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue
                                sed ligula.</p>

                            <a href="{{ route('shop.post') }}" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .post-content -->

                        <div class="post-meta">
                            <span><i class="icon-calendar"></i>June 29, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .post-meta -->
                    </div><!-- End .post-body -->
                </article><!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="{{ route('shop.post') }}">
                            <div class="post-slider owl-carousel owl-theme owl-theme-light">
                                <img src="{{ asset('public/assets/images/blog/post-1.jpg') }}" alt="Post">
                                <img src="{{ asset('public/assets/images/blog/post-2.jpg') }}" alt="Post">
                                <img src="{{ asset('public/assets/images/blog/post-3.jpg') }}" alt="Post">
                            </div><!-- End .post-slider -->
                        </a>
                    </div><!-- End .post-media -->

                    <div class="post-body">
                        <div class="post-date">
                            <span class="day">22</span>
                            <span class="month">Jun</span>
                        </div><!-- End .post-date -->

                        <h2 class="post-title">
                            <a href="{{ route('shop.post') }}">Post Format - Image Gallery</a>
                        </h2>

                        <div class="post-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue
                                sed ligula.</p>

                            <a href="{{ route('shop.post') }}" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .post-content -->

                        <div class="post-meta">
                            <span><i class="icon-calendar"></i>June 22, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .post-meta -->
                    </div><!-- End .post-body -->
                </article><!-- End .post -->

                <article class="post">
                    <div class="post-body">
                        <div class="post-date">
                            <span class="day">07</span>
                            <span class="month">Jun</span>
                        </div><!-- End .post-date -->

                        <h2 class="post-title">
                            <a href="{{ route('shop.post') }}">Hello World!</a>
                        </h2>

                        <div class="post-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue
                                sed ligula.</p>

                            <a href="{{ route('shop.post') }}" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .post-content -->

                        <div class="post-meta">
                            <span><i class="icon-calendar"></i>June 07, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .post-meta -->
                    </div><!-- End .post-body -->
                </article><!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="{{ route('shop.post') }}">
                            <img src="{{ asset('public/assets/images/blog/post-3.jpg') }}" alt="Post">
                        </a>
                    </div><!-- End .post-media -->

                    <div class="post-body">
                        <div class="post-date">
                            <span class="day">11</span>
                            <span class="month">May</span>
                        </div><!-- End .post-date -->

                        <h2 class="post-title">
                            <a href="{{ route('shop.post') }}">Post Format - Image</a>
                        </h2>

                        <div class="post-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue
                                sed ligula.</p>

                            <a href="{{ route('shop.post') }}" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .post-content -->

                        <div class="post-meta">
                            <span><i class="icon-calendar"></i>May 11, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .post-meta -->
                    </div><!-- End .post-body -->
                </article><!-- End .post -->

                <nav class="toolbox toolbox-pagination border-0">
                    <ul class="pagination">
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar col-lg-3">
                <div class="sidebar-wrapper">
                    <div class="widget widget-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <input type="search" class="form-control" placeholder="Search posts here..." name="s" required>
                            <button type="submit" class="search-submit" title="Search">
                                <i class="icon-search"></i>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div><!-- End .widget -->

                    <div class="widget widget-categories">
                        <h4 class="widget-title">Blog Categories</h4>

                        <ul class="list">
                            <li><a href="#">All about clothing</a></li>
                            <li><a href="#">Make-up &amp; beauty</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Fashion trends</a></li>
                            <li><a href="#">Haircuts &amp; hairstyles</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h4 class="widget-title">Recent Posts</h4>

                        <ul class="simple-post-list">
                            <li>
                                <div class="post-media">
                                    <a href="{{ route('shop.post') }}">
                                        <img src="{{ asset('public/assets/images/blog/widget/post-1.jpg') }}" alt="Post">
                                    </a>
                                </div><!-- End .post-media -->
                                <div class="post-info">
                                    <a href="{{ route('shop.post') }}">Post Format - Video</a>
                                    <div class="post-meta">
                                        April 08, 2018
                                    </div><!-- End .post-meta -->
                                </div><!-- End .post-info -->
                            </li>

                            <li>
                                <div class="post-media">
                                    <a href="{{ route('shop.post') }}">
                                        <img src="{{ asset('public/assets/images/blog/widget/post-2.jpg') }}" alt="Post">
                                    </a>
                                </div><!-- End .post-media -->
                                <div class="post-info">
                                    <a href="{{ route('shop.post') }}">Post Format - Image</a>
                                    <div class="post-meta">
                                        March 23, 2016
                                    </div><!-- End .post-meta -->
                                </div><!-- End .post-info -->
                            </li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h4 class="widget-title">Tagcloud</h4>

                        <div class="tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Shoes</a>
                            <a href="#">Skirts</a>
                            <a href="#">Dresses</a>
                            <a href="#">Bags</a>
                        </div><!-- End .tagcloud -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h4 class="widget-title">Archive</h4>

                        <ul class="list">
                            <li><a href="#">April 2018</a></li>
                            <li><a href="#">March 2018</a></li>
                            <li><a href="#">February 2018</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="widget widget_compare">
                        <h4 class="widget-title">Compare Products</h4>

                        <p>You have no items to compare.</p>
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
@endsection
