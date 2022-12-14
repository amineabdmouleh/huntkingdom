@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Ecommerce Dashboard</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Ecommerce</a></li>
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
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-1 pt-1">Total Profit</label>
											<div class="row">
												<div class="col-8">
													<h4 class="text-start mb-0 mt-1"><span class="tx-normal float-start">$50,470</span></h4>
												</div>
												<div class="col-4 text-end">
													<i class="icon-size mdi mdi-poll-box text-primary bg-primary-transparent"></i>
												</div>
											</div>
											<p class="mb-0 mt-3 text-muted">Monthly Profit<span class="float-end">$5,000</span></p>
										</div>
										<div class="progress ht-5 mt-1 ">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-xs ht-5 wd-60p bg-primary" role="progressbar">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-1 pt-1">Total tax</label>
											<div class="row">
												<div class="col-8">
													<h4 class="text-start mb-0 mt-1"><span class="tx-normal float-start">$43,650</span></h4>
												</div>
												<div class="col-4 text-end">
													<i class="mdi mdi-cube icon-size text-success bg-success-transparent"></i>
												</div>
											</div>
											<p class="mb-0 mt-3 text-muted">Monthly Income<span class="float-end">$10,000</span></p>
										</div>
										<div class="progress ht-5 mt-1 ">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-xs ht-5 wd-70p bg-success" role="progressbar">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-1 pt-1">New Users</label>
											<div class="row">
												<div class="col-8">
													<h4 class="text-start mb-0 mt-1"><span class="tx-normal float-start">4,560</span></h4>
												</div>
												<div class="col-4 text-end">
													<i class="mdi mdi-account-multiple icon-size  text-warning bg-warning-transparent"></i>
												</div>
											</div>
											<p class="mb-0 mt-3 text-muted">Monthly users<span class="float-end">60%</span></p>
										</div>
										<div class="progress ht-5 mt-1 ">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-xs ht-5 wd-50p bg-warning" role="progressbar">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-1 pt-1">Total Sales</label>
											<div class="row">
												<div class="col-8">
													<h4 class="text-start mb-0 mt-1"><span class="tx-normal float-start">60,790</span></h4>
												</div>
												<div class="col-4 text-end">
													<i class="mdi mdi-cart icon-size text-info bg-info-transparent"></i>
												</div>
											</div>
											<p class="mb-0 mt-3 text-muted">Monthly Sales<span class="float-end">7,843</span></p>
										</div>
										<div class="progress ht-5 mt-1 ">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-xs ht-5 wd-50p bg-info" role="progressbar">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xxl-9 col-xl-9 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">REVENUE OVERVIEW</label></h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<div id="revenuechart" class=""></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-3 col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">ORDERS STATISTICS</label></h3>
										</div>
									<div class="card-body sales-product-info ot-0 pt-0 pb-0">
										<div id="recentorders" class="ht-150"></div>
										<div class="row sales-product-infomation pb-0 mb-0 mx-auto wd-100p mt-3">
											<div class="col-md-6 col justify-content-center text-center">
												<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Delivered</p>
												<h3 class="mb-4 font-weight-normal">5238</h3>
											</div>
											<div class="col-md-6 col text-center float-end">
												<p class="mb-0 d-flex justify-content-center "><span class="legend bg-light brround"></span>Cancelled</p>
												<h3 class="mb-4 font-weight-normal">3467</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xxl-4 col-xl-4 col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">TOP PRODUCTS</label></h3>
									</div>
									<div class="card-body pt-0">
										<ul class="top-selling-products pb-0 mb-0 ps-0">
											<li class="product-item">
												<div class="product-img"><img src="{{asset('build/assets/img/pngs/18.png')}}" alt=""></div>
												<div class="product-info">
													<div class="product-name">Sofa Chair</div>
													<div class="price">Furniture</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$42.00</div>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fas fa-star-half-alt text-warning"></i>
													</span>
													<div class="items-sold">50 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="{{asset('build/assets/img/pngs/17.png')}}" alt=""></div>
												<div class="product-info">
													<div class="product-name">Watch</div>
													<div class="price">Fashion</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$57.00</div>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="far fa-star text-warning"></i>
													</span>
													<div class="items-sold">40 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="{{asset('build/assets/img/pngs/14.png')}}" alt=""></div>
												<div class="product-info">
													<div class="product-name">Footwear</div>
													<div class="price">Fashion</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$36.00</div>
														<span class="rated-products-ratings">
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fas fa-star-half-alt text-warning"></i>
														</span>
													<div class="items-sold">20 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="{{asset('build/assets/img/pngs/16.png')}}" alt=""></div>
												<div class="product-info">
													<div class="product-name">Tshirt</div>
													<div class="price">Fashion</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$99.00</div>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="far fa-star text-warning"></i>
													</span>
													<div class="items-sold">100 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="{{asset('build/assets/img/pngs/19.png')}}" alt=""></div>
												<div class="product-info">
													<div class="product-name">Girls Frock</div>
													<div class="price">Fashion</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$59.00</div>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="far fa-star text-warning"></i>
													</span>
													<div class="items-sold">60 Sold</div>
												</div>
											</li>
											<li class="product-item pb-0">
												<div class="product-img"><img src="{{asset('build/assets/img/pngs/15.png')}}" alt=""></div>
												<div class="product-info">
													<div class="product-name">Backpack</div>
													<div class="price">Accesories</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$75.00</div>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="far fa-star text-warning"></i>
													</span>
													<div class="items-sold">80 Sold</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-8">
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom d-flex">
										<div>
											<h3 class="card-title tx-18"><label class="main-content-label tx-15">RECENT ORDERS</label></h3>
										</div>
									</div>
									<div class="card-body pt-3">
										<div class="table-responsive">
											<table class="table table-vcenter border mb-0 text-nowrap table-striped ecommerce-orders">
												<thead>
													<tr>
														<th>Product ID</th>
														<th>Product</th>
														<th>Product Cost</th>
														<th>Total</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#PD001</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/16.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Mens Tshirt</span></td>
														<td>$13,200</td>
														<td>4,922</td>
														<td><span class="badge bg-primary rounded-10 px-2">Avilable</span></td>
													</tr>
													<tr>
														<td>#PD002</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/17.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Smart Wrist Watch</span></td>
														<td>$15,100</td>
														<td>1,234</td>
														<td><span class="badge bg-warning rounded-10 px-2">Limited</span></td>
													</tr>
													<tr>
														<td>#PD003</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/14.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Womens Sandals</span></td>
														<td>$14,500</td>
														<td>2,977</td>
														<td><span class="badge bg-primary rounded-10 px-2">Available</span></td>
													</tr>
													<tr>
														<td>#PD004</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/15.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Backpack</span></td>
														<td>$30,000</td>
														<td>678</td>
														<td><span class="badge bg-warning rounded-10 px-2">Limited</span></td>
													</tr>
													<tr>
														<td>#PD005</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/18.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Sofa Chair</span></td>
														<td>$5,987</td>
														<td>4,789</td>
														<td><span class="badge bg-danger rounded-10 px-2 op-6">No Stock</span></td>
													</tr>
													<tr>
														<td>#PD006</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/19.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Girls Mini Frock</span></td>
														<td>$11,987</td>
														<td>938</td>
														<td><span class="badge bg-warning rounded-10 px-2">Limited</span></td>
													</tr>
													<tr>
														<td>#PD007</td>
														<td class="d-flex my-auto"><img src="{{asset('build/assets/img/pngs/15.png')}}" alt="" class="ht-40 wd-40 me-3"><span class="my-auto">Backpack</span></td>
														<td>$30,000</td>
														<td>678</td>
														<td><span class="badge bg-primary rounded-10 px-2">Available</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-xl-4 col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">SALES ACTIVITY</label></h3>
									</div>
									<div class="product-timeline card-body">
										<ul class="timeline-1 mb-0">
											<li class="mt-0">
												<svg class="bg-secondary-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M14.5,2L14.5,2C14.2,2,14,2.2,14,2.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v0C22,5.4,18.6,2,14.5,2z M15,9V3c3.2,0.2,5.7,2.8,6,6H15z M19.5,12.5h-8v-8C11.5,4.2,11.3,4,11,4c-5,0-9,4-9,9s4,9,9,9c5,0,9-4,9-9v0C20,12.7,19.8,12.5,19.5,12.5z M11.5,21c-4.4,0.3-8.2-3.1-8.5-7.5C2.7,9.1,6.1,5.3,10.5,5v8c0,0.3,0.2,0.5,0.5,0.5h8C18.7,17.5,15.5,20.7,11.5,21z"/></svg>
												<span class="mb-4 tx-14 ms-3 tx-semibold">Total Products</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">2 days ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">1.2k New Products</p>
											</li>
											<li class="mt-0">
												<svg class="bg-danger-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M21.5,17h-15C5.6715698,17,5,16.3284302,5,15.5S5.6715698,14,6.5,14h10.9638672c1.2661133,0.0041504,2.3724365-0.8544312,2.6826172-2.0819702l1.8378906-7.2959595c0.0680542-0.2669678-0.0932617-0.5385742-0.3602905-0.6066284C21.5834961,4.005127,21.5418091,3.999939,21.5,4H6.3908691L6.3642578,3.8935547C6.0869751,2.7798462,5.0861816,1.9986572,3.9384766,2H2.5C2.223877,2,2,2.223877,2,2.5S2.223877,3,2.5,3h1.4384766C4.6269531,2.9990234,5.227356,3.4676514,5.3935547,4.1357422L7.609375,13H6.5C5.1192627,13,4,14.1192627,4,15.5S5.1192627,18,6.5,18h1.0124512C7.1818848,18.4303589,7.0018311,18.9573364,7,19.5C7,20.8807373,8.1192627,22,9.5,22s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5h4.0249023C15.1818848,18.4303589,15.0018311,18.9573364,15,19.5c0,1.3807373,1.1192627,2.5,2.5,2.5s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z M6.6416016,5h14.2167969l-1.6816406,6.6738281C18.9780884,12.4567871,18.2716675,13.0037842,17.4638672,13H8.65625L6.6416016,5z M9.5,21C8.6715698,21,8,20.3284302,8,19.5S8.6715698,18,9.5,18s1.5,0.6715698,1.5,1.5C10.9990845,20.328064,10.328064,20.9990845,9.5,21z M17.5,21c-0.8284302,0-1.5-0.6715698-1.5-1.5s0.6715698-1.5,1.5-1.5s1.5,0.6715698,1.5,1.5C18.9990845,20.328064,18.328064,20.9990845,17.5,21z"/></svg>
												<span class="mb-4 tx-14 ms-3 tx-semibold">Total Sales</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">25 mins ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">1.1k New Sales</p>
											</li>
											<li class="mt-0">
												<svg class="bg-success-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M9.5,2C9.223877,2,9,2.223877,9,2.5v19c0,0.0001831,0,0.0003662,0,0.0005493C9.0001831,21.7765503,9.223999,22.0001831,9.5,22c0.0001831,0,0.0003662,0,0.0006104,0C9.7765503,21.9998169,10.0001831,21.776001,10,21.5v-19C10,2.223877,9.776123,2,9.5,2z M4.5,12C4.223877,12,4,12.223877,4,12.5v9c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,21.7765503,4.223999,22.0001831,4.5,22c0.0001831,0,0.0003662,0,0.0006104,0C4.7765503,21.9998169,5.0001831,21.776001,5,21.5v-9C5,12.223877,4.776123,12,4.5,12z M19.5,16c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C19.0001831,21.7765503,19.223999,22.0001831,19.5,22c0.0001831,0,0.0003662,0,0.0006104,0C19.7765503,21.9998169,20.0001831,21.776001,20,21.5v-5C20,16.223877,19.776123,16,19.5,16z M14.5,8C14.223877,8,14,8.223877,14,8.5v13c0,0.0001831,0,0.0003662,0,0.0005493C14.0001831,21.7765503,14.223999,22.0001831,14.5,22c0.0001831,0,0.0003662,0,0.0006104,0C14.7765503,21.9998169,15.0001831,21.776001,15,21.5v-13C15,8.223877,14.776123,8,14.5,8z"/></svg>
												<span class="mb-4 tx-14 ms-3 tx-semibold">Total Revenue</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">40 mins ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">22.5K New Revenue</p>
											</li>
											<li class="mt-0">
												<svg class="bg-warning-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"/></svg>
												<span class="mb-4 tx-14 ms-3 tx-semibold">Total Profit</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">1 hour ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">4k New Profit</p>
											</li>
											<li class="mt-0">
												<svg class="bg-purple-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z"/></svg>
												<span class="mb-4 tx-14 ms-3 tx-semibold">Customer Visits</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">1 day ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">16% Increased</p>
											</li>
											<li class="mt-0 mb-0">
												<svg class="bg-primary-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M21.8534546,7.1464844l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-14,14C2.0526733,16.2402344,2,16.3673706,2,16.5v5.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l14-14c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221C22.0487671,7.6581421,22.0487061,7.3416138,21.8534546,7.1464844z M7.2930298,21H3v-4.2930298l10.671814-10.671814l4.2926025,4.293457L7.2930298,21z M18.6714478,9.621582l-4.2926636-4.293396L16.5,3.2069702L20.7930298,7.5L18.6714478,9.621582z"/></svg>
												<span class="mb-4 tx-14 ms-3 tx-semibold">Customer Reviews</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">1 day ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">1.4k Reviews</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xxl-8 col-xl-8 col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">COUNTRY WISE SALES</label></h3>
									</div>
									<div class="card-body row">
										<div class="col-xl-8">
											<div id="world-map-markers" class="ht-350"></div>
										</div>
										<div class="col-xl-4 col-md-12 mt-xl-4">
											<div class="mb-4 pt-2">
												<h5 class="mb-2 d-block tx-normal">
													<span class="fs-14 tx-semibold">Brazil</span>
													<span class="float-end fs-14">80%</span>
												</h5>
												<div class="progress ht-4 progress-md h-2">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-primary ht-4 wd-80p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block tx-normal">
													<span class="fs-14 tx-semibold">Russia</span>
													<span class="float-end fs-14">72%</span>
												</h5>
												<div class="progress ht-4 progress-md">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-secondary ht-4 wd-70p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block tx-normal">
													<span class="fs-14 tx-semibold">Poland</span>
													<span class="float-end fs-14">67%</span>
												</h5>
												<div class="progress progress-md  ht-4">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-warning ht-4 wd-60p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block tx-normal">
													<span class="fs-14 tx-semibold">Canada</span>
													<span class="float-end fs-14">53%</span>
												</h5>
												<div class="progress progress-md  ht-4">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-success ht-4 wd-50p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block tx-normal">
													<span class="fs-14 tx-semibold">India</span>
													<span class="float-end fs-14">75%</span>
												</h5>
												<div class="progress progress-md  ht-4">
													<div class="progress-bar progress-bar-animated  progress-bar-striped bg-info ht-4 wd-40p"></div>
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

        <!-- PEITY JS -->
        <script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- INTERNAL APEXCHART JS -->
		@vite('resources/assets/js/apexcharts.js')

		
        <!-- INTERNAL DASHBOARD JS -->
		@vite('resources/assets/js/ecommerce-dashboard.js')

		
        <!-- INTERNAL JVECTORMAP JS -->
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/gdp-data.js')}}"></script>
@endsection
