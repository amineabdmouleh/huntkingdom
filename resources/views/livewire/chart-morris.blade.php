@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Morrirs Charts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Morrirs Charts</li>
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
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Line Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisLine1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Line Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisLine2"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Area Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisArea1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Area Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisArea2"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisBar1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisBar2"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Stacked Bar Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example with option <i>stacked</i> set to <i>true</i>.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisBar3"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Stacked Bar Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example with option <i>stacked</i> set to <i>true</i>.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisBar4"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Donut Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic donut chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="donutexample"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Donut Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic donut chart example.</p>
										</div>
										<div class="morris-wrapper-demo" id="morrisDonut2"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL MORRIS CHART JS -->
        <script src="{{asset('build/assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/morris.js/morris.min.js')}}"></script>
		@vite('resources/assets/js/chart.morris.js')


        <!-- MULTIPLE SELECT JS -->
        <script src="{{asset('build/assets/plugins/multipleselect/multiple-select.js')}}"></script>
        <script src="{{asset('build/assets/plugins/multipleselect/multi-select.js')}}"></script>

@endsection
