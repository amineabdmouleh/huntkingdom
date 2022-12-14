@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Spinners</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Spinners</li>
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
							<div class="col-md-12 col-lg-3">
								<div class="card custom-card" id="bspinner">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Border & Growing Spinners</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="spinner-border" role="status">
													<span class="visually-hidden">Loading...</span>
												</div>
												<div class="spinner-grow" role="status">
													<span class="visually-hidden">Loading...</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="bcolor">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Border & Growing Colors Spinners</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<div class="spinner-border text-primary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-secondary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-success" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-danger" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-warning" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-info" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-light" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border text-dark" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-primary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-secondary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-success" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-danger" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-warning" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-info" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-light" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow text-dark" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-3">
								<div class="card custom-card" id="size">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Size</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<div class="spinner-border spinner-border-sm text-primary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow spinner-grow-sm text-secondary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-border spinner-border-md text-primary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
													<div class="spinner-grow spinner-grow-md text-secondary" role="status">
														<span class="visually-hidden">Loading...</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-sm">
							<div class="col-lg-4 col-sm-6">
								<div class="card custom-card" id="loaders">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Circle Loader</h6>
											<p class="text-muted card-sub-title">css loading animations</p>
										</div>
										<div class="text-center">
											<div class="lds-circle"><div></div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card custom-card" id="loaders1">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Ring Loader</h6>
											<p class="text-muted card-sub-title">css loading animations</p>
										</div>
										<div class="text-center">
											<div class="lds-dual-ring"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card custom-card" id="loaders2">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Lines Loader</h6>
											<p class="text-muted card-sub-title">css loading animations</p>
										</div>
										<div class="text-center">
											<div class="lds-facebook"><div></div><div></div><div></div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card custom-card" id="loaders3">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Heart Loader</h6>
											<p class="text-muted card-sub-title">css loading animations</p>
										</div>
										<div class="text-center">
											<div class="lds-heart"><div></div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card custom-card" id="loaders4">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Ripple Loader</h6>
											<p class="text-muted card-sub-title">css loading animations</p>
										</div>
										<div class="text-center">
											<div class="lds-ripple"><div></div><div></div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card custom-card" id="loaders5">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Spinner Loader</h6>
											<p class="text-muted card-sub-title">css loading animations</p>
										</div>
										<div class="text-center">
											<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-sm">
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="align">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alignment</h6>
											<p class="text-muted card-sub-title">Use flexbox utilities or text alignment utilities to place spinners exactly where you need them in any situation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<div class="text-start mg-b-20">
														<div class="spinner-border text-primary" role="status">
															<span class="visually-hidden">Loading...</span>
														</div>
													</div>
													<div class="text-center mg-b-20">
														<div class="spinner-border text-success" role="status">
															<span class="visually-hidden">Loading...</span>
														</div>
													</div>
													<div class="text-end">
														<div class="spinner-border text-info" role="status">
															<span class="visually-hidden">Loading...</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-sm">
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="buton">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Button with Spinners</h6>
											<p class="text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<button class="btn ripple btn-primary mb-1" type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> <span class="visually-hidden">Loading...</span></button>
													<button class="btn ripple btn-primary mb-1" type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Loading...</button>
													<button class="btn ripple btn-primary mb-1" type="button"><span aria-hidden="true" class="spinner-grow spinner-grow-sm" role="status"></span> <span class="visually-hidden">Loading...</span></button>
													<button class="btn ripple btn-primary mb-1" type="button"><span aria-hidden="true" class="spinner-grow spinner-grow-sm" role="status"></span> Loading...</button>
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
