<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class MarketPrice extends Component
{
    public $logoImg;
    public $name = 0;
    public $symbol;
    public $current_price;
    public $price_change_percentage_24h;
    public $market_data;

    public function marketData(){
        
        $list = array('bitcoin', 'litecoin', 'bitcoin-cash-sv','ripple','ethereum', 'tether', 'binance', 'bitcoin-cash');

        $client = new CoinGeckoClient();
        
        $data = $client->coins()->getMarkets('usd');
        
        $this->market_data = array_intersect_key($data, $list);
        
        $this->emit('chart-show', " ");
      
    }
    
    public function render()
    {
        return view('livewire.market-price');
    }
}
