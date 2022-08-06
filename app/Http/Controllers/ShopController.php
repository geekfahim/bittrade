<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.home', compact('settings'));
    }

    public function about(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.about', compact('settings'));
    }

    public function contact(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.contact', compact('settings'));
    }

    public function category(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.category', compact('settings'));
    }

    public function product(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.product', compact('settings'));
    }

    public function cart(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.cart', compact('settings'));
    }

    public function checkout(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.checkout', compact('settings'));
    }

    public function checkout_review(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.checkout_review', compact('settings'));
    }

    public function dashboard(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.dashboard', compact('settings'));
    }

    public function blog(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.blog', compact('settings'));
    }

    public function post(Request $request)
    {
        $settings = Settings::where('id', '1')->first();
        return view('shop.post', compact('settings'));
    }
}
