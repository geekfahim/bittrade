<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

use App\Models\Settings;

class MainController extends Controller
{
    public function index()
    {
        $list = array('bitcoin', 'litecoin', 'bitcoin-cash-sv','ripple','ethereum', 'tether', 'binancecoin', 'bitcoin-cash');

        $client = new CoinGeckoClient();

        $data = $client->coins()->getMarkets('usd');

        $market_data = array_intersect_key($data, $list);

        $settings=Settings::where('id', '=', '1')->first();

        return view('main.index', compact('market_data', 'settings'));
    }

    public function price()
    {
        return view('main.price');
    }

    public function wallet()
    {
        return view('main.wallet');
    }

    public function about()
    {
        return view('main.about');
    }

    public function blog()
    {
        return view('main.blog');
    }


    public function contact()
    {
        return view('main.contact');
    }

    public function helpdesk()
    {
        return view('main.helpdesk');
    }


    public function faq()
    {
        return view('main.faq');
    }


    public function mainDashboard()
    {

        return view('main.dashboard');
    }

    public function signin()
    {
        return view('main.signin');
    }
}
