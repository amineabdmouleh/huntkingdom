@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tooltip</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tooltip</li>
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
							<div class="col-xl-12 col-lg-12">
								<div class="card custom-card" id="default">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Default Tooltip</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Static Example
										</div>
										<div class="tooltip-static-demo mg-b-20">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip bs-tooltip-bottom" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip bs-tooltip-top" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-start" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-end" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Live Example
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button class="btn ripple btn-primary" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30  mg-sm-t-0">
														<button class="btn ripple btn-secondary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-info" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-success" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card custom-card" id="colored">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Tooltip</h6>
											<p class="text-muted card-sub-title">Colored tooltip. Four options are available: top, right, bottom, and left aligned.</p>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Static Example
										</div>
										<div class="tooltip-static-demo mg-b-20">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip tooltip-secondary bs-tooltip-bottom" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-info bs-tooltip-start" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-success bs-tooltip-end" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Live Example
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button class="btn ripple btn-primary" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button class="btn ripple btn-secondary" data-bs-placement="bottom" data-bs-toggle="tooltip-secondary" title="Tooltip on bottom" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-info" data-bs-placement="left" data-bs-toggle="tooltip-info" title="Tooltip on left" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-success" data-bs-placement="right" data-bs-toggle="tooltip-success" title="Tooltip on right" type="button">Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- INTERNAL TOOLTIP JS -->
		@vite('resources/assets/js/tooltip.js')
		

@endsection
