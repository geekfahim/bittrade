@extends('layouts.main')
@section('content')

@section('title', 'Blog')

<div class="blog section-padding border-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('public/images/blog/1.jpg') }}" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">Why does Litecoin need MimbleWimble?</h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said
                                        a
                                        load of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="{{ asset('public/images/avatar/5.jpg') }}" alt="">
                                            Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('public/images/blog/2.jpg') }}" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">How to securely store your HD wallet seeds?</h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said
                                        a
                                        load of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="{{ asset('public/images/avatar/6.jpg') }}" alt="">
                                            Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('public/images/blog/3.jpg') }}" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">Exclusive Interview With Xinxi Wang Of Litecoin
                                        </h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said
                                        a
                                        load of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="{{ asset('public/images/avatar/7.jpg') }}" alt="">
                                            Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('public/images/blog/3.jpg') }}" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">Exclusive Interview With Xinxi Wang Of Litecoin
                                        </h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said
                                        a
                                        load of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="{{ asset('public/images/avatar/7.jpg') }}" alt="">
                                            Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="blog-sidebar">
                    <div class="widget-search">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Subscribe Now">
                            <span><i class="la la-search"></i></span>
                        </form>
                    </div>
                    <div class="widget-recent-post">
                        <h3 class="post-title">Recent Post</h3>
                        <ul class="list-unstyled">
                            <li class="media">
                                <img src="{{ asset('public/images/blog/post_1.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    <div class="meta-info">
                                        <a href="#"><i class="la la-user"></i> Admin</a>
                                        <a href="#"><i class="la la-calendar"></i> 31 July, 2019</a>
                                    </div>
                                </div>
                            </li>
                            <li class="media my-4">
                                <img src="{{ asset('public/images/blog/post_2.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    <div class="meta-info">
                                        <a href="#"><i class="la la-user"></i> Admin</a>
                                        <a href="#"><i class="la la-calendar"></i> 31 July, 2019</a>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img src="{{ asset('public/images/blog/post_3.jpg') }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    <div class="meta-info">
                                        <a href="#"><i class="la la-user"></i> Admin</a>
                                        <a href="#"><i class="la la-calendar"></i> 31 July, 2019</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-category">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary">1</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-tag">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tag-group">
                            <a href="#">Bittrade</a>
                            <a href="#">Song</a>
                            <a href="#">Title</a>
                            <a href="#">Good</a>
                            <a href="#">Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection