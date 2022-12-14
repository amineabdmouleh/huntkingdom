@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Wizard</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Content Wizard</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic horizontal form wizard.</p>
										</div>
										<div id="wizard1">
											<h3>Login</h3>
											<section>
												<form>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Email Address</label>
														<input class="form-control" required="" type="email" autocomplete="email">
													</div>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Password</label>
														<input class="form-control" required="" type="password" autocomplete="current-password">
													</div>
													<label class="ckbox">
														<input type="checkbox"><span class="tx-13">Check me out</span>
													</label>
												</form>
											</section>
											<h3>New User</h3>
											<section>
												<form>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">User Name</label>
														<input class="form-control" required="" type="text">
													</div>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Email Address</label>
														<input class="form-control" required="" type="email" autocomplete="email">
													</div>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Password</label>
														<input class="form-control" required="" type="password" autocomplete="current-password">
													</div>
													<label class="ckbox">
														<input type="checkbox"><span class="tx-13">Check me out</span>
													</label>
												</form>
											</section>
											<h3>End</h3>
											<section>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">I agree terms & Conditions</span>
												</label>
											</section>
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
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vertical Form Wizard</h6>
											<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
										</div>
										<div id="wizard3">
											<h3>Personal Information</h3>
											<section>
												<form>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Email Address</label>
														<input class="form-control" required="" type="email" autocomplete="email">
													</div>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Password</label>
														<input class="form-control" required="" type="password" autocomplete="current-password">
													</div>
													<div class="form-group row">
														<div class="col-lg-12 col-sm-12">
															<label class="main-content-label tx-11 tx-gray-600">Dropify Single Upload</label>
															<input type="file" class="dropify" onchange="readURL(this);" data-height="180" />
														</div>
													</div>
													<div class="form-group row">
														<div class="col-lg-12 col-sm-12">
															<label class="main-content-label tx-11 tx-gray-600">Multiple Fancy Upload</label>
															<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
														</div>
													</div>
													<label class="ckbox">
														<input type="checkbox"><span class="tx-13">Check me out</span>
													</label>
												</form>
											</section>
											<h3>New User</h3>
											<section>
												<form>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">User Name</label>
														<input class="form-control" required="" type="text">
													</div>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Email Address</label>
														<input class="form-control" required="" type="email" autocomplete="email">
													</div>
													<div class="form-group">
														<label class="main-content-label tx-11 tx-gray-600">Password</label>
														<input class="form-control" required="" type="password" autocomplete="current-password">
													</div>
													<label class="ckbox">
														<input type="checkbox"><span class="tx-13">Check me out</span>
													</label>
												</form>
											</section>
											<h3>End</h3>
											<section>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">I agree terms & Conditions</span>
												</label>
											</section>
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
									<div class="card-body accordion-wizard">
										<div>
											<h6 class="main-content-label mb-1">Accordion Wizard</h6>
											<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
										</div>
										<form id="form">
											<div class="list-group">
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0 me-2 tx-semibold text-dark" data-acc-title>Name &amp; Email</h6>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label class="text-dark tx-semibold">Name:</label>
																<input type="text" name="name" class="form-control" />
															</div>
															<div class="form-group">
																<label class="text-dark tx-semibold">Email:</label>
																<input type="text" name="email" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0 tx-semibold text-dark" data-acc-title>Contact</h6>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label class="text-dark tx-semibold">Telephone:</label>
																<input type="text" name="telephone" class="form-control" />
															</div>
															<div class="form-group">
																<label class="text-dark tx-semibold">Mobile:</label>
																<input type="text" name="mobile" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0 tx-semibold text-dark" data-acc-title>Payment</h6>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label class="text-dark tx-semibold">Credit card:</label>
																<input type="text" name="card" class="form-control">
															</div>
															<div class="form-group form-row">
																<div class="col-sm-4">
																	<label class="text-dark tx-semibold">Expiry:</label>
																	<input type="text" name="expiry" class="form-control">
																</div>
																<div class="col-sm-4">
																	<label class="mg-t-10 mg-sm-t-0 text-dark tx-semibold">CVV:</label>
																	<input type="text" name="cvv" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL JQUERY-STEPS JS -->
        <script src="{{asset('build/assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>

        <!-- INTERNAL ACCORDION-WIZARD-FORM JS -->
        <script src="{{asset('build/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>

        <!-- INTERNAL FORM-WIZARD JS -->
        <script src="{{asset('build/assets/form-wizard.js')}}"></script>
		
        <!-- INTERNAL FILEUPLOADS JS -->
        <script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

        <!-- INTERNAL FANCY UPLOADER JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection
