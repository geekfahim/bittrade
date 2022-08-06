<?php
if (Auth::user()->dashboard_style == 'light') {
    $bgmenu = 'blue';
    $bg = 'light';
    $text = 'dark';
} else {
    $bgmenu = 'dark';
    $bg = 'dark';
    $text = 'light';
}
?>
@extends('layouts.app')
@section('content')
    @include('user.topmenu')
    @include('user.sidebar')
    <div class="main-panel bg-{{ $bg }}">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">New Mobile Recharge</h1>
                </div>
                @if (Session::has('message'))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                            </div>
                        </div>
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                    <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <b>Shopping Wallet Balance - {{$settings->currency}}{{ $shoppingWalletBalance }}</b>
                <div class="row mb-5 text-left">
                    <div class="col card p-4 bg-{{ $bg }}">
                        @php $type = isset($isNext) && !empty($isNext) ? 2 : 1; @endphp
                        <form role="form" method="post"
                            action="{{ route('mobilerecharge.new', ['type' => $type]) }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label for="email">Country</label>
                                                @if (isset($isNext) && !empty($isNext))
                                                    <input type="hidden" class="form-control" name="country" id="country"
                                                        value="{{ $old['country'] ?? '' }}"> <a href="{{ route('mobilerecharge.new') }}">reset</a>
                                                @endif
                                                <select class="form-control" name="country" id="country"
                                                    onchange="show_country_code(this)"
                                                    {!! isset($isNext) && !empty($isNext) ? 'disabled' : '' !!} {!! Auth::user()->dashboard_style == 'dark' ? 'style="background: #1a2035 !important;"' : '' !!} required>
                                                    <option value=""></option>
                                                    @if (isset($countries['data']) && !empty($countries['data']))
                                                        @foreach ($countries['data'] as $k => $v)
                                                            <option value="{{ $v['iso_name'] }}"
                                                                data-country-code='{{ json_encode($v['calling_codes']) }}'
                                                                {{ isset($old['country']) && $old['country'] == $v['iso_name'] ? 'selected' : '' }}>
                                                                {{ $v['name'] }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <!-- /form group -->
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label for="email">Mobile Number</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text mb-0" for="phone"
                                                            id="phone_code">{{ $old['country_code'] ?? '' }}</label>
                                                    </div>
                                                    <input type="hidden" class="form-control" name="country_code"
                                                        id="country_code" value="{{ $old['country_code'] ?? '' }}">
                                                    <input type="number" class="form-control" name="phone" id="phone"
                                                        value="{{ $old['phone'] ?? '' }}" required>
                                                </div>
                                            </div>
                                            <!-- /form group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (isset($isNext) && !empty($isNext))
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="email">Operator</label>
                                            <select class="form-control" name="operator" id="operator"
                                                onchange="load_plans(this)" required>
                                                <option value=""></option>
                                                @if (isset($operators['data']) && !empty($operators['data']))
                                                    @foreach ($operators['data'] as $k => $v)
                                                        <option data-currency="{{ $v['currency'] }}"
                                                            data-min="{{ $v['min'] }}" data-max="{{ $v['max'] }}"
                                                            data-localAmounts="{{ json_encode($v['localAmounts']) }}"
                                                            data-amounts="{{ json_encode($v['amounts']) }}"
                                                            data-plans="{{ base64_encode(json_encode($v['plans'])) }}" value="{{ $v['id'] }}"
                                                            {{ isset($operatorByPhone['data']['id']) && $operatorByPhone['data']['id'] == $v['id'] ? 'selected' : '' }}>{{ $v['name'] }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <!-- /form group -->
                                    </div>
                                </div>
                                <!-- /row -->
                                <input type="hidden" class="form-control" name="currency" id="currency" value="">
                                <input type="hidden" class="form-control" name="note" id="note" value="">
                                <div class="row">
                                    <div class="col-md-8" id="data_push_location"></div>
                                </div>
                                <div class="row pl-2">
                                    <div class="col-md-8" id="data_push_amount"></div>
                                </div>
                                <div class="row pl-2">
                                    <div class="col-md-8" id="data_push_desc"></div>
                                </div>
                                <!-- Form Group -->
                                <div class="form-group mb-0">
                                    <input type="submit" name="submitButton" id="submitButton"
                                        class="btn btn-info text-uppercase w-80 mt-2m" value="Place Recharge Order">
                                </div>
                                <!-- /form group -->
                            @else
                                <!-- Form Group -->
                                <div class="form-group mb-0">
                                    <input type="submit" name="submitButton" id="submitButton"
                                        class="btn btn-info text-uppercase w-80 mt-2m" value="Next">
                                </div>
                                <!-- /form group -->
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            @include('user.modals')
            <script>
                function show_country_code(e) {
                    var country_codes = $(e).find("option:selected").data('country-code');
                    $("#phone_code").html(country_codes[0]);
                    $("#country_code").val(country_codes[0]);
                }

                @if(isset($operatorByPhone['data']['id']) && !empty($operatorByPhone['data']['id']))
                $("#operator").trigger("change");
                @endif

                function load_plans(e) {
                    var min = $(e).find("option:selected").data('min');
                    var max = $(e).find("option:selected").data('max');
                    var amounts = $(e).find("option:selected").data('amounts');
                    var localamounts = $(e).find("option:selected").data('localamounts');
                    var plans = $(e).find("option:selected").data('plans');
                    var currency = $(e).find("option:selected").data('currency');
                    $("#currency").val(currency);
                    plans = JSON.parse(atob(plans));
                    var html = '';
                    if (plans.length > 0) {
                        html +=
                            '<div class="form-group" onchange="load_amounts(this)"><label for="email">Location</label><select class="form-control" name="location" id="location"required><option value=""></option>';
                        $.each(plans, function(k, v) {
                            // v.localAmounts
                            html += '<option data-plans="' + btoa(JSON.stringify(v.localFixedAmountsDescriptions)) +
                                '" value="' + v.locationCode + '">' + v.locationName + '</option>';
                        });
                        html += '</select></div>';
                        $("#data_push_location").html(html);
                        $("#data_push_amount").html('');
                        $("#data_push_desc").html('');
                    } else if (amounts.length > 0) {
                        var html = '<label>Amount</label><br/>';
                        $.each(amounts, function(k, v) {
                            var amount = parseFloat(v).toFixed(2);
                            var amount2 = parseFloat(localamounts[k]).toFixed(2);
                            amount2 = isNaN(amount2) ? amount : amount2;
                            html += '<label class="radio-inline"><input type="radio" name="amount" value="' + amount +
                                '">&nbsp;' + amount2 + '</label>&emsp;';
                        });
                        $("#data_push_amount").html(html);
                        $("#data_push_desc").html('');
                    } else {
                        html = '<div class="form-group"><label for="email">Amount (Minimum: ' + min + ' - Maximum: ' + max +
                            ')</label><input type="number" class="form-control" name="amount" id="amount" value="" min="' + min +
                            '" max="' + max + '" step="0.01" required></div>';
                        $("#data_push_amount").html(html);
                        $("#data_push_desc").html('');
                    }
                }

                function load_amounts(e) {
                    var plans = $(e).find("option:selected").data('plans');
                    plans = JSON.parse(atob(plans));
                    var html = '<label>Amount</label><br/>';
                    $.each(plans, function(k, v) {
                        var amount = parseFloat(k).toFixed(2);
                        html += '<label class="radio-inline"><input type="radio" data-desc="' + v +
                            '" name="amount" value="' + amount + '" onchange="show_plan_desc(\'' + v + '\')">&nbsp;' +
                            amount + '</label>&emsp;';
                    });
                    $("#data_push_amount").html(html);
                    $("#data_push_desc").html('');
                }

                function show_plan_desc(v) {
                    $("#data_push_desc").html('<p class="text-white">Plan Details :- ' + v + '</p>');
                    $("#note").val(v);
                }
            </script>
        @endsection
