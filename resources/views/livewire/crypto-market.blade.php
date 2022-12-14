@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Market Capital</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Market Capital</li>
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
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">CRYPTO MARKETING VALUES</label></h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap text-md-nowrap table-hover mg-b-0" id="marketingvalues">
												<thead class="">
													<tr>
														<th class="bg-transparent">Coin</th>
														<th class="bg-transparent">Last Price</th>
														<th class="bg-transparent">Market Cap</th>
														<th class="bg-transparent">Change(24h)</th>
														<th class="bg-transparent">Graph</th>
														<th class="bg-transparent"></th>
													</tr>
												</thead>
												<tbody>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-30 ht-30 me-3" alt="">Bitcoin (BTC)</td>
														<td>$ 10512.00</td>
														<td>$ 50,191,183,730</td>
														<td><span class="btn btn-success btn-sm py-0 px-1">+3.50%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>10,4,4,7,5,9,10,1,4,7,2,10,4,6</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-30 ht-30 me-3" alt="">Ethereum (ETH)</td>
														<td>$ 425.29</td>
														<td>$ 5,48,308,110</td>
														<td><span class="btn btn-success btn-sm py-0 px-1">+1.54%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>6,10,2,6,9,4,1,5,2,7,10,8,3,9</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/xrp.svg')}}" class="wd-30 ht-30 me-3" alt="">Ripple (XRP)</td>
														<td>$ 1.2028</td>
														<td>$ 6,63,80,043</td>
														<td><span class="btn btn-success btn-sm py-0 px-1">+0.62%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>3,7,9,2,10,9,3,1,4,5,8,3,10,3</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/mth.svg')}}" class="wd-30 ht-30 me-3" alt="">Mth (MTH)</td>
														<td>$ 1547.68</td>
														<td>$ 7,14,18,730</td>
														<td><span class="btn btn-danger btn-sm py-0 px-1">-1.31%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>6,10,2,6,9,4,1,5,2,7,5,10,5,2</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/neo.svg')}}" class="wd-30 ht-30 me-3" alt="">Neo (NEO)</td>
														<td>$ 723.46</td>
														<td>$ 18,07,67,295</td>
														<td><span class="btn btn-danger btn-sm py-0 px-1">-2.12%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/xmr.svg')}}" class="wd-30 ht-30 me-3" alt="">Monero (XMR)</td>
														<td>$ 303.16</td>
														<td>$ 4,778,157,522</td>
														<td><span class="btn btn-success btn-sm py-0 px-1">+3.23%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>9,3,3,6,4,8,9,10,3,3,6,4,8,9</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/eos.svg')}}" class="wd-30 ht-30 me-3" alt="">EOS (EOS)</td>
														<td>$ 148.18</td>
														<td>$ 8,44,49,078</td>
														<td><span class="btn btn-danger btn-sm py-0 px-1">-1.25%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>3,5,6,8,3,8,2,1,7,2,2,8,1,4</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/mcap.svg')}}" class="wd-30 ht-30 me-3" alt="">Mcap (MCAP)</td>
														<td>$ 1.467813</td>
														<td>$ 9,358,735,080</td>
														<td><span class="btn btn-success btn-sm py-0 px-1">+3.67%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>5,2,5,7,5,6,10,7,1,8,3,8,2,10</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/bcn.svg')}}" class="wd-30 ht-30 me-3" alt="">Bcn (BCN)</td>
														<td>$ 3.34</td>
														<td>$ 7,504,100,862</td>
														<td><span class="btn btn-danger btn-sm py-0 px-1">-1.87%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>2,6,5,3,5,2,10,5,8,9,2,1,7,8</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
													</tr>
													<tr class="">
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/dat.svg')}}" class="wd-30 ht-30 me-3" alt="">Dat (DAT)</td>
														<td>$ 647.222</td>
														<td>$ 4,881,413,815</td>
														<td><span class="btn btn-success btn-sm py-0 px-1">+0.73%</span></td>
														<td><span class="peity-line" data-peity='{ "fill": false, "stroke": "#4d65d9", "height": 50, "width": 200 }'>4,8,4,6,5,2,6,10,4,8,2,5,3,2</span></td>
														<td><a href="javascript:;" class="btn btn-primary btn-sm">Trade</a></td>
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

		<!-- INTERNAL DASHBOARD JS -->
		@vite('resources/assets/js/crypto-market.js')


		<!-- INTERNAL PEITY CHARTS JS -->
		<script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('resources/assets/js/chart.peity.js')

		
		<!-- INTERNAL DATA TABLES JS -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

@endsection
