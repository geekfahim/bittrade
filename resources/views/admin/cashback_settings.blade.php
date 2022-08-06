<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
    <div class="main-panel bg-{{Auth('admin')->User()->dashboard_style}}">
        <div class="content bg-{{Auth('admin')->User()->dashboard_style}} ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{$text}}">Set Mobile Recharge Cashback {{$settings->site_name}} community</h1>
                </div>
                @if(Session::has('message'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> {{Session::get('message')}}
                        </div>
                    </div>
                </div>
                @endif

                @if(count($errors) > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable" role="alert" >
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @foreach ($errors->all() as $error)
                            <i class="fa fa-warning"></i> {{ $error }}
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <div class="mb-5 row">
                    <div class="col-lg-8 offset-lg-2 card p-3 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                        <form method="POST" action="{{ url('admin/dashboard/updatecashback') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('cashbackper') ? ' has-error' : '' }}">
                                <h4 class="text-{{$text}}">CashBack (%)</h4>
                                <div>
                                    <input id="cashbackper" type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="cashbackper" value="{{ $settings->cashbackper }}" required>
                                    @if ($errors->has('cashbackper'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cashbackper') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="px-5 btn btn-primary btn-lg">
                                        <i class="fa fa-btn fa-user"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection