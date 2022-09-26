<?php
	if (Auth::user()->dashboard_style == "light") {
		$bg="light";
		$text = "dark";
	} else {
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
					<nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

							<a class="nav-item nav-link active pt-3 " id="nav-home-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="nav-home" aria-selected="true">Wallet</a>

							<a class="nav-item nav-link pt-3" id="nav-profile-tab" data-toggle="tab" href="#proof" role="tab" aria-controls="nav-profile" aria-selected="false">Proof Upload</a>
							
						</div>
					</nav>
					<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
						{{-- This is the first Tab content --}}
						<div class="tab-pane fade show active bg-{{Auth('admin')->User()->dashboard_style}} card p-3" id="payment" role="tabpanel" aria-labelledby="nav-profile-tab">
							@include('user.includes.walletpay')
						</div>

						{{-- This is the second Tab Content --}}
						<div class="tab-pane fade p-3 bg-{{Auth('admin')->User()->dashboard_style}}" id="proof" role="tabpanel" aria-labelledby="nav-profile-tab">
							@include('user.includes.proof')
						</div>
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
								<div class="alert alert-danger alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									@foreach ($errors->all() as $error)
									<i class="fa fa-warning"></i> {{ $error }}
									@endforeach
								</div>
							</div>
						</div>
                	@endif
					







				</div>
			</div>
    @endsection
