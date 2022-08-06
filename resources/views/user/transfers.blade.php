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
					<h1 class="title1 text-{{$text}}">Your Transfers</h1>
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
					<div class="row py-3 mb-4">
						<div class="col">
							<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#transferModal"><i class="fa fa-plus"></i> New Transfer</a>
						</div>
					</div>
					<div class="row mb-5">
					<div class="col text-center card p-4 bg-{{$bg}}">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
							<table  class="UserTable table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>From User</th>
											<th>To User</th>
											<th>Sent Amount</th> 
											<th>Received Amount</th> 
											<th>Status</th> 
											<th>Date Created</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($transfers as $transfer)
										<tr> 
											<th scope="row">{{$transfer->id}}</th>
											<td>{{$transfer->from_user->name ?? ''}} ({{$transfer->from_user->email ?? ''}})</td>
											<td>{{$transfer->to_user->name ?? ''}} ({{$transfer->to_user->email ?? ''}})</td>
											<td>{{$settings->currency}}{{$transfer->send_amount}}</td> 
											<td>{{$settings->currency}}{{$transfer->receive_amount}}</td> 
											<td>{{$transfer->statusLabel()}}
											@if ($transfer->status == 0)
												<a href="{{ route('transfer_otp', $transfer->id) }}" class="btn btn-success btn-xs">Proceed</a>
											@endif
											</td> 
											<td>{{\Carbon\Carbon::parse($transfer->created_at)->toDayDateTimeString()}}</td> 
										</tr> 
										@endforeach
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('user.modals')	
	@endsection
	