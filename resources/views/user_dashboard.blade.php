@extends('layouts.user_layout')

@section('content')
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Buy And Sell</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Buy and Sell</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Buy BCN</h4>
						</div>
						<div class="box-body">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market" role="tab">Market</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit" role="tab">Limit</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop" role="tab">Stop</a> </li>
							</ul>
							<div class="tab-content p-10 tabcontent-border">
								<div class="tab-pane active" id="market" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="limit" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="stop" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
									</form>
								</div>
							</div>
						</div>
					  </div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sell BCN</h4>
						</div>
						<div class="box-body">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market-sell" role="tab">Market</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit-sell" role="tab">Limit</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop-sell" role="tab">Stop</a> </li>
							</ul>
							<div class="tab-content p-10 tabcontent-border">
								<div class="tab-pane active" id="market-sell" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="limit-sell" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="stop-sell" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
									</form>
								</div>
							</div>
						</div>
					  </div>
				</div>
		</div>
	</section>

@endsection