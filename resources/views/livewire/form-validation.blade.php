@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Validation</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Validation</li>
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
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label tx-15">Custom styles</h6>
										</div>
									</div>
									<div class="card-body">
										<form class="row g-3 needs-validation" novalidate>
											<div class="col-md-4">
												<label for="validationCustom01" class="form-label tx-semibold">First name</label>
												<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
												<div class="valid-feedback">
												Looks good!
												</div>
											</div>
											<div class="col-md-4">
												<label for="validationCustom02" class="form-label tx-semibold">Last name</label>
												<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
												<div class="valid-feedback">
												Looks good!
												</div>
											</div>
											<div class="col-md-4">
												<label for="validationCustomUsername" class="form-label tx-semibold">Username</label>
												<div class="input-group has-validation">
												<span class="input-group-text" id="inputGroupPrepend">@</span>
												<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
												<div class="invalid-feedback">
													Please choose a username.
												</div>
												</div>
											</div>
											<div class="col-md-6">
												<label for="validationCustom03" class="form-label tx-semibold">City</label>
												<input type="text" class="form-control" id="validationCustom03" required>
												<div class="invalid-feedback">
												Please provide a valid city.
												</div>
											</div>
											<div class="col-md-3">
												<label for="validationCustom04" class="form-label tx-semibold">State</label>
												<select class="form-select select2" id="validationCustom04" required>
												<option selected disabled value="">Choose...</option>
												<option>California</option>
												</select>
												<div class="invalid-feedback">
												Please select a valid state.
												</div>
											</div>
											<div class="col-md-3">
												<label for="validationCustom05" class="form-label tx-semibold">Zip</label>
												<input type="text" class="form-control" id="validationCustom05" required>
												<div class="invalid-feedback">
												Please provide a valid zip.
												</div>
											</div>
											<div class="col-12">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
												<label class="form-check-label" for="invalidCheck">
													Agree to terms and conditions
												</label>
												<div class="invalid-feedback">
													You must agree before submitting.
												</div>
												</div>
											</div>
											<div class="col-12">
												<button class="btn btn-primary" type="submit">Submit form</button>
											</div>
											</form>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label tx-15">Browser defaults</h6>
										</div>
									</div>
									<div class="card-body">
										<form class="row g-3">
											<div class="col-md-4">
												<label for="validationDefault01" class="form-label tx-semibold">First name</label>
												<input type="text" class="form-control" id="validationDefault01" value="Mark" required>
											</div>
											<div class="col-md-4">
												<label for="validationDefault02" class="form-label tx-semibold">Last name</label>
												<input type="text" class="form-control" id="validationDefault02" value="Otto" required>
											</div>
											<div class="col-md-4">
												<label for="validationDefaultUsername" class="form-label tx-semibold">Username</label>
												<div class="input-group">
												<span class="input-group-text" id="inputGroupPrepend2">@</span>
												<input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
												</div>
											</div>
											<div class="col-md-6">
												<label for="validationDefault03" class="form-label tx-semibold">City</label>
												<input type="text" class="form-control" id="validationDefault03" required>
											</div>
											<div class="col-md-3">
												<label for="validationDefault04" class="form-label tx-semibold">State</label>
												<select class="form-select select2" id="validationDefault04" required>
												<option selected disabled value="">Choose...</option>
												<option>California</option>
												</select>
											</div>
											<div class="col-md-3">
												<label for="validationDefault05" class="form-label tx-semibold">Zip</label>
												<input type="text" class="form-control" id="validationDefault05" required>
											</div>
											<div class="col-12">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
												<label class="form-check-label" for="invalidCheck2">
													Agree to terms and conditions
												</label>
												</div>
											</div>
											<div class="col-12">
												<button class="btn btn-primary" type="submit">Submit form</button>
											</div>
											</form>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label tx-15">Server side</h6>
										</div>
									</div>
									<div class="card-body">
										<form class="row g-3">
											<div class="col-md-4">
												<label for="validationServer01" class="form-label tx-semibold">First name</label>
												<input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
												<div class="valid-feedback">
												Looks good!
												</div>
											</div>
											<div class="col-md-4">
												<label for="validationServer02" class="form-label tx-semibold">Last name</label>
												<input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
												<div class="valid-feedback">
												Looks good!
												</div>
											</div>
											<div class="col-md-4">
												<label for="validationServerUsername" class="form-label tx-semibold">Username</label>
												<div class="input-group has-validation">
												<span class="input-group-text" id="inputGroupPrepend3">@</span>
												<input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
												<div id="validationServerUsernameFeedback" class="invalid-feedback">
													Please choose a username.
												</div>
												</div>
											</div>
											<div class="col-md-6">
												<label for="validationServer03" class="form-label tx-semibold">City</label>
												<input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
												<div id="validationServer03Feedback" class="invalid-feedback">
												Please provide a valid city.
												</div>
											</div>
											<div class="col-md-3">
												<label for="validationServer04" class="form-label tx-semibold">State</label>
												<select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
												</select>
												<div id="validationServer04Feedback" class="invalid-feedback">
												Please select a valid state.
												</div>
											</div>
											<div class="col-md-3">
												<label for="validationServer05" class="form-label tx-semibold">Zip</label>
												<input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
												<div id="validationServer05Feedback" class="invalid-feedback">
												Please provide a valid zip.
												</div>
											</div>
											<div class="col-12">
												<div class="form-check">
												<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
												<label class="form-check-label" for="invalidCheck3">
													Agree to terms and conditions
												</label>
												<div id="invalidCheck3Feedback" class="invalid-feedback">
													You must agree before submitting.
												</div>
												</div>
											</div>
											<div class="col-12">
												<button class="btn btn-primary" type="submit">Submit form</button>
											</div>
											</form>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label tx-15">Tooltips</h6>
										</div>
									</div>
									<div class="card-body">
										<form class="row g-3 needs-validation" novalidate>
											<div class="col-md-4 position-relative">
												<label for="validationTooltip01" class="form-label tx-semibold">First name</label>
												<input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
												<div class="valid-tooltip">
												Looks good!
												</div>
											</div>
											<div class="col-md-4 position-relative">
												<label for="validationTooltip02" class="form-label tx-semibold">Last name</label>
												<input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
												<div class="valid-tooltip">
												Looks good!
												</div>
											</div>
											<div class="col-md-4 position-relative">
												<label for="validationTooltipUsername" class="form-label tx-semibold">Username</label>
												<div class="input-group has-validation">
												<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
												<input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
												<div class="invalid-tooltip">
													Please choose a unique and valid username.
												</div>
												</div>
											</div>
											<div class="col-md-6 position-relative">
												<label for="validationTooltip03" class="form-label tx-semibold">City</label>
												<input type="text" class="form-control" id="validationTooltip03" required>
												<div class="invalid-tooltip">
												Please provide a valid city.
												</div>
											</div>
											<div class="col-md-3 position-relative">
												<label for="validationTooltip04" class="form-label tx-semibold">State</label>
												<select class="form-select" id="validationTooltip04" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
												</select>
												<div class="invalid-tooltip">
												Please select a valid state.
												</div>
											</div>
											<div class="col-md-3 position-relative">
												<label for="validationTooltip05" class="form-label tx-semibold">Zip</label>
												<input type="text" class="form-control" id="validationTooltip05" required>
												<div class="invalid-tooltip">
												Please provide a valid zip.
												</div>
											</div>
											<div class="col-12">
												<button class="btn btn-primary" type="submit">Submit form</button>
											</div>
											</form>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="main-content-label tx-15">Supported elements</h6>
										</div>
									</div>
									<div class="card-body">
										<form class="was-validated">
											<div class="mb-3">
												<label for="validationTextarea" class="form-label tx-semibold">Textarea</label>
												<textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
												<div class="invalid-feedback">
												Please enter a message in the textarea.
												</div>
											</div>

											<div class="form-check mb-3">
												<input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
												<label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
												<div class="invalid-feedback">Example invalid feedback text</div>
											</div>

											<div class="form-check">
												<input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
												<label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
											</div>

											<div class="form-check mb-3">
												<input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
												<label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
												<div class="invalid-feedback">More example invalid feedback text</div>
											</div>

											<div class="mb-3">
												<select class="form-select" required aria-label="select example">
												<option value="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
												</select>
												<div class="invalid-feedback">Example invalid select feedback</div>
											</div>

											<div class="mb-3">
												<input type="file" class="form-control" aria-label="file example" required>
												<div class="invalid-feedback">Example invalid form file feedback</div>
											</div>

											<div class="mb-3">
												<button class="btn btn-primary" type="submit" disabled>Submit form</button>
											</div>
											</form>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL PARSLEY JS -->
        <script src="{{asset('build/assets/plugins/parsleyjs/parsley.min.js')}}"></script>

        <!-- INTERNAL FORM-VALIDATION JS -->
		@vite('resources/assets/js/form-validation.js')


		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


        <!-- FORM-VALIDATION JS -->
		@vite('resources/assets/js/form-vallidations.js')

@endsection