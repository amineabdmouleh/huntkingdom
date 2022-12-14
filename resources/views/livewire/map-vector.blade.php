@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Vector Maps</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
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
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vector Map: World</h6>
											<p class="text-muted card-sub-title">Below is an example of displaying the world map.</p>
										</div>
										<div class="ht-300 ht-lg-400" id="vmap"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vector Map: Canada</h6>
											<p class="text-muted card-sub-title">Below is an example of displaying the canada map.</p>
										</div>
										<div class="ht-300" id="vmap3"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vector Map: USA</h6>
											<p class="text-muted card-sub-title">Below is an example of displaying the usa map.</p>
										</div>
										<div class="ht-300" id="vmap2"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL JQVMAP JS -->
        <script src="{{asset('build/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
		@vite('resources/assets/js/vector-map.js')


@endsection
