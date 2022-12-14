@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Buy & Sell</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Crtpto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buy & Sell</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
										<i class="fe fe-settings"></i>
										<span>Settings</span>
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
										<i class="fe fe-download-cloud bg-white-transparent text-white"></i>
										<span>Reports</span>
									</button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12">
								<div class="card custom-card overflow-hidden">
										<div class="card-header border-bottom">
											<h3 class="card-title tx-18"><label class="main-content-label tx-15">BUY AND SELL STATISTICS</label></h3>
										</div>
									<div class="card-body">
										<div class="row row-sm m-0">
											<div class="col-lg-12 col-xl-9 col-md-12">
												<div class="chart-wrapper">
													<canvas id="earningbit"></canvas>
												</div>
											</div>
											<div class="col-lg-12 col-xl-3 col-md-12">
												<div class="card bg-light custom-card">
													<div class="card-body">
														<div class="row">
															<div class="col-7">
																<span class="text-muted tx-13">BTC / USD</span>
																<h5 class="my-1 tx-semibold">27.56312</h5>
																<span class="text-danger">-0.06%</span>
															</div>
															<div class="col-5 mt-2">
																<img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-50 hd-50 float-end" alt="">
															</div>
														</div>
													</div>
												</div>
												<div class="card bg-light custom-card">
													<div class="card-body">
														<div class="row">
															<div class="col-7">
																<span class="text-muted tx-13">ETH / USD</span>
																<h5 class="my-1 tx-semibold">29.32761</h5>
																<span class="text-success">+0.045</span>
															</div>
															<div class="col-5 mt-2">
																<img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-50 hd-50 float-end" alt="">
															</div>
														</div>
													</div>
												</div>
												<div class="card bg-light custom-card mb-0">
													<div class="card-body">
														<div class="row">
															<div class="col-7">
																<span class="text-muted tx-13">XRM / USD</span>
																<h5 class="my-1 tx-semibold">25.56718</h5>
																<span class="text-danger">-0.04%</span>
															</div>
															<div class="col-5 mt-2">
																<img src="{{asset('build/assets/img/svgs/crypto-currencies/xmr.svg')}}" class="wd-50 hd-50 float-end" alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12">
								<div class="card custom-card overflow-hidden crypto-buysell-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">SELL CRYPTO</label></h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="tx-16 mb-2 tx-medium">Sell From</label>
											<div class="p-3 border d-flex rounded-10">
												<div class="d-flex">
													<span class="crypto-icon bg-primary-transparent rounded-6 me-3">
														<i class="cf cf-btc text-warning"></i>
													</span>
													<span class="my-auto tx-18 font-weight-normal">Bitcoin BTC</span>
												</div>
												<div class="d-flex ms-auto">
													<div class="card-item-stat d-none d-md-block">
														<h4 class="font-weight-normal mb-0 tx-15">0.374648545 BTC</h4>
														<small class="tx-13 float-end text-end text-muted">$5,634.65</small>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="tx-16 mt-3 mb-2 tx-medium">Deposit to</label>
											<div class="p-3 border d-flex rounded-10">
												<span class="crypto-icon bg-primary-transparent rounded-6">
													<i class="fa fa-bank text-success"></i>
												</span>
												<div class="my-auto ms-3">
													<div class="d-flex my-auto tx-16 font-weight-normal">Banking</div>
													<small class="tx-13 text-muted">Checking</small>
												</div>
											</div>
										</div>
										<label class="tx-16 mt-2 mb-1 mt-3 tx-medium">Amount</label>
										<div class="d-flex mt-2 mb-3">
											<p class="tx-16 mb-0 text-muted">Weekly bank limit</p>
											<div class="ms-auto my-auto">
												<span class="tx-16 text-muted">$10,000.00 remaining</span>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xl-5 col-lg-12 col-md-12 mb-0">
												<div class="input-group">
													<input type="text" class="form-control input-lg wd-80p border-end-0" placeholder="0.041323">
													<div class="input-group-btn wd-40p">
														<select class="form-control border-start-0 icons_select2 br-0" data-placeholder="Choose one">
															<optgroup label="Coins">
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">USD</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AED</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AUD</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">ARS</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AZN</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">BGN</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">BRL</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group col-xl-2 text-center col-lg-12 col-md-12 my-auto">
												<i class="fe fe-repeat text-muted my-3 mt-xl-0 mb-xl-0 tx-20"></i>
											</div>
											<div class="form-group col-xl-5 col-lg-12 col-md-12 mb-0">
												<div class="input-group">
													<input type="text" class="form-control input-lg wd-80p border-end-0" placeholder="500">
													<div class="input-group-btn wd-40p">
														<select class="form-control border-start-0 icons_select2 br-0" data-placeholder="Choose one">
															<optgroup label="Coins">
																<option value="cf cf-btc" data-icon="cf cf-btc cryptoicon bg-primary-transparent rounded-7 text-warning">BTC</option>
																<option value="cf cf-eth" data-icon="cf cf-eth cryptoicon bg-primary-transparent rounded-7 text-primary">ETH</option>
																<option value="cf cf-xrp" data-icon="cf cf-xrp cryptoicon bg-primary-transparent rounded-7 text-info">XRP</option>
																<option value="cf cf-dash" data-icon="cf cf-dash cryptoicon bg-primary-transparent rounded-7 text-secondary">XMR</option>
																<option value="cf cf-neos" data-icon="cf cf-neos cryptoicon bg-primary-transparent rounded-7 text-success">NEO</option>
																<option value="cf cf-ltc" data-icon="cf cf-ltc cryptoicon bg-primary-transparent rounded-7 text-muted">LTC</option>
																<option value="cf cf-bsd" data-icon="cf cf-bsd cryptoicon bg-primary-transparent rounded-7 text-primary">BSD</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
										</div>
										<a href="javascript:;" class="btn btn-outline-primary btn-lg btn-block rounded-6 mt-4">Sell Bitcoin</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4  col-md-12">
								<div class="card custom-card overflow-hidden crypto-buysell-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">BUY CRYPTO</label></h3>
									</div>
									<div class="card-body">
										<div class="d-flex mb-3">
											<div class="">
												<p class="tx-16 text-muted mb-2">1 USDT</p>
												<h4 class="tx-normal">6.32<span class="text-success tx-15 ms-2">CNY</span></h4>
											</div>
											<div class="ms-auto my-auto">
												<span class="">Claim <span class="font-weight-bold text-white bg-success px-1">20</span> Free Bitcoin</span>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control input-lg wd-80p border-end-0" placeholder="Spend 32 - 6500">
												<div class="input-group-btn wd-30p">
													<select class="form-control border-start-0 icons_select2 br-0" data-placeholder="Choose one">
														<optgroup label="Coins">
															<option value="cf cf-btc" data-icon="cf cf-btc cryptoicon bg-primary-transparent rounded-7 text-warning">BTC</option>
															<option value="cf cf-eth" data-icon="cf cf-eth cryptoicon bg-primary-transparent rounded-7 text-primary">ETH</option>
															<option value="cf cf-xrp" data-icon="cf cf-xrp cryptoicon bg-primary-transparent rounded-7 text-info">XRP</option>
															<option value="cf cf-dash" data-icon="cf cf-dash cryptoicon bg-primary-transparent rounded-7 text-secondary">DASH</option>
															<option value="cf cf-neos" data-icon="cf cf-neos cryptoicon bg-primary-transparent rounded-7 text-success">NEO</option>
															<option value="cf cf-ltc" data-icon="cf cf-ltc cryptoicon bg-primary-transparent rounded-7 text-muted">LTC</option>
															<option value="cf cf-bsd" data-icon="cf cf-bsd cryptoicon bg-primary-transparent rounded-7 text-primary">BSD</option>
														</optgroup>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control input-lg wd-80p border-end-0" placeholder="Buy">
												<div class="input-group-btn wd-30p">
													<select class="form-control border-start-0 icons_select2 br-0" data-placeholder="Choose one">
														<optgroup label="Coins">
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">USD</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AED</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AUD</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">ARS</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AZN</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">BGN</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">BRL</option>
														</optgroup>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group fs-14">
											<div class="input-group">
												<input class="form-control input-lg rounded-10" type="text" placeholder="498fd7c42932070ff3ec30">
											</div>
										</div>
										<label class="main-content-label mt-4 mb-4">Select payment method</label>
										<form class="payment-form form">
											<div class="payment-type d-flex">
												<input type="radio" name="radio3" id="credit" value="credit" checked><label class="credit-label payment-cards overflow-hidden text-nowrap four ms-0 col" for="credit"><span class="d-none d-sm-block tx-14">New Card</span><img src="{{asset('build/assets/img/prepaidcard.png')}}" alt="visa"></label>
												<input type="radio" name="radio3" id="debit" value="debit"><label class="debit-label payment-cards overflow-hidden text-nowrap four col" for="debit"><span class="d-none d-sm-block tx-14">Debit Card</span><img src="{{asset('build/assets/img/mastercard.png')}}" alt="Debitcard"></label>
												<input type="radio" name="radio3" id="paypal" value="paypal"><label class="paypal-label payment-cards overflow-hidden text-nowrap four col" for="paypal"><span class="d-none d-sm-block tx-14">Paypal</span><img src="{{asset('build/assets/img/paypal.png')}}" alt="paypal"></label>
											</div>
											<a href="javascript:;" class="btn btn-outline-primary btn-lg btn-block rounded-6 mt-4">Buy Now</a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12">
								<div class="card custom-card overflow-hidden crypto-buysell-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">QUICK SECURE TRANSFER</label></h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="tx-16 mb-2 tx-medium">Crypto</label>
											<div class="p-3 border d-flex rounded-10">
												<div class="d-flex">
													<span class="crypto-icon bg-info-transparent rounded-6 me-3">
														<i class="cf cf-xrp text-info"></i>
													</span>
													<span class="my-auto tx-18 font-weight-normal">Ripple XRP</span>
												</div>
												<div class="d-flex ms-auto">
													<div class="card-item-stat d-none d-md-block">
														<h4 class="font-weight-normal mb-0 tx-15">0.00000434 XRP</h4>
														<small class="tx-13 float-end text-end text-muted">$3,789 USD</small>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="tx-16 mt-3 mb-2 tx-medium">Deposit to</label>
											<div class="p-3 border d-flex rounded-10">
												<span class="crypto-icon bg-primary-transparent rounded-6">
													<i class="fa fa-bank text-success"></i>
												</span>
												<div class="my-auto ms-3">
													<div class="d-flex my-auto tx-16 font-weight-normal">Banking</div>
													<small class="tx-13 text-muted">Checking</small>
												</div>
											</div>
										</div>
										<label class="tx-16 mt-2 mb-1 mt-3 tx-medium">Amount</label>
										<div class="d-flex mt-2 mb-3">
											<p class="tx-16 mb-0 text-muted">Weekly bank limit</p>
											<div class="ms-auto my-auto">
												<span class="tx-16 text-muted">$10,000.00 remaining</span>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xl-12 col-lg-12 col-md-12 mb-0">
												<div class="input-group">
													<input type="text" class="form-control input-lg wd-80p border-end-0" placeholder="0.041323">
													<div class="input-group-btn wd-40p">
														<select class="form-control border-start-0 icons_select2 br-0" data-placeholder="Choose one">
															<optgroup label="Coins">
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">USD</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AED</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AUD</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">ARS</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">AZN</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">BGN</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon bg-primary-transparent rounded-7 text-primary">BRL</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
										</div>
										<a href="javascript:;" class="btn btn-outline-primary btn-lg btn-block rounded-6 mt-4">Transfer</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">Recent Trading Activities History</label></h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  text-nowrap table-bordered text-md-nowrap table-striped mg-b-0">
												<thead>
													<tr>
														<th class="bg-transparent">Type</th>
														<th class="bg-transparent">ID</th>
														<th class="bg-transparent">Date</th>
														<th class="bg-transparent">Amount</th>
														<th class="bg-transparent">Remaining</th>
														<th class="bg-transparent">Price</th>
														<th class="bg-transparent">USD</th>
														<th class="bg-transparent">Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1001</td>
														<td class="text-muted tx-13">31-05-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.37218</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.42173</td>
														<td>52681.13</td>
														<td>$ 5273.15</td>
														<td><span class="badge bg-success-light rounded-pill px-2 py-1">Completed</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1002</td>
														<td class="text-muted tx-13">02-06-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 1.47364</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.36472</td>
														<td>73647.15</td>
														<td>$ 2637.37</td>
														<td><span class="badge bg-warning-light rounded-pill px-2 py-1">Pending</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1003</td>
														<td class="text-muted tx-13">05-06-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.63736</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.73748</td>
														<td>72637.02</td>
														<td>$ 6345.16</td>
														<td><span class="badge bg-danger-light rounded-pill px-2 py-1">Cancelled</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1004</td>
														<td class="text-muted tx-13">15-07-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.63647</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.83643</td>
														<td>83748.19</td>
														<td>$ 23836.09</td>
														<td><span class="badge bg-success-light rounded-pill px-2 py-1">Completed</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1005</td>
														<td class="text-muted tx-13">22-07-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.76263</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.72563</td>
														<td>32635.32</td>
														<td>$ 7235.25</td>
														<td><span class="badge bg-success-light rounded-pill px-2 py-1">Completed</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1006</td>
														<td class="text-muted tx-13">30-07-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.46263</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.27363</td>
														<td>28937.22</td>
														<td>$ 4853.15</td>
														<td><span class="badge bg-info-light rounded-pill px-2 py-1">In Process</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1007</td>
														<td class="text-muted tx-13">31-05-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.37218</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.42173</td>
														<td>52681.13</td>
														<td>$ 5273.15</td>
														<td><span class="badge bg-success-light rounded-pill px-2 py-1">Completed</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1008</td>
														<td class="text-muted tx-13">02-06-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 1.47364</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.36472</td>
														<td>73647.15</td>
														<td>$ 2637.37</td>
														<td><span class="badge bg-warning-light rounded-pill px-2 py-1">Pending</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1009</td>
														<td class="text-muted tx-13">05-06-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.63736</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.73748</td>
														<td>72637.02</td>
														<td>$ 6345.16</td>
														<td><span class="badge bg-danger-light rounded-pill px-2 py-1">Cancelled</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1010</td>
														<td class="text-muted tx-13">15-07-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.63647</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.83643</td>
														<td>83748.19</td>
														<td>$ 23836.09</td>
														<td><span class="badge bg-success-light rounded-pill px-2 py-1">Completed</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1011</td>
														<td class="text-muted tx-13">22-07-2021</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.76263</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.72563</td>
														<td>32635.32</td>
														<td>$ 7235.25</td>
														<td><span class="badge bg-success-light rounded-pill px-2 py-1">Completed</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

		<!-- INTERNAL CHART.BUNDLE JS -->
		<script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- INTERNAL APEXCHART JS -->
		@vite('resources/assets/js/apexcharts.js')


		<!-- INTERNAL DASHBOARD JS -->
		@vite('resources/assets/js/crypto-buysell.js')

		
@endsection
