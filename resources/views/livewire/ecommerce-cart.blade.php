@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Cart</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cart</li>
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
							<div class="col-lg-12 col-xl-9 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<h3 class="card-title tx-18"><label class="main-content-label tx-15">SHOPPING CART</label></h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap table-shopping-cart mb-0">
												<thead class="text-muted">
													<tr class="small text-uppercase">
														<th scope="col">Product</th>
														<th scope="col">Status</th>
														<th scope="col" class="wd-100">Quantity</th>
														<th scope="col" class="wd-120">Price</th>
														<th scope="col" class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<a href="{{url('ecommerce-productdetails')}}"><img src="{{asset('build/assets/img/pngs/14.png')}}" alt="img" class="img-sm"></a>
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class=" mt-0 text-uppercase">Sandals</h6>
																		<dl class="card-item-desc-1">
																			<dt>Color: </dt>
																			<dd>Pink</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-danger mb-0 mt-1 tx-14 px-1 py-1 text-center">Out of stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter">
																<button class="counter-minus btn">
																	<i class="fas fa-minus tx-10"></i>
																</button>
																<input type="text" value="2" class="">
																<button class="counter-plus btn">
																	<i class="fas fa-plus tx-10"></i>
																</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"> <span class="price tx-16">$26.00</span></div>
														</td>
														<td class="text-center">
															<a href="javascript:;" class="remove-list tx-16 remove-button" data-abc="true">
																<i class="fe fe-trash text-danger me-2"></i>
																<i class="fe fe-edit text-info"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<a href="{{url('ecommerce-productdetails')}}"><img src="{{asset('build/assets/img/pngs/15.png')}}" alt="img" class="img-sm"></a>
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class=" mt-0 text-uppercase">Backpack</h6>
																		<dl class="card-item-desc-1">
																			<dt>Color: </dt>
																			<dd>Blue</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-success mb-0 mt-1 tx-14 px-1 py-1 text-center">In stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter1">
																<button class="counter-minus btn">
																	<i class="fas fa-minus tx-10"></i>
																</button>
																<input type="text" value="2" class="">
																<button class="counter-plus btn">
																	<i class="fas fa-plus tx-10"></i>
																</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price tx-16">$23.00</span></div>
														</td>
														<td class="text-center">
															<a href="javascript:;" class="remove-list tx-16 remove-button" data-abc="true">
																<i class="fe fe-trash text-danger me-2"></i>
																<i class="fe fe-edit text-info"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<a href="{{url('ecommerce-productdetails')}}"><img src="{{asset('build/assets/img/pngs/19.png')}}" alt="img" class="img-sm"></a>
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class=" mt-0 text-uppercase">Girls Frock</h6>
																		<dl class="card-item-desc-1">
																			<dt>Color: </dt>
																			<dd>Navy Blue</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-danger mb-0 mt-1 tx-14 px-1 py-1 text-center">Out of stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter2">
																<button class="counter-minus btn">
																	<i class="fas fa-minus tx-10"></i>
																</button>
																<input type="text" value="3" class="">
																<button class="counter-plus btn">
																	<i class="fas fa-plus tx-10"></i>
																</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"> <span class="price tx-16">$38.00</span></div>
														</td>
														<td class="text-center">
															<a href="javascript:;" class="remove-list tx-16 remove-button" data-abc="true">
																<i class="fe fe-trash text-danger me-2"></i>
																<i class="fe fe-edit text-info"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<a href="{{url('ecommerce-productdetails')}}"><img src="{{asset('build/assets/img/pngs/16.png')}}" alt="img" class="img-sm"></a>
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class=" mt-0 text-uppercase">T Shirt</h6>
																		<dl class="card-item-desc-1">
																			<dt>Color: </dt>
																			<dd>Red</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-success mb-0 mt-1 tx-14 px-1 py-1 text-center">In stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter3">
																<button class="counter-minus btn">
																	<i class="fas fa-minus tx-10"></i>
																</button>
																<input type="text" value="3" class="">
																<button class="counter-plus btn">
																	<i class="fas fa-plus tx-10"></i>
																</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price tx-16">$56.00</span></div>
														</td>
														<td class="text-center">
															<a href="javascript:;" class="remove-list tx-16 remove-button" data-abc="true">
																<i class="fe fe-trash text-danger me-2"></i>
																<i class="fe fe-edit text-info"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<a href="{{url('ecommerce-productdetails')}}"><img src="{{asset('build/assets/img/pngs/17.png')}}" alt="img" class="img-sm"></a>
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class=" mt-0 text-uppercase">Wrist Watch</h6>
																		<dl class="card-item-desc-1">
																			<dt>Color: </dt>
																			<dd>Yellow</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-success mb-0 mt-1 tx-14 px-1 py-1 text-center">In stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter4">
																<button class="counter-minus btn">
																	<i class="fas fa-minus tx-10"></i>
																</button>
																<input type="text" value="4" class="">
																<button class="counter-plus btn">
																	<i class="fas fa-plus tx-10"></i>
																</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price tx-16">$24.00</span></div>
														</td>
														<td class="text-center">
															<a href="javascript:;" class="remove-list tx-16 remove-button" data-abc="true">
																<i class="fe fe-trash text-danger me-2"></i>
																<i class="fe fe-edit text-info"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<a href="{{url('ecommerce-productdetails')}}"><img src="{{asset('build/assets/img/pngs/18.png')}}" alt="img" class="img-sm"></a>
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class=" mt-0 text-uppercase">Sofa Chair</h6>
																		<dl class="card-item-desc-1">
																			<dt>Color: </dt>
																			<dd>Green</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-danger mb-0 mt-1 tx-14 px-1 py-1 text-center">Out of stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter5">
																<button class="counter-minus btn">
																	<i class="fas fa-minus tx-10"></i>
																</button>
																<input type="text" value="2" class="">
																<button class="counter-plus btn">
																	<i class="fas fa-plus tx-10"></i>
																</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price tx-16">$34.00</span></div>
														</td>
														<td class="text-center">
															<a href="javascript:;" class="remove-list tx-16 remove-button" data-abc="true">
																<i class="fe fe-trash text-danger me-2"></i>
																<i class="fe fe-edit text-info"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-3 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Have coupon ?</h6>
									</div>
									<div class="card-body">
										<form>
											<div class="form-group mb-0">
												<div class="input-group">
													<input type="text" class="form-control coupon" placeholder="Coupon code">
													<span class="input-group-btn">
														<button class="btn btn-primary btn-apply coupon">Apply</button>
													</span>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Price Details</h6>
									</div>
									<div class="card-body">
										<table class="table border-top-0 mb-0">
											<tbody>
												<tr>
													<td class="border-top-0 tx-medium">Sub Total</td>
													<td class="text-end border-top-0">$4,360</td>
												</tr>
												<tr>
													<td class="border-top-0 tx-medium">Discount</td>
													<td class="text-end border-top-0">5%</td>
												</tr>
												<tr>
													<td class="border-top-0 tx-medium">Shipping</td>
													<td class="text-end border-top-0">Free</td>
												</tr>
												<tr>
													<td class="fs-20 border-top-0 tx-medium">Total</td>
													<td class="text-end fs-20 border-top-0 tx-medium">$3,976</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="card-footer">
										<div class="step-footer">
											<a data-direction="next" class="step-btn btn btn-success mb-1" href="{{url('ecommerce-products')}}">
												<i class="mdi mdi-arrow-left me-1"></i>Continue shopping
											</a>
											<a data-direction="next" class="step-btn btn btn-primary float-sm-end mb-1" href="{{url('ecommerce-checkout')}}">Checkout
												<i class="mdi mdi-arrow-right ms-1"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')


        <!-- INTERNAL HANDLE COUNTER JS -->
		@vite('resources/assets/js/handleCounter.js')

@endsection
