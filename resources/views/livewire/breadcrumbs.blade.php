@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Breadcrumbs</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Simple Breadcrumbs</h6>
											<p class="text-muted card-sub-title">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb breadcrumb-basic">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">About</a>
														</li>
													</ol>
													<ol class="breadcrumb breadcrumb-basic">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item active">
															Library
														</li>
													</ol>
													<ol class="breadcrumb breadcrumb-basic mg-b-0">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">Library</a>
														</li>
														<li class="breadcrumb-item active"> Data</li>
													</ol>
												</nav>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="divider">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Divider</h6>
											<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb using different divider.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb breadcrumb-style2">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">About</a>
														</li>
													</ol>
													<ol class="breadcrumb breadcrumb-style2">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item active">
															Library
														</li>
													</ol>
													<ol class="breadcrumb breadcrumb-style2 mb-0">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">Library</a>
														</li>
														<li class="breadcrumb-item active"> Data</li>
													</ol>
												</nav>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Icon Breadcrumbs</h6>
											<p class="text-muted card-sub-title">The example below is the breadcrumb with an icon</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb breadcrumb-basic">
														<li class="breadcrumb-item">
															<i class="fe fe-home me-1 fs-14" aria-hidden="true"></i>
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">About</a>
														</li>
													</ol>
													<ol class="breadcrumb breadcrumb-basic">
														<li class="breadcrumb-item">
															<i class="fe fe-home me-1 fs-14" aria-hidden="true"></i>
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item active">
															<i class="fe fe-folder me-1 fs-14" aria-hidden="true"></i>
															Library
														</li>
													</ol>
													<ol class="breadcrumb breadcrumb-basic mg-b-0">
														<li class="breadcrumb-item">
															<i class="fe fe-home me-1 fs-14" aria-hidden="true"></i>
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<i class="fe fe-folder me-1 fs-14" aria-hidden="true"></i>
															<a href="javascript:;">Library</a>
														</li>
														<li class="breadcrumb-item active">
															<i class="fe fe-book me-1 fs-14" aria-hidden="true"></i>
															Data
														</li>
													</ol>
												</nav>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="center">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Breadcrumbs-Center align</h6>
											<p class="text-muted card-sub-title">The example below is the center aligment of the breadcrumb</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="breadcrumb-3">
													<ol class="breadcrumb breadcrumb-style1 mb-0">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">Library</a>
														</li>
														<li class="breadcrumb-item active"> Data</li>
													</ol>
												</nav>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="right">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Breadcrumbs-Right align</h6>
											<p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="breadcrumb-4">
													<ol class="breadcrumb breadcrumb-style1 mb-0">
														<li class="breadcrumb-item">
															<a href="javascript:;">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="javascript:;">Library</a>
														</li>
														<li class="breadcrumb-item active"> Data</li>
													</ol>
												</nav>
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
