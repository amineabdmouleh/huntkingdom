@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Crypto Dashboard</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
						<!-- PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
								<div class="card card-bitcoin custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">BTC / USD CRYPTO CHART</label></h3>
									</div>
									<div class="media ps-4 pe-4 mt-4">
										<div class="media-body ms-2">
											<div class="row row-sm">
												<div class="col my-auto">
													<p>BTC / ETH</p>
												</div>
												<div class="col-3">
													<label class="mb-0 text-muted tx-11">Price Benchmark</label>
													<p>150.00%</p>
												</div>
												<div class="col">
													<label class="mb-0 text-muted tx-11">Price (USD)</label>
													<p>$3,764.34</p>
												</div>
												<div class="col">
													<label class="mb-0 text-muted tx-11">Daily Change </label>
													<p>-0.21%</p>
												</div>
												<div class="col">
													<label class="mb-0 text-muted tx-11">Market Cap</label>
													<p>$256.63</p>
												</div>
											</div><!---row end-->
										</div>
									</div>
									<div class="card-body">
										<div id="btchart" class="ht-200 ht-sm-300"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">TRADE HISTORY</label></h3>
									</div>
									<div class="px-3 py-2">
										<div class="table-responsive h-420">
											<table class="table card-table text-nowrap mb-1">
												<thead>
													<tr>
														<th class="border-bottom-0 ps-4">Coin</th>
														<th class="border-bottom-0 ps-3">Price</th>
														<th class="border-bottom-0">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="w-6 h-6 me-2" alt="">Bitcoin
														</td>
														<td>$0.11923<i class="fa fa-arrow-up text-success ms-1"></i></td>
														<td>0.0215</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/xmr.svg')}}" class="w-6 h-6 me-2" alt="">Dash
														</td>
														<td>$0.07324<i class="fa fa-arrow-down text-danger ms-1"></i></td>
														<td>0.0112</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/eos.svg')}}" class="w-6 h-6 me-2" alt="">EOS
														</td>
														<td>$0.12645<i class="fa fa-arrow-up text-success ms-1"></i></td>
														<td>0.0214</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="w-6 h-6 me-2" alt="">ETH
														</td>
														<td>$0.01153<i class="fa fa-arrow-down text-danger ms-1"></i></td>
														<td>0.0012</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/maid.svg')}}" class="w-6 h-6 me-2" alt="">Ripple
														</td>
														<td>$0.08923<i class="fa fa-arrow-down text-success ms-1"></i></td>
														<td>0.0015</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/bcn.svg')}}" class="w-6 h-6 me-2" alt="">Bcn
														</td>
														<td>$0.14915<i class="fa fa-arrow-up text-success ms-1"></i></td>
														<td>0.0312</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/iost.svg')}}" class="w-6 h-6 me-2" alt="">IOTA
														</td>
														<td>$0.08923<i class="fa fa-arrow-down text-danger ms-1"></i></td>
														<td>0.0015</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/xrp.svg')}}" class="w-6 h-6 me-2" alt="">Bitcoin
														</td>
														<td>$0.11923<i class="fa fa-arrow-up text-success ms-1"></i></td>
														<td>0.0215</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-12 col-xl-7">
								<div class="card custom-card h-500">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18 mb-0"><label class="main-content-label tx-15">SELL ORDER</label></h3>
										<span class="text-muted me-2">Total BTC available:</span>
										<span class="text-dark fs-18">5278.279429</span>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered mb-0">
												<thead>
													<tr>
														<th class="border-bottom-0">Date</th>
														<th class="border-bottom-0">BTC Amount</th>
														<th class="border-bottom-0">Total($)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>07/4/21</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-15 hd-15 pb-1" alt="">
															<span class=""> 0.45000000</span></td>
														<td>$4762.53</td>
													</tr>
													<tr>
														<td>08/4/21</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-15 hd-15 pb-1" alt=""> 0.04000000</td>
														<td>$423.34</td>
													</tr>
													<tr>
														<td>09/4/21</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-15 hd-15 pb-1" alt=""> 0.25100000</td>
														<td>$2656.51</td>
													</tr>
													<tr>
														<td>10583.8</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-15 hd-15 pb-1" alt=""> 0.35000000</td>
														<td>$3704.33</td>
													</tr>
													<tr>
														<td>10/4/21</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-15 hd-15 pb-1" alt=""> 0.30000000</td>
														<td>$3178.71</td>
													</tr>
													<tr>
														<td>11/4/21</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-15 hd-15 pb-1" alt=""> 0.02000000</td>
														<td>$211.99</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-xl-5">
								<div class="card custom-card bg-primary">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<h5 class="card-title tx-18"><label class="main-content-label tx-15 text-white">Account Status</label></h5>
												<div>
													<span id="accstatus">4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span>
												</div>
											</div>
											<div class="col-6 text-end">
												<h5 class="card-title tx-15 text-white">AVAILABLE BALANCE</h5>
												<h3 class="text-white tx-normal">$ 22,222</h3>
											</div>
										</div>
									</div>
									<div class="card-footer bd-white-3">
										<button class="btn btn-warning">Top Up</button>
										<button class="btn btn-success float-end">Withdraw</button>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body h-100">
										<div class="row">
											<div class="col-xl-7 col-lg-7 col-md-7 col-12">
												<h3 class="card-title mb-1 tx-15">CRYPTO NEWS</h3>
												<span class="mb-1 text-dark">Decreasing High Points</span>
												<p class="text-muted fs-13"><span> Crypto News is a useful application for crypto enthusiasts. Crypto News is a useful application for crypto.</span></p>
												<a href="javascript:;" class="btn btn-pill btn-outline-info">More Details </a>
											</div>
											<div class="col-xl-5 col-lg-5 col-md-5 col-12 my-auto mt-auto">
												<img alt="avatar" src="{{asset('build/assets/img/media/bitcoin.jpg')}}" class="wd-200 hd-200 rounded-10 mt-3 mt-md-0">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18 mb-0"><label class="main-content-label tx-15">TRANSACTION HISTORY</label></h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom mb-0" id="transactionhistory">
												<thead>
													<tr>
														<th>Crypto Trade</th>
														<th>Date</th>
														<th>Time</th>
														<th>Amount</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody class="">
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="w-5 h-5 me-3" alt="">Bitcoin
														</td>
														<td class="text-muted">01 MAR 2021</td>
														<td>05:12:16</td>
														<td class="text-success">+0,041 BTC</td>
														<td class="">
															<span class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Completed</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="w-5 h-5 me-3" alt="">Ethereum
														</td>
														<td class="text-muted">02 MAR 2021</td>
														<td>12:19:25</td>
														<td class="text-danger">-0.00215 ETH</td>
														<td class="">
															<span class="badge rounded-pill text-warning bg-warning-transparent py-1 px-2">Pending</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/xrp.svg')}}" class="w-5 h-5 me-3" alt="">Ripple
														</td>
														<td class="text-muted">03 MAR 2021</td>
														<td>10:23:42</td>
														<td class="text-danger">+12.856 XRP</td>
														<td class="">
															<span class="badge rounded-pill text-danger bg-danger-transparent py-1 px-2">Cancelled</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/dash.svg')}}" class="w-5 h-5 me-3" alt="">Dash
														</td>
														<td class="text-muted">04 MAR 2021</td>
														<td>02:01:15</td>
														<td class="text-success">+0,1535 DAH</td>
														<td class="">
															<span class="badge rounded-pill text-warning bg-warning-transparent py-1 px-2">Pending</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/bcn.svg')}}" class="w-5 h-5 me-3" alt="">Bcn
														</td>
														<td class="text-muted">05 MAR 2021</td>
														<td>07:16:25</td>
														<td class="text-info">11,85 Bcn</td>
														<td class="">
															<span class="badge rounded-pill text-info bg-info-transparent py-1 px-2">Exchanged</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/mcap.svg')}}" class="w-5 h-5 me-3" alt="">Monero
														</td>
														<td class="text-muted">06 MAR 2021</td>
														<td>01:34:17</td>
														<td class="text-danger">-0,0445 BTC</td>
														<td class="">
															<span class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Completed</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/neo.svg')}}" class="w-5 h-5 me-3" alt="">NEM
														</td>
														<td class="text-muted">07 MAR 2021</td>
														<td>08:45:32</td>
														<td class="text-success">+0,352 NEM</td>
														<td class="">
															<span class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Completed</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/act.svg')}}" class="w-5 h-5 me-3" alt="">ACT
														</td>
														<td class="text-muted">08 MAR 2021</td>
														<td>05:12:16</td>
														<td class="text-success">+0,041 ACT</td>
														<td class="">
															<span class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Completed</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/arn.svg')}}" class="w-5 h-5 me-3" alt="">ARN
														</td>
														<td class="text-muted">09 MAR 2021</td>
														<td>12:19:25</td>
														<td class="text-danger">-0.00215 ARN</td>
														<td class="">
															<span class="badge rounded-pill text-warning bg-warning-transparent py-1 px-2">Pending</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/bpt.svg')}}" class="w-5 h-5 me-3" alt="">BPT
														</td>
														<td class="text-muted">10 MAR 2021</td>
														<td>10:23:42</td>
														<td class="text-danger">+12.856 BPT</td>
														<td class="">
															<span class="badge rounded-pill text-danger bg-danger-transparent py-1 px-2">Cancelled</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/ethos.svg')}}" class="w-5 h-5 me-3" alt="">ETHOS
														</td>
														<td class="text-muted">11 MAR 2021</td>
														<td>02:01:15</td>
														<td class="text-success">+0,1535 ETHOS</td>
														<td class="">
															<span class="badge rounded-pill text-warning bg-warning-transparent py-1 px-2">Pending</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/eur.svg')}}" class="w-5 h-5 me-3" alt="">EUR
														</td>
														<td class="text-muted">12 MAR 2021</td>
														<td>07:16:25</td>
														<td class="text-info">11,85 EUR</td>
														<td class="">
															<span class="badge rounded-pill text-info bg-info-transparent py-1 px-2">Exchanged</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/grc.svg')}}" class="w-5 h-5 me-3" alt="">GRC
														</td>
														<td class="text-muted">13 MAR 2021</td>
														<td>01:34:17</td>
														<td class="text-danger">-0,0445 GRC</td>
														<td class="">
															<span class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Completed</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/iop.svg')}}" class="w-5 h-5 me-3" alt="">IOP
														</td>
														<td class="text-muted">14 MAR 2021</td>
														<td>08:45:32</td>
														<td class="text-success">+0,352 IOP</td>
														<td class="">
															<span class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Completed</span>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{asset('build/assets/img/svgs/crypto-currencies/nmc.svg')}}" class="w-5 h-5 me-3" alt="">NMC
														</td>
														<td class="text-muted">15 MAR 2021</td>
														<td>10:23:42</td>
														<td class="text-danger">+12.856 NMC</td>
														<td class="">
															<span class="badge rounded-pill text-danger bg-danger-transparent py-1 px-2">Cancelled</span>
														</td>
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

        <!-- INTERNAL APEXCHART JS -->
		@vite('resources/assets/js/apexcharts.js')


        <!-- SPARKLINE JS -->
        <script src="{{asset('build/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
		@vite('resources/assets/js/chart.sparkline.js')


        <!-- INTERNAL DASHBOARD JS -->
		@vite('resources/assets/js/crypto-dashboard.js')


        <!-- INTERNAL DATA TABLES JS -->
        <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

@endsection
