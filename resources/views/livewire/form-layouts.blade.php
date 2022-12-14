@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Layouts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label">Vertical Form</h6>
										</div>
									</div>
									<div class="card-body">
										<form>
											<div class="">
												<div class="form-group">
													<label for="exampleInputEmail1" class="form-label tx-semibold">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="username">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1" class="form-label tx-semibold">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="new-password">
												</div>
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label">Check me Out</span>
												</label>
											</div>
											<button class="btn btn-primary mb-0">Submit</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label">Horizonatal Form</h6>
										</div>
									</div>
									<div class="card-body">
										<div class="">
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-3">
													<label class="mg-b-0 tx-semibold">Firstname</label>
												</div>
												<div class="col-md-9 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your firstname" type="text">
												</div>
											</div>
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-3">
													<label class="mg-b-0 tx-semibold">Lastname</label>
												</div>
												<div class="col-md-9 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your lastname" type="text">
												</div>
											</div>
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-3">
													<label class="mg-b-0 tx-semibold">Email</label>
												</div>
												<div class="col-md-9 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your email" type="email">
												</div>
											</div>
											<div class="form-group row justify-content-end">
												<div class="col-md-9 ps-md-2">
													<div class="form-group mb-0">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label">Check me Out</span>
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row justify-content-end mb-0">
												<div class="col-md-9">
													<button class="btn ripple btn-primary">Register</button>
													<button class="btn ripple btn-secondary">Cancel</button>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label">Grid Form</h6>
										</div>
									</div>
									<div class="card-body">
										<div class="row row-sm">
											<div class="col-md-12 col-lg-12 col-xl-12">
												<div class="">
													<div class="form-group">
														<label class="tx-semibold">Name</label>
														<input class="form-control" required="" type="text">
													</div>
													<div class="form-group">
														<label class="tx-semibold">Email</label>
														<div class="pos-relative">
															<input class="form-control pd-r-80" required="" type="email">
														</div>
													</div>
													<div class="form-group">
														<div class="row row-sm">
															<div class="col-sm-4">
																<label class="tx-semibold">Date</label>
																<select class="form-control select select2">
																	<option label="Date"></option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-sm-4 mg-t-20 mg-sm-t-0">
																<label class="tx-semibold">Month</label>
																<select class="form-control select select2">
																	<option label="Month"></option>
																	<option value="January">January</option>
																	<option value="February">February</option>
																	<option value="March">March</option>
																	<option value="April">April</option>
																	<option value="May">May</option>
																	<option value="June">June</option>
																	<option value="July">July</option>
																	<option value="August">August</option>
																	<option value="September">September</option>
																	<option value="October">October</option>
																	<option value="November">November</option>
																	<option value="December">December</option>
																</select>
															</div>
															<div class="col-sm-4 mg-t-20 mg-sm-t-0">
																<label class="tx-semibold">Year</label>
																<select class="form-control select select2">
																	<option label="year"></option>
																	<option value="2020">2020</option>
																	<option value="2018">2018</option>
																	<option value="2017">2017</option>
																	<option value="2016">2016</option>
																	<option value="2015">2015</option>
																	<option value="2014">2014</option>
																	<option value="2013">2013</option>
																	<option value="2012">2012</option>
																	<option value="2011">2011</option>
																	<option value="2010">2010</option>
																	<option value="2009">2009</option>
																	<option value="2008">2008</option>
																	<option value="2007">2007</option>
																	<option value="2006">2006</option>
																	<option value="2005">2005</option>
																	<option value="2004">2004</option>
																	<option value="2003">2003</option>
																	<option value="2002">2002</option>
																	<option value="2001">2001</option>
																	<option value="1999">1999</option>
																	<option value="1998">1998</option>
																</select>
															</div>
														</div>
													</div>
													<div class="form-group mg-b-20">
														<label class="ckbox">
															<input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
														</label>
													</div>
													<button class="btn ripple btn-primary">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Shipping Details</h6>
									</div>
									<div class="card-body">
										<div class="form-row">
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="name1" placeholder="First Name">
												</div>
											</div>
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="name2" placeholder="Last Name">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<input type="email" class="form-control" id="inputEmail5" placeholder="Email Address">
										</div>
										<div class="form-group ">
											<input type="text" class="form-control" placeholder="AddressLine1">
										</div>
										<div class="form-row">
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Country">
												</div>
											</div>
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="region" placeholder="Country/Region">
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="city" placeholder="City">
												</div>
											</div>
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="number" class="form-control" id="postal" placeholder="Zip/Postal">
												</div>
											</div>
										</div>
										<div class="form-footer mt-2">
											<a href="javascript:;" class="btn btn-primary">Confirm  Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header d-flex">
										<h6 class="main-content-label">CheckOut</h6>
									</div>
									<div class="card-body">
										<div class="form">
											<div class="form-group">
												<div class="form-group">
													<label class="form-label tx-semibold">Card Holder Name</label>
													<input type="text" class="form-control" id="name11" placeholder="First Name">
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-9 mb-0">
												<div class="form-group">
													<label class="form-label tx-semibold">Credit card Number</label>
													<input type="number" class="form-control" id="number" placeholder="number">
												</div>
											</div>
											<div class="form-group col-md-3 mb-0">
												<div class="form-group">
													<label class="form-label tx-semibold">CVV Number</label>
													<input type="number" class="form-control" id="region1" placeholder="675">
												</div>
											</div>
										</div>
										<div class="form-group m-0">
											<label class="form-label tx-semibold">Expiration Date</label>
											<div class="row ">
												<div class="col-6">
													<select name="user[month]" class="form-control form-select select2" data-bs-placeholder="Select Month">
														<option label="Select Month"></option>
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="col-6">
													<select name="user[year]" class="form-control form-select select2" data-bs-placeholder="Select Year">
														<option label="Select Year"></option>
														<option value="2014">2040</option>
														<option value="2014">2039</option>
														<option value="2014">2037</option>
														<option value="2014">2036</option>
														<option value="2014">2035</option>
														<option value="2014">2034</option>
														<option value="2014">2033</option>
														<option value="2014">2032</option>
														<option value="2014">2031</option>
														<option value="2014">2030</option>
														<option value="2014">2030</option>
														<option value="2013">2029</option>
														<option value="2012">2028</option>
														<option value="2011">2027</option>
														<option value="2010">2026</option>
														<option value="2009">2025</option>
														<option value="2008">2024</option>
														<option value="2007">2023</option>
														<option value="2006">2022</option>
														<option value="2005">2021</option>
														<option value="2004">2020</option>
														<option value="2003">2019</option>
														<option value="2002">2018</option>
													</select>
												</div>
											</div>
										</div>
										<div class="mt-4 mb-0 text-dark">
											Your Credit  card information is encrypted
										</div>
										<div class="form-footer mt-2">
											<a href="javascript:;" class="btn btn-primary">Make Payment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xl-5 col-xxl-6">
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Billing Information</h6>
									</div>
									<div class="card-body">
										<form class="needs-validation" novalidate="">
											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="firstName" class="tx-semibold">First name</label>
													<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
													<div class="invalid-feedback">Valid first name is required.</div>
												</div>
												<div class="col-md-6 mb-3">
													<label for="lastName" class="tx-semibold">Last name</label>
													<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
													<div class="invalid-feedback">Valid last name is required.</div>
												</div>
											</div>
											<div class="mb-3">
												<label for="address" class="tx-semibold">Address</label>
												<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
												<div class="invalid-feedback">Please enter your shipping address.</div>
											</div>
											<div class="mb-3">
												<label for="address2" class="tx-semibold">Address 2 <span class="text-muted">(Optional)</span>
												</label>
												<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
											</div>
											<div class="mb-3">
												<label for="mobile" class="tx-semibold">Mobile Number</label>
												<input type="text" class="form-control" id="mobile">
											</div>
											<div class="row">
												<div class="col-xxl-5 mb-3">
													<label for="country" class="tx-semibold">Country</label>
													<select class="form-select d-block w-100 select2" id="country" required="">
														<option value="">Choose...</option>
														<option>United States</option>
													</select>
													<div class="invalid-feedback">Please select a valid country.</div>
												</div>
												<div class="col-xxl-4 mb-3">
													<label for="state" class="tx-semibold">State</label>
													<select class="form-select d-block w-100 select2" id="state" required="">
														<option value="">Choose...</option>
														<option>California</option>
													</select>
													<div class="invalid-feedback">Please provide a valid state.</div>
												</div>
												<div class="col-xxl-3 mb-3">
													<label for="zip" class="tx-semibold">Zipcode</label>
													<input type="text" class="form-control" id="zip" placeholder="" required="">
													<div class="invalid-feedback">Zip code required.</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-7 col-xxl-6">
								<div class="card custom-card">
									<div class="card-header d-flex">
										<h6 class="main-content-label">Payment Information</h6>
									</div>
									<div class="card-body">
										<div class="card-pay">
											<ul class="tabs-menu nav mb-0">
												<li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
												<li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fab fa-paypal"></i>  Paypal</a></li>
												<li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active show br-3 mb-2" id="tab20">
													<div class="form-group mt-4">
														<label class="form-label tx-semibold">CardHolder Name</label>
														<input type="text" class="form-control" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label tx-semibold">Card number</label>
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
																<label class="form-label tx-semibold">Expiration</label>
																<div class="input-group">
																	<input type="number" class="form-control border-end-0" placeholder="MM" name="Month">
																	<input type="number" class="form-control" placeholder="YY" name="Year">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<label class="form-label">CVV <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip" title="CVV is the last 3 digits on the back of your Credit Card."></i></label>
																<input type="number" class="form-control" required="">
															</div>
														</div>
													</div>
													<a href="javascript:;" class="btn btn-primary">Confirm</a>
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
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('scripts')

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


@endsection
