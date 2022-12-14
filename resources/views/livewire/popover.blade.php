@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Popover</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Popover</li>
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
								<div class="card custom-card" id="static">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Static Example</h6>
											<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>
										</div>
										<div class="popover-static-demo">
											<div class="row row-sm">
												<div class="col-md-6">
													<div class="popover bs-popover-top">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mg-t-30 mg-md-t-0">
													<div class="popover bs-popover-bottom">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-start">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-end">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="default">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Default Popover</h6>
											<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>
										</div>
										<div class="text-wrap">
											<div class="example bg-light">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-2">
														<button class="btn ripple btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel." data-bs-placement="left" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover left" type="button">Popover Left</button>
													</div>
													<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-0">
														<button class="btn ripple btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel." data-bs-placement="bottom" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover bottom" type="button">Popover Bottom</button>
													</div>
													<div class="col-sm-6 col-lg-2 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover top" type="button">Popover Top</button>
													</div>
													<div class="col-sm-6 col-lg-2 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel." data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover right" type="button">Popover Right</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card custom-card" id="color">
											<div class="card-body">
												<div>
													<h6 class="main-content-label mb-1">Colored Head Popover</h6>
													<p class="text-muted card-sub-title">A demonstration of colored title background of popover available in all four directions.</p>
												</div>
												<div class="text-wrap">
													<div class="example bg-light">
														<div class="row row-sm tx-center">
															<div class="col-sm-6 col-lg-2 mg-sm-t-5">
																<button class="btn ripple btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-primary" title="Popover top" type="button">Header Color</button>
															</div>
															<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-5">
																<button class="btn ripple btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-secondary"  title="Popover top" type="button">Header Color</button>
															</div>
															<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-5">
																<button class="btn ripple btn-success" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-success"  title="Popover top" type="button">Header Color</button>
															</div>
															<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-5">
																<button class="btn ripple btn-info" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-info"  title="Popover top" type="button">Header Color</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="card custom-card" id="full">
											<div class="card-body">
												<div>
													<h6 class="main-content-label mb-1">Full Colored Popover</h6>
													<p class="text-muted card-sub-title">A demonstration of colored body background of popover available in all four directions.</p>
												</div>
												<div class="text-wrap">
													<div class="example bg-light">
														<div class="row row-sm tx-center">
															<div class="col-sm-6 col-lg-2 mg-sm-t-5">
																<button class="btn ripple btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="primary"  title="Popover top" type="button">Full Color</button>
															</div>
															<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-5">
																<button class="btn ripple btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="secondary"  title="Popover top" type="button">Full Color</button>
															</div>
															<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-5">
																<button class="btn ripple btn-info" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="info"  title="Popover top" type="button">Full Color</button>
															</div>
															<div class="col-sm-6 col-lg-2 mg-t-30 mg-sm-t-5">
																<button class="btn ripple btn-success" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="success"  title="Popover top" type="button">Full Color</button>
															</div>
														</div>
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

        <!-- POPOVER JS -->
		@vite('resources/assets/js/popover.js')


        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>

@endsection
