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
					<h1 class="title1 text-{{$text}}">{{$type}} Transactions</h1>
					</div>
					
					<div class="mb-5 row">
						<div class="col-12">
							<small class="text-{{$text}}">if you can't see the image, try switching your uploaded location to another option from your admin settings page.</small>
						</div>
						<div class="col-12 card shadow p-4 bg-{{Auth('admin')->User()->dashboard_style}}">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>Name</th>
											<th>Email</th>
											<th>Amount</th>
											<th>Type</th>
											<th>Plan/Narration</th>
											<th>Date created</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($t_history as $history)
    										<tr>
    											<th scope="row">{{$history->name}}</th>
    											<th>{{$history->email}}</th>
    											<td>{{$settings->currency}}{{$history->amount}}</td>
    											<td>{{$history->type}}</td>
    											<td>{{$history->plan}}</td>
    											<td>{{\Carbon\Carbon::parse($history->created_at)->toDayDateTimeString()}}</td>
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