@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Echart</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Echart</li>
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
											<h6 class="main-content-label mb-1">Stacked Bar Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic Stacked Bar chart example.</p>
										</div>
										<div>
											<div id="echart5" class="echart-height"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Horizonatal Stacked Bar Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic horizontal stacked bar chart example.</p>
										</div>
										<div>
											<div id="echart6" class="echart-height"></div>
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
											<h6 class="main-content-label mb-1">Line Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic Bar chart example.</p>
										</div>
										<div>
											<div id="echart1" class="echart-height"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Combination line & Bar Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic combination line & bar chart example.</p>
										</div>
										<div>
											<div id="echart2" class="echart-height"></div>
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
											<h6 class="main-content-label mb-1">Horizonatal Line Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic horizontal line chart example.</p>
										</div>
										<div>
											<div id="echart3" class="echart-height"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Horizonatal Combination line & Bar Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic horizontal combination line & bar chart example.</p>
										</div>
										<div>
											<div id="echart4" class="echart-height"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL ECHARTS JS -->
        <script src="{{asset('build/assets/plugins/echarts/echarts.js')}}"></script>
		@vite('resources/assets/js/chart.echarts.js')
		
@endsection
