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
		<div class="main-panel">
			<div class="content bg-{{Auth('admin')->User()->dashboard_style}} ">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-{{$text}}">Manage clients tranfers</h1>
					</div>
					@if(Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-info alert-dismissable">
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
					
					<div class="mb-5 row">
						<div class="col-12 card shadow p-4 bg-{{Auth('admin')->User()->dashboard_style}}">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>From User</th>
											<th>To User</th>
											<th>Sent Amount</th> 
											<th>Received Amount</th> 
											<th>Admin Amount</th> 
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
											<td>{{$settings->currency}}{{$transfer->admin_amount}}</td> 
											<td>{{$transfer->statusLabel()}}</td> 
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
				
		@include('admin.includes.modals')
	@endsection