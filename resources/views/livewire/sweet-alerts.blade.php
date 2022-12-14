@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Sweet Alert</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
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
							<div class="col-sm-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Sample Sweet Alerts</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<input type="button" class="btn btn-success mt-2" value="Success Alert" id="click">
												<input type="button" class="btn btn-warning mt-2" value="Warning Alert" id="click1">
												<input type="button" class="btn btn-danger mt-2" value="Danger Alert" id="click2">
												<input type="button" class="btn btn-info mt-2" value="Info Alert" id="click3">
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Form Sweet Alerts</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="form-group">
													<label class="tx-semibold">Title</label>
													<input type="text" class="form-control" placeholder="Title text" id="title">
												</div>
												<div class="form-group">
													<label class="tx-semibold">Message</label>
													<input type="text" class="form-control" placeholder="Your message" id="message">
												</div>
												<input type="button" class="btn btn-primary mt-2" value="Simple Alert" id="but1">&nbsp;
												<input type="button" class="btn btn-secondary mt-2" value="Alert with Title" id="but2">&nbsp;
												<input type="button" class="btn btn-info mt-2" value="Alert with Image" id="but3">&nbsp;
												<input type="button" class="btn btn-warning mt-2" value="With Timer" id="but4">
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


        <!-- SWEET-ALERT JS -->
        <script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		@vite('resources/assets/js/sweet-alert.js')


@endsection
