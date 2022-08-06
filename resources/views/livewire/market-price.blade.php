<div class="row" wire:poll="marketData">
@if(isset($market_data))
@foreach($market_data as $data)
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
    <div class="card">
        <div class="card-header">
            <div class="media">
                <img src="{{ $data['image'] }}" style="width: 30px; height: 30px; margin: 2px;"/>
                <div class="media-body">
                    {{ $data['name'] }}
                </div>
            </div>
            <p class="mb-0"> 24h</p>
        </div>
        <div class="card-body">
            <h3>USD {{ $data['current_price'] }}</h3>
            <span class="text-success">
                @php
                    $price_change_percentage_24h = number_format((float)$data['price_change_percentage_24h'], 2, '.', '');
                    if($price_change_percentage_24h < 0)
                        $price = $price_change_percentage_24h;
                    else
                        $price = '+'.$price_change_percentage_24h;                                    

                @endphp
            
            {{ $price }}%</span>
            <div id="{{ $data['symbol'] }}Chart"></div>
            
            <script>
                window.livewire.on('chart-show', message => {
                    var options = {
                        chart: {
                            height: 100,
                            type: 'line',
                            zoom: {
                                enabled: false
                            },

                            toolbar: {
                                show: false,
                            }
                        },
                        series: [{
                            name: "Desktops",
                            data: [10, 41, 35, 51, 49, 62, 69, 91, 80, 10, 41, 35, 51, 49, 62, 69, 91, 80]
                        }],
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                            colors: ["#F7931A"],
                        },
                        grid: {
                            show: false,
                        },
                        tooltip: {
                            enabled: false,
                            x: {
                                format: "dd MMM yyyy"
                            },
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                            axisBorder: {
                                show: false
                            },

                            labels: {
                                show: false
                            }
                        },
                    }

                    var chart_type = "<?php echo $data['symbol']; ?>";
                    var chart = new ApexCharts(
                        document.querySelector("#"+chart_type+"Chart"),
                        options
                    );
                    chart.render();
                })
                </script>
        </div>
    </div>
</div>
@endforeach
@endif
</div>