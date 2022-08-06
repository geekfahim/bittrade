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
					<h1 class="title1 text-{{$text}}">{{ $type }} Transactions </h1>
					</div>
				
					<div class="mb-5 row">
					<div class="col text-center card p-4 bg-{{$bg}}">

					        <nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

								  <h4 class="pt-3 nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true">{{ $type }} Wallet</h4>


							    </div>
							</nav>

							<div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">

								{{-- This is the first Tab content --}}
								<div class="tab-pane fade show active bg-{{$bg}} card p-3" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                        	<table id="ShipTable" class="table table-hover text-{{$text}}">
									<thead>
										<tr>

                                            @if(Request::segment(3) == 'refbonus')
                                                <th>Bonus From</th>
                                            @elseif(Request::segment(3) == 'passiveincome')
                                                <th>Income From</th>
                                            @endif
											<th>Amount</th>
											<th>Type</th>
											<th>Plan/Narration</th>
                                            <th>Remarks</th>
											<th>Date created</th>
										</tr>
									</thead>
									<tbody>
										@foreach($t_history as $history)
    										<tr>
                                                @if(Request::segment(3) == 'refbonus' || Request::segment(3) == 'passiveincome')
                                                    <th scope="row">{{$history->name}}</th>
                                                @endif
                                               <td>{{$settings->currency}}{{$history->amount}}</td>
    											<td>{{$history->type}}</td>
    											<td>{{$history->plan}}</td>
                                                <td>{{$history->remark}}</td>
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
				</div>
			</div>
			@include('user.modals')
	@endsection
