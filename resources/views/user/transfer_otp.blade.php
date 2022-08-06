<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}
?>
@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
        <div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-{{$text}}">Transfer OTP</h1>
					</div>
					@if(Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-info-circle"></i> {{ Session::get('message') }}
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
					<div class="row mb-5">
					<div class="col card p-4 bg-{{$bg}}">
						<h3>Please enter OTP sent to your Registered Email Address. <a href="{{ route('transfer_otp_send', $transfer->id) }}" class="btn btn-success btn-xs">Resend OTP</a></h3>
						<table class="table table-hover text-{{$text}}"> 
							<thead> 
								<tr> 
									<th>ID</th> 
									<th>From User</th>
									<th>To User</th>
									<th>Sent Amount</th> 
									<th>Received Amount</th> 
								</tr> 
							</thead>
							<tbody> 
								<tr> 
									<th scope="row">{{$transfer->id}}</th>
									<td>{{$transfer->from_user->name ?? ''}} ({{$transfer->from_user->email ?? ''}})</td>
									<td>{{$transfer->to_user->name ?? ''}} ({{$transfer->to_user->email ?? ''}})</td>
									<td>{{$settings->currency}}{{$transfer->send_amount}}</td> 
									<td>{{$settings->currency}}{{$transfer->receive_amount}}</td> 
								</tr> 
							</tbody> 
						</table>
						<br/>
						<form class="text-center" style="padding:3px;" role="form" method="post" action="{{route('newtransferotp')}}">
							<input style="padding:5px;" class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter otp here" type="number" name="otp" minlength="6" minlength="6" step="1" required><br/>
							
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="id" value="{{ $transfer->id }}">
							<input type="submit" class="btn btn-{{$text}}" value="Proceed">
					</form>
					</div>
				</div>
			</div>
			@include('user.modals')	
	@endsection
	