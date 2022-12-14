@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Elements</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
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
											<h6 class="main-content-label mb-1">Form Input &amp; Textarea</h6>
											<p class="text-muted card-sub-title">A basic form control input and textarea with disabled and readonly mode.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg">
												<input class="form-control" placeholder="Input box" type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<input class="form-control" placeholder="Input box (readonly)" readonly type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<input class="form-control" disabled placeholder="Input box (disabled)" type="text">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
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
											<h6 class="main-content-label mb-1">Valid State Input</h6>
											<p class="text-muted card-sub-title">A form control with success, warning and error state.</p>
										</div>
										<form class="needs-validation was-validated">
											<div class="row row-sm">
												<div class="col-lg-6">
													<div class="form-group has-success mg-b-0">
														<input class="form-control" placeholder="Input box (success state)" required="" type="text" value="This is input">
														<textarea class="form-control mg-t-20" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
													</div>
												</div>
												<div class="col-lg-6 mg-t-20 mg-lg-t-0">
													<div class="form-group has-danger mg-b-0">
														<input class="form-control" placeholder="Input box (invalid state)" required="" type="text">
														<textarea class="form-control mg-t-20" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
													</div>
												</div>
											</div>
										</form>
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
											<h6 class="main-content-label mb-1">Default Form Input Fields with labels</h6>
											<p class="text-muted card-sub-title">A form control with labels state.</p>
										</div>
										<form>
											<div class="row row-sm">
												<div class="col-md-6">
													<div class="form-group">
														<p class="mg-b-10 tx-semibold">Name</p>
														<input type="text" class="form-control" name="example-text-input" placeholder="Name">
													</div>
													<div class="form-group">
														<p class="mg-b-10 tx-semibold">Disabled</p>
														<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
													</div>
													<div class="form-group">
														<p class="mg-b-10 tx-semibold">Readonly</p>
														<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area."  readonly="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<p class="mg-b-10 tx-semibold">Valid Email</p>
														<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
													</div>
													<div class="form-group m-0">
														<p class="mg-b-10 tx-semibold">Invalid Number</p>
														<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" autocomplete="username" placeholder="Invalid Number..">
														<div class="invalid-feedback">Invalid feedback</div>
													</div>
													<div class="form-group">
														<p class="mg-b-10 tx-semibold">Password</p>
														<input type="password" class="form-control" name="example-password-input" autocomplete="new-password" placeholder="Password..">
														<input hidden type="text" autocomplete="username" value="Dennis Mark">
													</div>
												</div>
												<div class="col-md-12 ">
													<div class="form-group mb-0">
														<p class="mg-b-10 tx-semibold">Message</p>
														<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="text here.."></textarea>
													</div>
												</div>
											</div>
										</form>
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
											<h6 class="main-content-label mb-1">Input Sizes</h6>
											<p class="text-muted card-sub-title">A form control sizes in large,small Fields.</p>
										</div>
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="example-text-input" placeholder="Large Input">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="example-text-input" placeholder="Default Input">
										</div>
										<div class="form-group mb-0">
											<input type="text" class="form-control input-sm" name="example-text-input" placeholder="Small Input">
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
											<h6 class="main-content-label mb-1">Toggle Switches</h6>
											<p class="text-muted card-sub-title">A custom made toggles with jquery support.</p>
										</div>
										<div class="main-toggle-group-demo">
											<div class="main-toggle">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-primary">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-secondary">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-dark">
												<span></span>
											</div>
										</div>
										<div class="main-toggle-group-demo mg-t-10">
											<div class="main-toggle on">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-primary on">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-secondary on">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-dark on">
												<span></span>
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
											<h6 class="main-content-label mb-1">Form Elements like Switch, Colors, Checkboxes & Radio Buttons </h6>
											<p class="text-muted card-sub-title">Below are the different kinds of form elements.</p>
										</div>
										<div class="row row-sm">
											<div class="col-xl-3">
												<div class="form-group">
													<p class="mb-2 tx-semibold">Toggle switch single</p>
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I agree with terms and conditions</span>
													</label>
													<p class="mt-4 mb-2 tx-semibold">Toggle switch single Checked</p>
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I agree with terms and conditions</span>
													</label>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="form-group ">
													<p class="mb-2 tx-semibold">Your skills</p>
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item ">
															<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
															<span class="selectgroup-button">HTML</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="CSS" class="selectgroup-input">
															<span class="selectgroup-button">CSS</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="PHP" class="selectgroup-input">
															<span class="selectgroup-button">PHP</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
															<span class="selectgroup-button">JavaScript</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Angular" class="selectgroup-input">
															<span class="selectgroup-button">Angular</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Java" class="selectgroup-input">
															<span class="selectgroup-button">Java</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="C++" class="selectgroup-input">
															<span class="selectgroup-button">C++</span>
														</label>
													</div>
												</div>
												<div class="form-group m-0">
													<p class="mb-2 tx-semibold">Select Color</p>
													<div class="d-flex">
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="azure" class="colorinput-input" checked />
																<span class="colorinput-color bg-primary"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="indigo" class="colorinput-input"  />
																<span class="colorinput-color bg-indigo"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="purple" class="colorinput-input" />
																<span class="colorinput-color bg-purple"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="pink" class="colorinput-input" />
																<span class="colorinput-color bg-pink"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="red" class="colorinput-input" />
																<span class="colorinput-color bg-danger"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="orange" class="colorinput-input" />
																<span class="colorinput-color bg-orange"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="yellow" class="colorinput-input" />
																<span class="colorinput-color bg-warning"></span>
															</label>
														</div>
														<div class="d-none d-sm-block">
															<label class="colorinput">
																<input name="color" type="checkbox" value="lime" class="colorinput-input" />
																<span class="colorinput-color bg-info"></span>
															</label>
														</div>
														<div class="d-none d-sm-block">
															<label class="colorinput">
																<input name="color" type="checkbox" value="green" class="colorinput-input" />
																<span class="colorinput-color bg-success"></span>
															</label>
														</div>
														<div class="d-none d-sm-block">
															<label class="colorinput">
																<input name="color" type="checkbox" value="teal" class="colorinput-input" />
																<span class="colorinput-color bg-teal"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group ">
													<div class="form-label tx-semibold">Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled="">
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option4" disabled="" checked="">
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group m-0">
													<div class="form-label tx-semibold">Checkboxes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
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
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">File Input Sizes</h6>
											<p class="text-muted card-sub-title">File inputs are in small, default, large Fields.</p>
										</div>
										<div class="row row-sm">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<div class="mb-3">
													<label for="formFileSm" class="form-label tx-semibold">Small file input example</label>
													<input class="form-control form-control-sm" id="formFileSm" type="file">
												</div>
												<div class="mb-3">
													<label for="formFile" class="form-label tx-semibold">Default file input example</label>
													<input class="form-control" type="file" id="formFile">
												</div>
												<div>
													<label for="formFileLg" class="form-label tx-semibold">Large file input example</label>
													<input class="form-control form-control-lg" id="formFileLg" type="file">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">File Input Examples</h6>
											<p class="text-muted card-sub-title">Below are the File Inputs with Mutltiple Files and Disabled File.</p>
										</div>
										<div class="row row-sm">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<div class="mb-4 mt-2">
													<label for="formFileMultiple" class="form-label tx-semibold">Multiple files input example</label>
													<input class="form-control" type="file" id="formFileMultiple" multiple>
												</div>
												<div class="mb-5">
													<label for="formFileDisabled" class="form-label tx-semibold">Disabled file input example</label>
													<input class="form-control" type="file" id="formFileDisabled" disabled>
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
											<h6 class="main-content-label mb-1">Input Groups</h6>
											<p class="text-muted card-sub-title">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-4">
												<div class="input-group mb-3">
													<span class="input-group-text" id="basic-addon1">@</span>
													<input aria-describedby="basic-addon1" aria-label="Username" class="form-control" placeholder="Username" type="text">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-group mb-3">
													<input aria-describedby="basic-addon2" aria-label="Recipient's username" class="form-control" placeholder="Recipient's username" type="text">
													<span class="input-group-text" id="basic-addon2">@example.com</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-group mb-3">
													<span class="input-group-text">$</span>
													<input aria-label="Amount (to the nearest dollar)" class="form-control border-end-0" type="text">
													<span class="input-group-text bd-r">.00</span>
												</div>
											</div>
										</div>
										<div class="row row-sm">
											<div class="col-lg-4">
												<div class="input-group">
													<div class="input-group-text">
														<label class="ckbox wd-16 mg-b-0"><input class="mg-0" type="checkbox"><span></span></label>
													</div>
													<input class="form-control" placeholder="Text input with checkbox" type="text">
												</div>
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-text">
														<label class="rdiobox wd-16 mg-b-0"><input type="radio"><span></span></label>
													</div>
													<input class="form-control" placeholder="Text input with radiobox" type="text">
												</div>
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<input class="form-control" placeholder="Search for..." type="text">
													<span class="input-group-btn"><button class="btn ripple btn-primary" type="button">
													<span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
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
											<h6 class="main-content-label mb-1">Input Mask</h6>
											<p class="text-muted card-sub-title">Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-3">
												<div class="input-group">
													<div class="input-group-text">
														Date:
													</div>
												<input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
												</div>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-text">
														Phone:
													</div>
													<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
												</div>
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-text">
														Phone + Ext.:
													</div>
													<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
												</div>
											</div>
											<div class="col-lg-2 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-text">
														SSN:
													</div>
													<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
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
											<h6 class="main-content-label mb-1">Color Picker 1</h6>
											<p class="text-muted card-sub-title">Below is the Color Picker for choosing Colors for a theme.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-4">
												<p class="mg-b-10">Same way you select color in Adobe Photoshop.</p>
												<div>
													<input id="colorpicker" type="text">
												</div>
											</div>
											<div class="col-md-4">
												<p class="mg-b-10 mg-t-10 mg-md-t-0">You can allow alpha transparency selection. Check out these example.</p>
												<div>
													<input id="showAlpha" type="text">
												</div>
											</div>
											<div class="col-md-4">
												<p class="mg-b-10 mg-t-10 mg-md-t-0">Show pallete only. If you'd like, spectrum can show the palettes you specify.</p>
												<div>
													<input id="showPaletteOnly" type="text">
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Color Picker 2</h6>
											<p class="text-muted card-sub-title">Below is the Color Picker for choosing Colors for a theme.</p>
										</div>
										<div class="container p-2">
											<div class="d-flex justify-content-between">
												<div>
													<div class="theme-container"></div>
													<div class="pickr-container"></div>
												</div>
												<div>
													<div class="theme-container1"></div>
													<div class="pickr-container1"></div>
												</div>
												<div>
													<div class="theme-container2"></div>
													<div class="pickr-container2"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1"> Date and time Picker</h6>
											<p class="text-muted card-sub-title">The date and  time picker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-6">
												<div class="mg-b-20">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
														<input class="form-control" id="datetimepicker" placeholder="MM/DD/YYYY HH/MM/SS" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">JQuery UI Date Picker</h6>
											<p class="text-muted card-sub-title">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-6">
												<div class="mg-b-20">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
														<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="mg-b-20">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
														<input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
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
											<h6 class="main-content-label mb-1">Date, Month, Year Range Picker</h6>
											<p class="text-muted card-sub-title">Display the datepicker embedded in the page instead of in an overlay.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-4">
												<div class=" mg-b-30">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
														<input class="form-control" placeholder="Date Range" type="text" id="datepicker-date">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mg-b-30">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
														<input class="form-control" placeholder="Month Range" type="text" id="datepicker-month">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class=" mg-b-30">
													<div class="input-group">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
														<input class="form-control" placeholder="Year Range" type="text" id="datepicker-year">
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
											<h6 class="main-content-label mb-1">Range Slider</h6>
											<p class="text-muted card-sub-title">Easy, flexible and responsive range slider with skin support.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-6">
												<input class="rangeslider1" name="example_name" type="text" value="">
											</div>
											<div class="col-lg-6 mg-t-20 mg-lg-t-0">
												<input class="rangeslider2" name="example_name" type="text" value="">
											</div>
										</div>
										<div class="row row-sm mg-t-40">
											<div class="col-lg-6">
												<input class="rangeslider3" name="example_name" type="text" value="">
											</div>
											<div class="col-lg-6 mg-t-20 mg-lg-t-0">
												<input class="rangeslider4" name="example_name" type="text" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

		<!-- INTERNAL JQUERY-UI JS -->
		<script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- INTERNAL JQUERY.MASKEDINPUT JS -->
		<script src="{{asset('build/assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

		<!-- INTERNAL SPECTRUM-COLORPICKER JS -->
		<script src="{{asset('build/assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

		<!-- INTERNAL COLOR PICKER 2 JS -->
		<script src="{{asset('build/assets/plugins/pickr-master/pickr.es5.min.js')}}"></script>
		@vite('resources/assets/js/picker.js')
		

		<!-- INTERNAL ION-RANGESLIDER JS -->
		<script src="{{asset('build/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


		<!-- INTERNAL FORM-ELEMENTS JS -->
		@vite('resources/assets/js/form-elements.js')


		<!-- BOOTSTRAP-DATEPICKER JS -->
		<script src="{{asset('build/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

		<!-- INTERNAL JQUERY-DATETIMEPICKER JS -->
		<script src="{{asset('build/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

@endsection