@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Checkout</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
							<div class="col-xl-12">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<div>
											<h3 class="card-title tx-18"><label class="main-content-label tx-15">CHECKOUT</label></h3>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 mx-auto">
												<div class="checkout-steps wrapper">
													<div id="checkoutsteps">
														<!-- SECTION 1 -->
														<h4>Signin</h4>
														<section>
															<form>
																<h5 class="text-start mb-2 tx-medium">Signin to Your Account</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
																<div class="form-group text-start">
																	<label class="tx-medium">Email</label>
																	<input class="form-control" placeholder="Enter your email" type="email" autocomplete="email">
																</div>
																<div class="form-group text-start">
																	<label class="tx-medium">Password</label>
																	<input class="form-control" placeholder="Enter your password" type="password" autocomplete="new-password">
																</div>
																<button class="btn ripple btn-primary btn-block rounded-6 mt-4">Sign In</button>
															</form>
														</section> <!-- SECTION 2 -->
														<h4>Billing</h4>
														<section>
															<form class="needs-validation" novalidate="">
																<h5 class="text-start mb-2 tx-medium">Billing Information</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
																<div class="row">
																	<div class="col-md-6 mb-3">
																		<label for="firstName" class="tx-medium">First name</label>
																		<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
																		<div class="invalid-feedback">Valid first name is required.</div>
																	</div>
																	<div class="col-md-6 mb-3">
																		<label for="lastName" class="tx-medium">Last name</label>
																		<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
																		<div class="invalid-feedback">Valid last name is required.</div>
																	</div>
																</div>
																<div class="mb-3">
																	<label for="address" class="tx-medium">Address</label>
																	<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
																	<div class="invalid-feedback">Please enter your shipping address.</div>
																</div>
																<div class="mb-3">
																	<label for="address2" class="tx-medium">Address 2 <span class="text-muted">(Optional)</span>
																	</label>
																	<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
																</div>
																<div class="mb-3">
																	<label for="mobile" class="tx-medium">Mobile Number</label>
																	<input type="text" class="form-control" id="mobile">
																</div>
																<div class="row">
																	<div class="col-md-5 mb-3">
																		<label for="country" class="tx-medium">Country</label>
																		<select class="form-select d-block w-100 select2-no-search" id="country" required="">
																			<option label="Select"></option>
																			<option>United States</option>
																			<option>India</option>
																			<option>France</option>
																		</select>
																		<div class="invalid-feedback">Please select a valid country.</div>
																	</div>
																	<div class="col-md-4 mb-3">
																		<label for="state" class="tx-medium">State</label>
																		<select class="form-select d-block w-100 select2-no-search" id="state" required="">
																			<option label="Select"></option>
																			<option>California</option>
																		</select>
																		<div class="invalid-feedback">Please provide a valid state.</div>
																	</div>
																	<div class="col-md-3 mb-3">
																		<label for="zip" class="tx-medium">Zipcode</label>
																		<input type="text" class="form-control" id="zip" placeholder="" required="">
																		<div class="invalid-feedback">Zip code required.</div>
																	</div>
																</div>
																<button class="btn btn-primary btn-block rounded-6 mt-3" type="submit">Continue to checkout</button>
															</form>
														</section> <!-- SECTION 3 -->
														<h4>Order</h4>
														<section>
															<h5 class="text-start mb-2 tx-medium">Your Order</h5>
															<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
															<div class="product">
																<div class="item">
																	<div class="left"> <a href="{{url('ecommerce-productdetails')}}" class="thumb"> <img src="{{asset('build/assets/img/pngs/19.png')}}" alt=""> </a>
																		<div class="purchase">
																			<h6 class="tx-medium"> <a href="javascript:;" class="text-dark">Girls Frock</a> </h6> <span class="text-muted">2</span>
																		</div>
																	</div> <span class="price">$290</span>
																</div>
																<div class="item">
																	<div class="left"> <a href="{{url('ecommerce-productdetails')}}" class="thumb"> <img src="{{asset('build/assets/img/pngs/16.png')}}" alt=""> </a>
																		<div class="purchase">
																			<h6 class="tx-medium"> <a href="javascript:;" class="text-dark">Tshirt</a> </h6> <span class="text-muted">1</span>
																		</div>
																	</div> <span class="price">$124</span>
																</div>
															</div>
															<div class="checkout">
																<div class="subtotal"> <span class="heading">Subtotal</span> <span class="total tx-20 tx-medium">$364</span> </div>
															</div>
														</section><!-- SECTION 4 -->
														<h4>Payments</h4>
														<section>
															<div class="">
																<h5 class="text-start mb-2 tx-medium">Payments</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
															</div>
															<div class="card-pay">
																<ul class="tabs-menu nav">
																	<li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
																	<li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fab fa-paypal"></i>  Paypal</a></li>
																	<li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
																</ul>
																<div class="tab-content">
																	<div class="tab-pane active show px-4 py-2 br-3 mb-2" id="tab20">
																		<div class="form-group mt-4">
																			<label class="form-label tx-medium">Card Holder Name</label>
																			<input type="text" class="form-control" placeholder="First Name">
																		</div>
																		<div class="form-group">
																			<label class="form-label tx-medium">Card number</label>
																			<div class="input-group">
																				<input type="text" class="form-control" placeholder="Search for...">
																				<span class="input-group-btn btn btn-secondary box-shadow-0">
																					<i class="fab fa-cc-visa"></i> &nbsp;
																					<i class="fab fa-cc-amex"></i> &nbsp;
																					<i class="fab fa-cc-mastercard"></i>
																				</span>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-8">
																				<div class="form-group">
																					<label class="form-label tx-medium">Expiration</label>
																					<div class="input-group">
																						<input type="number" class="form-control" placeholder="MM" name="Month">
																						<input type="number" class="form-control" placeholder="YY" name="Year">
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-4">
																				<div class="form-group">
																					<label class="form-label tx-medium">CVV <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip" title="CVV is the last 3 digits on the back of your Credit Card."></i></label>
																					<input type="number" class="form-control" required="">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab21">
																		<p class="mt-4">Paypal is easiest way to pay online</p>
																		<p><a href="javascript:;" class="btn btn-primary rounded-6"><i class="fab fa-paypal"></i> Log in my Paypal</a></p>
																		<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
																	</div>
																	<div class="tab-pane" id="tab22">
																		<p class="mt-4">Bank account details</p>
																		<dl class="card-text">
																			<dt>BANK: </dt>
																			<dd> THE UNION BANK 0456</dd>
																		</dl>
																		<dl class="card-text">
																			<dt>Account number: </dt>
																			<dd> 67542897653214</dd>
																		</dl>
																		<dl class="card-text">
																			<dt>IBAN: </dt>
																			<dd>543218769</dd>
																		</dl>
																		<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
																	</div>
																</div>
															</div>
														</section>
														<h4>Finished</h4>
														<section class="text-center">
															<div class="">
																<h5 class="text-center mb-4 tx-medium">Your order Confirmed!</h5>
															</div>
															<svg class="wd-75 ht-75 mx-auto justify-content-center mb-3 text-center" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
																<circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
																<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
															</svg>
															<p class="success px-5">Order placed successfully. Your order will be dispacted soon. meanwhile you can track your order in my order section.</p>
														</section>
													</div>
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

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')


		<!-- JQUERY-STEPS JS -->
		<script src="{{asset('build/assets/plugins/checkout-jquery-steps/jquery.steps.min.js')}}"></script>
		@vite('resources/assets/js/checkout-jquery-steps.js')


 		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


@endsection
