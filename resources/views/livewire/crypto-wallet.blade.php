@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Wallet</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Wallet</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
										<i class="fe fe-settings me-2"></i> Settings
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
										<i class="fe fe-download-cloud me-2 bg-white-transparent text-white"></i> Reports
									</button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">BTC WALLET</label></h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-40 ht-40 me-3 my-auto" alt="">
											<div class="">
												<span class="text-uppercase tx-12 mt-4 text-muted">Available BTC</span>
												<div class="d-flex my-auto">
													<h6 class="mt-1 mb-0 tx-semibold">0.0543139</h6>
													<span class="mt-auto ms-2">BTC</span>
												</div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-6">
												<button class="btn btn-block btn-outline-primary">Deposit</button>
											</div>
											<div class="col-6">
												<button class="btn btn-block btn-success">Withdraw</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">ETH WALLET</label></h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-40 ht-40 me-3 my-auto" alt="">
											<div class="">
												<span class="text-uppercase tx-12 mt-4 text-muted">Available ETH</span>
												<div class="d-flex my-auto">
													<h6 class="mt-1 mb-0 tx-semibold">0.0654328</h6>
													<span class="mt-auto ms-2">ETH</span>
												</div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-6">
												<button class="btn btn-block btn-outline-primary">Deposit</button>
											</div>
											<div class="col-6">
												<button class="btn btn-block btn-success">Withdraw</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">XRP WALLET</label></h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<img src="{{asset('build/assets/img/svgs/crypto-currencies/xrp.svg')}}" class="wd-40 ht-40 me-3 my-auto" alt="">
											<div class="">
												<span class="text-uppercase tx-12 mt-4 text-muted">Available XRP</span>
												<div class="d-flex my-auto">
													<h6 class="mt-1 mb-0 tx-semibold">0.178436</h6>
													<span class="mt-auto ms-2">XRP</span>
												</div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-6">
												<button class="btn btn-block btn-outline-primary">Deposit</button>
											</div>
											<div class="col-6">
												<button class="btn btn-block btn-success">Withdraw</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">BCN WALLET</label></h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<img src="{{asset('build/assets/img/svgs/crypto-currencies/bcn.svg')}}" class="wd-40 ht-40 me-3 my-auto" alt="">
											<div class="">
												<span class="text-uppercase tx-12 mt-4 text-muted">Available BCN</span>
												<div class="d-flex my-auto">
													<h6 class="mt-1 mb-0 tx-semibold">0.0764329</h6>
													<span class="mt-auto ms-2">BCN</span>
												</div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-6">
												<button class="btn btn-block btn-outline-primary">Deposit</button>
											</div>
											<div class="col-6">
												<button class="btn btn-block btn-success">Withdraw</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<h3 class="card-title tx-18">
											<label class="main-content-label tx-15">BTC WALLET ADDRESS</label>
										</h3>
										<div class="row mt-3 crypto-wallet">
											<div class="col-md-9 mt-1">
												<h6 class="tx-semibold">Wallet Address </h6>
												<div class="input-group">
													<input type="text" class="form-control input-lg" id="wallet-address" value="afb0dc8bc84625587b85415c86ef43ed8df">
													<div class="input-group-prepend">
														<button class="btn btn-primary clipboard-icon clipboard-box" data-clipboard-target="#wallet-address">COPY</button>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<img src="{{asset('build/assets/img/pngs/qrcode.png')}}" alt="qrcode" class="ht-100 float-md-end mt-3 mt-md-0 border rounded-10 p-2">
											</div>
										</div>
									</div>
									<div class="row row-sm px-4">
										<div class="col-lg-12 col-xl-4">
											<div class="card border custom-card">
												<div class="card-body">
													<div class="d-flex">
														<span class="crypto-icon bg-success-transparent me-3 my-auto"><i class="fe fe-arrow-down-left text-success"></i></span>
														<div class="">
															<p class="text-uppercase tx-13 text-muted mb-1">Received</p>
															<h5 class="tx-semibold">6,873.2751 <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-4">
											<div class="card border custom-card">
												<div class="card-body">
													<div class="d-flex">
														<span class="crypto-icon bg-danger-transparent me-3 my-auto">
															<i class="fe fe-arrow-up-right text-danger"></i>
														</span>
														<div class="">
															<p class="text-uppercase tx-13 text-muted mb-1">Sent</p>
															<h5 class="tx-semibold">2,583.7382 <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-4">
											<div class="card border custom-card">
												<div class="card-body">
													<div class="d-flex">
														<span class="crypto-icon bg-primary-transparent me-3 my-auto"><i class="fas fa-wallet text-primary"></i></span>
														<div class="">
															<p class="text-uppercase tx-13 text-muted mb-1">Balance</p>
															<h5 class="tx-semibold">4.17845232 <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-lg-12 col-xl-12">
								<div class="card custom-card transcation-crypto">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">TRANSACTION HISTORY</label></h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom" id="transaction_history">
												<thead>
													<tr>
														<th></th>
														<th>TRANSACTION ID</th>
														<th>Date</th>
														<th>From</th>
														<th>To</th>
														<th>Coin</th>
														<th>Amount</th>
														<th>Status</th>
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
														<td class="text-muted">03/12/2021</td>
														<td>Olive Yew</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/2.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Peg Legge</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-30 hd-30 me-2" alt="">Bitcoin</td>
														<td class="text-success">+0.041</td>
														<td><span class="text-success bg-success-transparent py-1 px-2 font-weight-semibold tx-10 rounded-10">COMPLETED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1002</td>
														<td class="text-muted">05/12/2021</td>
														<td>Addie Minstra</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/3.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Art Decco</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-30 hd-30 me-2" alt="">Ethereum</td>
														<td class="text-danger">-0.344</td>
														<td><span class="text-danger bg-danger-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1003</td>
														<td class="text-muted">14/12/2021</td>
														<td>Stan Dupp</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/4.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Neil Down</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/xrp.svg')}}" class="wd-30 hd-30 me-2" alt="">Ripple</td>
														<td class="text-warning">-0.345</td>
														<td><span class="text-warning bg-warning-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">PENDING</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1004</td>
														<td class="text-muted">16/12/2021</td>
														<td>Penny Black</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/5.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Anna Domino</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/dash.svg')}}" class="wd-30 hd-30 me-2" alt="">Dash</td>
														<td class="text-success">+0.132</td>
														<td><span class="text-success bg-success-transparent py-1 px-2 font-weight-semibold tx-10 rounded-10">COMPLETED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1005</td>
														<td class="text-muted">18/12/2021</td>
														<td>Phil Harmonic </td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/6.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Paul Misunday</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/gto.svg')}}" class="wd-30 hd-30 me-2" alt="">Gifto</td>
														<td class="text-danger">-0.523</td>
														<td><span class="text-danger bg-danger-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1006</td>
														<td class="text-muted">20/12/2021</td>
														<td>Arty Ficial</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/7.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Marsha Mello</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/xmr.svg')}}" class="wd-30 hd-30 me-2" alt="">Monero</td>
														<td class="text-warning">-0.232</td>
														<td><span class="text-warning bg-warning-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">PENDING</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1007</td>
														<td class="text-muted">22/12/2021</td>
														<td>Donatella Nobatti</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/8.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Peg Legge</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/steem.svg')}}" class="wd-30 hd-30 me-2" alt="">Steem</td>
														<td class="text-success">+0.456</td>
														<td><span class="text-success bg-success-transparent py-1 px-2 font-weight-semibold tx-10 rounded-10">COMPLETED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1008</td>
														<td class="text-muted">25/12/2021</td>
														<td>Juan Annatoo</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/9.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Jack Dup</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/miota.svg')}}" class="wd-30 hd-30 me-2" alt="">Iota</td>
														<td class="text-success">+0.232</td>
														<td><span class="text-success bg-success-transparent py-1 px-2 font-weight-semibold tx-10 rounded-10">COMPLETED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1009</td>
														<td class="text-muted">25/12/2021</td>
														<td>Stew Gots</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/10.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Sara Bellum</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/waves.svg')}}" class="wd-30 hd-30 me-2" alt="">Waves</td>
														<td class="text-warning">-0.232</td>
														<td><span class="text-warning bg-warning-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">PENDING</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1010</td>
														<td class="text-muted">28/12/2021</td>
														<td>Anna Rexia</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/11.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Marge Arita</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/neo.svg')}}" class="wd-30 hd-30 me-2" alt="">Neo</td>
														<td class="text-danger">-0.344</td>
														<td><span class="text-danger bg-danger-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1011</td>
														<td class="text-muted">29/12/2021</td>
														<td>Matt Innae</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/12.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Barry Cuda</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/eos.svg')}}" class="wd-30 hd-30 me-2" alt="">Eos</td>
														<td class="text-danger">-0.231</td>
														<td><span class="text-danger bg-danger-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1012</td>
														<td class="text-muted">30/12/2021</td>
														<td>Gabe Lackmen</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/1.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Marion Gaze</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/eur.svg')}}" class="wd-30 hd-30 me-2" alt="">Euros</td>
														<td class="text-success">+0.124</td>
														<td><span class="text-success bg-success-transparent py-1 px-2 font-weight-semibold tx-10 rounded-10">COMPLETED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1013</td>
														<td class="text-muted">31/12/2021</td>
														<td>Jim Nasium</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/2.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Marcus Down</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-30 hd-30 me-2" alt="">Bitcoin</td>
														<td class="text-warning">-0.241</td>
														<td><span class="text-warning bg-warning-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">PENDING</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-success-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-up-right text-success"></i>
															</span>
														</td>
														<td>#1014</td>
														<td class="text-muted">02/01/2021</td>
														<td>Ella Vator</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/3.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Gene Jacket</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-30 hd-30 me-2" alt="">Ethereum</td>
														<td class="text-success">+0.134</td>
														<td><span class="text-success bg-success-transparent py-1 px-2 font-weight-semibold tx-10 rounded-10">COMPLETED</span></td>
													</tr>
													<tr>
														<td>
															<span class="crypto-icon bg-danger-transparent me-3 my-auto rounded-6">
																<i class="fe fe-arrow-down-left text-danger"></i>
															</span>
														</td>
														<td>#1015</td>
														<td class="text-muted">04/01/2021</td>
														<td>Bart Ender</td>
														<td>
															<div class="d-flex my-auto mx-auto">
																<img src="{{asset('build/assets/img/users/4.jpg')}}" class="avatar avatar-sm me-2" alt="">
																<span class="my-auto">Marty Graw</span>
															</div>
														</td>
														<td><img src="{{asset('build/assets/img/svgs/crypto-currencies/xrp.svg')}}" class="wd-30 hd-30 me-2" alt="">Ripple</td>
														<td class="text-warning">-0.244</td>
														<td><span class="text-warning bg-warning-transparent py-1 px-2 tx-10 rounded-10 font-weight-semibold">PENDING</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Row End -->
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL DATA TABLE JS -->
        <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

        <!-- INTERNAL CRYPTO-TRANSACTION JS -->
		@vite('resources/assets/js/crypto-transaction.js')

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>

@endsection
