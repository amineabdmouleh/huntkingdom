@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">ChartJs Charts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">ChartJs Charts</li>
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
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Line Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartLine"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Area Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartArea"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar1"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar2"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Donut  Chart</h6>
											<p class="text-muted  card-sub-title">Below are an example of data in a donut chart.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartPie"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pie Chart</h6>
											<p class="text-muted  card-sub-title">Below are an example of data in a pie chart.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartDonut"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Radar  Chart</h6>
											<p class="text-muted  card-sub-title">Below are an example of data in a radar chart.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartRadar"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Polar Chart</h6>
											<p class="text-muted  card-sub-title">Below are an example of data in a polar chart.</p>
										</div>
										<div class="chartjs-wrapper-demo">
											<canvas id="chartPolar"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CHARTJS CHARTS JS -->
        <script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
		@vite('resources/assets/js/chart.chartjs.js')
		
@endsection
