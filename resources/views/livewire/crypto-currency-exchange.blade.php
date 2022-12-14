@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Currency Exchange</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Currency Exchange</li>
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
						<div class="row">
							<div class="col-md-12">
								<div class="pt-0 card custom-card overflow-hidden">
									<div class="header-text mb-0">
										<div class="container-fluid p-5">
											<div class="text-start background-text">
												<h3 class="mb-2 tx-medium text-center">Buy and Sell Coins without additional fees</h3>
												<p class="tx-18 mb-4 text-center">Buy now and get +50% extra bonus Minimum pre-sale
												amount 100 Crypto Coin. We accept BTC crypto-currency..</p>
											</div>
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
													<div class="item-search-tabs mb-6 background-text">
														<div class="buy-sell">
															<div class="form row mx-auto justify-content-center d-flex p-4">
																<div class="form-group col-xl-3 col-lg-6 col-md-12 mb-0">
																	<input type="text" class="form-control mb-4 mb-lg-0" id="text7" placeholder="13.2458">
																</div>
																<div class="form-group col-xl-2 col-lg-6 col-md-12 mb-0">
																	<select name="country" id="select-Categories14" class="form-control select2  custom-select br-md-0">
																		<option value="1" selected>BTC</option>
																		<option value="2">Ethereum</option>
																		<option value="3">Ripple</option>
																		<option value="4">Bitcoin Cash</option>
																		<option value="5">Cardano</option>
																		<option value="6">Litecoin</option>
																		<option value="7">NEO</option>
																		<option value="8">Stellar</option>
																		<option value="9">EOS</option>
																		<option value="10">NEM</option>
																	</select>
																</div>
																<div class="col-xl-1 col-lg-12 col-md-12 text-center">
																	<p class="mb-0 tx-30 text-muted">=</p>
																</div>
																<div class="form-group  col-xl-3 col-lg-6 col-md-12 mb-0">
																	<input type="text" class="form-control mb-4 mb-lg-0" id="text6" placeholder="02.24">
																</div>
																<div class="form-group col-xl-2 col-lg-6 col-md-12 mb-0">
																	<select name="country" id="select-Categories13" class="form-control select2 custom-select br-md-0">
																		<option value="1" selected>USD</option>
																		<option value="2">EURO</option>
																		<option value="3">POUND</option>
																		<option value="4">Rupee</option>
																		<option value="5">WON</option>
																		<option value="6">DINAR</option>
																		<option value="7">RIAL</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="text-center background-text">
														<a href="javascript:;" class="btn btn-secondary ps-6 pe-6 pt-2 pb-2 mx-auto rounded-6 mt-4">EXCHANGE NOW</a>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /header-text -->
								</div>
							</div>
							<div class="col-md-12">
								<div class="row row-sm">
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-btc text-warning tx-22 pb-2"></i>
														</span>Bitcoin BTC
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000434<span class="text-info tx-14 mt-auto ms-2">$0.04</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +4.16%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="bitcoin-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-eth text-purple tx-22 pb-2"></i>
														</span> Ethereum ETH
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000235<span class="text-info tx-14 mt-auto ms-2">$0.12</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +2.12%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="ethereum-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-xrp text-info tx-22 pb-2"></i>
														</span> Ripple  XRP
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000434<span class="text-info tx-14 mt-auto ms-2">$0.03</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +3.12%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="ripple-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-dash text-secondary tx-22 pb-2"></i>
														</span>Dash  DASH
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000372<span class="text-info tx-14 mt-auto ms-2">$0.12</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +4.23%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="dash-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-xmr text-success tx-22 pb-2"></i>
														</span> Neo NEO
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000257<span class="text-info tx-14 mt-auto ms-2">$0.07</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +2.17%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="neo-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-ltc text-muted tx-22 pb-2"></i>
														</span> Litecoin LTC
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000534<span class="text-info tx-14 mt-auto ms-2">$0.32</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +2.12%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="litecoin-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-rise text-danger tx-22 pb-2"></i>
														</span> Rise RISE
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000437<span class="text-info tx-14 mt-auto ms-2">$0.58</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +5.91%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="rise-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h6 class="d-flex mb-0 tx-semibold">
														<span class="cryp-icon me-2">
															<i class="cf cf-bts tx-teal tx-22 pb-2"></i>
														</span> Bts BTS
													</h6>
													<span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h6 class="d-flex my-auto font-weight-normal">0.00000125<span class="text-info tx-14 mt-auto ms-2">$0.23</span> </h6>
													<div class="text-danger tx-12"><i class="me-1 text-success"></i> +4.19%</div>
												</div>
												<div class="chart-wrapper mt-2">
													<canvas id="bts-chart"></canvas>
												</div>
											</div>
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

        <!-- INTERNAL DASHBOARD JS -->
		@vite('resources/assets/js/crypto-exchange.js')


		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


@endsection
