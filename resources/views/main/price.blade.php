@extends('layouts.main')
@section('content')

@section('title', 'Price')
@livewireStyles
<div class="pricing section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="coin-search">
                    <div class="search-box">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search Coin">
                            <button class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                <div class="sort-view">
                    <div class="search-timeline">
                        <a href="#" class="active">1H</a>
                        <a href="#">24H</a>
                        <a href="#">1W</a>
                        <a href="#">1M</a>
                        <a href="#">1Y</a>
                    </div>
                    <div class="coin-view">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#grid-view">
                                    <i class="mdi mdi-view-grid"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#list-view">
                                    <i class="mdi mdi-view-sequential"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid-view">
                        <div class="price-grid">
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
                                            <div class="media"><br/><br/>
                                                <img src="public/images/nxg.png" style="width:25%" alt="" class="img-fluid"><br/>
                                                <div class="media-body">
                                                    NXGcoins
                                                </div>
                                            </div>
                                            <p class="mb-0"> 24h</p>
                                        </div>
                                        <div class="card-body">
                                            <h3>USD 62,548.2254</h3>
                                            <span class="text-success">+2.05%</span>
                                            <div id="xtzChart1"></div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-view">
                        <div class="market-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Change</th>
                                            <th>Chart</th>
                                            <th>Trade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin <b>BTC</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-success">+1.13%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>2
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc ETH"></i>
                                                <span>Ethereum <b>ETH</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-success">+1.13%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>3
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc BCH-alt"></i>
                                                <span>Bitcoin Cash <b>BCH</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-success">+1.13%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>4
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc LTC"></i>
                                                <span>Litecoin <b>LTC</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-danger">-0.47%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>1
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin <b>BTC</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-success">+1.13%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>2
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc ETH"></i>
                                                <span>Ethereum <b>ETH</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-success">+1.13%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>3
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc BCH-alt"></i>
                                                <span>Bitcoin Cash <b>BCH</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-success">+1.13%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
                                        </tr>
                                        <tr>
                                            <td>4
                                            </td>
                                            <td class="coin_icon">
                                                <i class="cc LTC"></i>
                                                <span>Litecoin <b>LTC</b></span>
                                            </td>

                                            <td>
                                                USD 680,175.06
                                            </td>
                                            <td>
                                                <span class="text-danger">-0.47%</span>
                                            </td>
                                            <td> <span class="sparkline8"></span></td>
                                            <td><a href="#" class="btn btn-success">Buy</a></td>
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
@livewireScripts
<script src="public/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="public/js/plugins/sparkline-init.js"></script>
@endsection