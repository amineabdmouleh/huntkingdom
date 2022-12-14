@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Flot Charts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Flot Charts</li>
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
											<h6 class="main-content-label mb-1">Bar Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example..</p>
										</div>
										<div class="ht-200 ht-sm-300" id="flotBar1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar Chart2</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example..</p>
										</div>
										<div class="ht-200 ht-sm-300" id="flotBar2"></div>
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
										<div class="ht-200 ht-sm-300" id="flotArea1"></div>
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
										<div class="ht-200 ht-sm-300" id="flotArea2"></div>
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
											<h6 class="main-content-label mb-1">Line Chart1</h6>
											<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
										</div>
										<div class="ht-200 ht-sm-300" id="flotLine1"></div>
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
										<div class="ht-200 ht-sm-300" id="flotLine2"></div>
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
											<h6 class="main-content-label mb-1">Pie Chart</h6>
											<p class="text-muted  card-sub-title">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
										</div>
										<div class="ht-200 ht-sm-300" id="flotPie1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Donut Chart</h6>
											<p class="text-muted  card-sub-title">Labels can be hidden if the slice is less than a given percentage of the Donut.</p>
										</div>
										<div class="ht-200 ht-sm-300" id="flotPie2"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL FLOAT CHART JS -->
        <script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
		@vite('resources/assets/js/chart.flot.js')
		
@endsection
