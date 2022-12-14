@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Toast</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Toast</li>
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
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">Toasts are as flexible as you need and have very little required markup.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-static-toast">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<img src="{{asset('build/assets/img/brand/icon.png')}}" class="rounded me-2" alt="img" height="16">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
															<small class="text-muted me-2">11 mins ago</small>
																<button aria-label="Close" class="ms-2 mb-1 btn-close tx-normal" data-bs-dismiss="toast" type="button"></button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Live Toast Example</h6>
											<p class="text-muted card-sub-title">Click the button below to show a toast</p>
										</div>
										<div class="text-wrap">
											<div class="example p-5">
												<div class="demo-static-toast">
													<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
													<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
														<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
															<div class="toast-header bg-success">
																<img src="{{asset('build/assets/img/brand/icon-light.png')}}" class="rounded me-2" alt="img" height="16">
																<strong class="me-auto">Dashplex</strong>
																<small>11 mins ago</small>
																<button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
																</div>
																<div class="toast-body">
																Hello, world! This is a toast message.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Customized Toast</h6>
											<p class="text-muted card-sub-title">Customize your Toasts as flexible as you need and have very little required markup.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-static-toast">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-body">
															Hello, world! This is a toast message.
															<div class="mt-2 pt-2 border-top">
																<button class="btn btn-sm btn-success btn"  type="button">
																	Action
																</button>
																<button class="btn btn-sm btn-danger btn" data-bs-dismiss="toast" type="button">
																	Close
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Toast</h6>
											<p class="text-muted card-sub-title">Toasts are as flexible as you need and have very little required markup.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-md-4 col-lg-6 col-xl-4 mt-2">
														<div class="demo-static-toast">
															<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																<div class="toast-header bg-primary">
																	<i class="fe fe-bell me-2"></i>
																	<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
																	<small class="text-white me-2">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 btn-close btn-close-white tx-normal" data-bs-dismiss="toast" type="button"></button>
																</div>
																<div class="toast-body">
																	Hello, world! This is a toast message.
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-lg-6 col-xl-4 mt-2">
														<div class="demo-static-toast">
															<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																<div class="toast-header bg-success">
																	<i class="fe fe-check-circle me-2"></i>
																	<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
																	<small class="text-white me-2">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 btn-close btn-close-white tx-normal" data-bs-dismiss="toast" type="button"></button>
																</div>
																<div class="toast-body">
																	Hello, world! This is a toast message.
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-lg-6 col-xl-4 mt-2">
														<div class="demo-static-toast">
															<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																<div class="toast-header bg-secondary">
																	<i class="fe fe-map-pin me-2"></i>
																	<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
																	<small class="text-white me-2">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 btn-close btn-close-white tx-normal" data-bs-dismiss="toast" type="button"></button>
																</div>
																<div class="toast-body">
																	Hello, world! This is a toast message.
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-lg-6 col-xl-4 mt-2">
														<div class="demo-static-toast">
															<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																<div class="toast-header bg-warning">
																	<i class="fe fe-alert-triangle me-2"></i>
																	<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
																	<small class="text-white me-2">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 btn-close btn-close-white tx-normal" data-bs-dismiss="toast" type="button"></button>
																</div>
																<div class="toast-body">
																	Hello, world! This is a toast message.
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-lg-6 col-xl-4 mt-2">
														<div class="demo-static-toast">
															<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																<div class="toast-header bg-info">
																	<i class="fe fe-info me-2"></i>
																	<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
																	<small class="text-white me-2">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 btn-close btn-close-white tx-normal" data-bs-dismiss="toast" type="button"></button>
																</div>
																<div class="toast-body">
																	Hello, world! This is a toast message.
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-lg-6 col-xl-4 mt-2">
														<div class="demo-static-toast">
															<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																<div class="toast-header bg-dark">
																	<i class="fe fe-clock me-2"></i>
																	<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
																	<small class="text-white me-2">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 btn-close btn-close-white tx-normal" data-bs-dismiss="toast" type="button"></button>
																</div>
																<div class="toast-body">
																	Hello, world! This is a toast message.
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
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="stacking">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Stacking Toast</h6>
											<p class="text-muted card-sub-title">When you have multiple toasts, we default to vertiaclly stacking them in a readable manner.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-static-toast">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<img src="{{asset('build/assets/img/brand/icon.png')}}" class="rounded me-2" alt="img" height="16">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6>
															<small class="text-muted me-2">Just now</small>
															<button aria-label="Close" class="ms-2 mb-1 btn-close" data-bs-dismiss="toast" type="button"></button>
														</div>
														<div class="toast-body">
															See? Just like this.
														</div>
													</div>
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<img src="{{asset('build/assets/img/brand/icon.png')}}" class="rounded me-2" alt="img" height="16">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6><small class="text-muted me-2">11 mins ago</small>
															<button aria-label="Close" class="ms-2 mb-1 btn-close tx-normal" data-bs-dismiss="toast" type="button"></button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="place">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Placement</h6>
											<p class="text-muted card-sub-title">Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle.</p>
										</div>
										<div class="text-wrap mb-3">
											<div class="example">
												<div class="ht-150 pos-relative mb-3">
													<div class="demo-static-toast pos-absolute t-10 r-10">
														<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
															<div class="toast-header">
																<img src="{{asset('build/assets/img/brand/icon.png')}}" class="rounded me-2" alt="img" height="16">
																<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6><small class="text-muted me-2">11 mins ago</small>
																<button aria-label="Close" class="ms-2 mb-1 btn-close tx-normal" data-bs-dismiss="toast" type="button"></button>
															</div>
															<div class="toast-body">
																Hello, world! This is a toast message.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-wrap mb-3">
											<div class="example">
												<div class="demo-static-toast d-flex justify-content-center align-items-center">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<img src="{{asset('build/assets/img/brand/icon.png')}}" class="rounded me-2" alt="img" height="16">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Dashplex</h6><small class="text-muted me-2">11 mins ago</small>
															<button aria-label="Close" class="ms-2 mb-1 btn-close tx-normal" data-bs-dismiss="toast" type="button"></button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
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

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>

@endsection
