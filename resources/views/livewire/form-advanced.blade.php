@extends('layouts.app')

@section('styles')

@endsection

@section('content')

							<!-- PAGE HEADER -->
							<div class="page-header">
								<div>
									<h2 class="main-content-title tx-24 mg-b-5">Advanced Forms</h2>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:;">FOrms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Advanced Forms</li>
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
												<h6 class="main-content-label mb-1">Select2</h6>
												<p class="text-muted card-sub-title">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
											</div>
											<div class="row row-sm mg-b-20">
												<div class="col-lg-4">
													<p class="mg-b-10 tx-semibold">Single Select</p>
													<select class="form-control select2-no-search">
														<option label="Choose one">
														</option>
														<option value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
												</div><!-- col-4 -->
												<div class="col-lg-4 mg-t-20 mg-lg-t-0">
													<p class="mg-b-10 tx-semibold">Single Select with Search</p>
													<select class="form-control select2">
														<option label="Choose one">
														</option>
														<option value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
												</div><!-- col-4 -->
												<div class="col-lg-4 mg-t-20 mg-lg-t-0">
													<p class="mg-b-10 tx-semibold">Single Select (Disabled)</p>
													<select class="form-control select2" disabled>
														<option label="Choose one">
														</option>
														<option value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
												</div><!-- col-4 -->
											</div>
											<div class="row row-sm">
												<div class="col-lg-4">
													<p class="mg-b-10 tx-semibold">Multiple Select</p>
													<select class="form-control select2" multiple="multiple">
														<option value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
												</div>
												<div class="col-lg-4 mg-t-20 mg-lg-t-0">
													<p class="mg-b-10 tx-semibold">Multiple Select with Pre-Filled Input</p>
													<select class="form-control select2" multiple="multiple">
														<option selected value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
												</div>
												<div class="col-lg-4 mg-t-20 mg-lg-t-0">
													<p class="mg-b-10 tx-semibold">Multiple Select (Disabled)</p>
													<select class="form-control select2-no-search" disabled multiple="multiple">
														<option selected value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
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
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Telephone Input</h6>
												<p class="text-muted card-sub-title">A JavaScript plugin for entering and validating international telephone numbers. It adds a flag dropdown to any input, detects the user's country, displays a relevant placeholder and provides formatting/validation methods.</p>
											</div>
											<div class="input-group telephone-input">
												<input type="tel" id="mobile-number" placeholder="e.g. +1 702 123 4567">
												<span class="input-group-btn">
													<button class="btn ripple btn-primary" type="button">Submit</button>
												</span>
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
												<h6 class="main-content-label mb-1">Date Range Picker</h6>
												<p class="text-muted card-sub-title">Date Range Picker</p>
											</div>
											<div class="row row-sm">
												<div class="col-lg-12">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar  lh--9 op-6"></i>
														</div>
														<input type="text" class="form-control pull-right" id="reservation">
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
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Time Picker</h6>
												<p class="text-muted card-sub-title">Time Picker</p>
											</div>
											<div class="row row-sm">
												<div class="col-lg-12">
													<div class="">
														<label class="">Default Time Picker</label>
														<div class="input-group wd-xl-50p-f">
															<div class="input-group-text">
																<i class="fe fe-clock tx-16 lh-0 op-6"></i>
															</div>
															<input class="form-control" id="tpBasic" placeholder="Set time" type="text">
														</div>
													</div>
													<label class="mt-4">Set the scroll position to local time if no value selected</label>
													<div class="">
														<div class="input-group wd-xl-50p-f">
															<div class="input-group-text">
																<i class="fe fe-clock tx-16 lh-0 op-6"></i>
															</div>
															<input class="form-control" id="tp2" placeholder="Set time" type="text">
														</div>
													</div>
													<label class="mt-4 ">Dynamically set the time using a Javascript Date object</label>
													<div class="d-flex">
														<div class="input-group wd-xl-50p-f">
															<div class="input-group-text">
																<i class="fe fe-clock tx-16 lh-0 op-6"></i>
															</div>
															<input class="form-control" id="tp3" placeholder="Set time" type="text">
															<button class="btn btn btn-primary br-tl-0 br-bl-0" id="setTimeButton">Set Current Time</button>
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
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">File Upload</h6>
												<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
											</div>
											<div class="row mb-4">
												<div class="col-sm-12 col-md-4">
													<input type="file" class="dropify" data-height="200" />
												</div>
												<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
													<input type="file" class="dropify" data-default-file="{{asset('build/assets/img/media/8.jpg')}}" data-height="200"  />
												</div>
												<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
													<input type="file" class="dropify" disabled="disabled"  />
												</div>
											</div>
											<div class="mb-4">
												<input class="form-control" type="file" id="formFile">
											</div>
											<div>
												<input id="demo" type="file" name="files" accept="image/jpg, image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->
@endsection

@section('scripts')

        <!-- JQUERY-UI JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- INTERNAL DATERANGEPICKER JS -->
        <script src="{{asset('build/assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <!-- INTERNAL FILEUPLOADS JS -->
        <script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

        <!-- INTERNAL FANCY UPLOADER JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

        <!-- INTERNAL FORM-ELEMENTS JS -->
		@vite('resources/assets/js/advanced-form-elements.js')

		
		<!-- SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


        <!-- INTERNAL TELEPHONE INPUT JS -->
        <script src="{{asset('build/assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
        <script src="{{asset('build/assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

        <!-- TIMEPICKER JS -->
        <script src="{{asset('build/assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
        <script src="{{asset('build/assets/plugins/time-picker/toggles.min.js')}}"></script>
		
@endsection
