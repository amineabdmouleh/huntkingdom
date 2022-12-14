@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Navigation</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Navigation</li>
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
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic navigation</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3">
													<nav class="nav main-nav flex-column flex-md-row">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link disabled" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pills Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a pill navigation</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3">
													<nav class="nav nav-pills flex-column flex-md-row">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link disabled" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="vertical">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vertical Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic navigation in a vertical mode</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-2">
													<nav class="nav main-nav-column">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link disabled" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="verticallpill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vertical Pills Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a pill navigation in vertical mode</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-2">
													<nav class="nav nav-pills flex-column">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link disabled" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="hori">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Center Nav Alignment</h6>
											<p class="text-muted card-sub-title">A navigation with center and right in which left is the default.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 border rounded-6">
													<nav class="nav main-nav flex-column flex-md-row justify-content-center">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Right Nav Alignment</h6>
											<p class="text-muted card-sub-title">A navigation with center and right in which left is the default.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 border rounded-6">
													<nav class="nav main-nav flex-column flex-md-row justify-content-end">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored background Nav Variations</h6>
											<p class="text-muted card-sub-title">A navigation with colored nav that wrapped the navigation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-primary mb-3 rounded-6">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link" href="javascript:;">Custom</a>
													</nav>
												</div>
												<div class="p-3 bg-success mb-3 rounded-6">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link" href="javascript:;">Custom</a>
													</nav>
												</div>
												<div class="p-3 bg-secondary rounded-6">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="javascript:;">Home</a>
														<a class="nav-link" href="javascript:;">About</a>
														<a class="nav-link" href="javascript:;">Pages</a>
														<a class="nav-link" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="colored">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Background Nav Variations</h6>
											<p class="text-muted card-sub-title">A navigation with Transparent Background nav that wrapped the navigation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-primary-light mb-3 rounded-6">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active text-primary" href="javascript:;">Home</a>
														<a class="nav-link text-primary" href="javascript:;">About</a>
														<a class="nav-link text-primary" href="javascript:;">Pages</a>
														<a class="nav-link text-primary" href="javascript:;">Custom</a>
													</nav>
												</div>
												<div class="p-3 bg-success-light mb-3 rounded-6">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active text-success" href="javascript:;">Home</a>
														<a class="nav-link text-success" href="javascript:;">About</a>
														<a class="nav-link text-success" href="javascript:;">Pages</a>
														<a class="nav-link text-success" href="javascript:;">Custom</a>
													</nav>
												</div>
												<div class="p-3 bg-secondary-light rounded-6">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active text-secondary" href="javascript:;">Home</a>
														<a class="nav-link text-secondary" href="javascript:;">About</a>
														<a class="nav-link text-secondary" href="javascript:;">Pages</a>
														<a class="nav-link text-secondary" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Icon with Text Navigation</h6>
											<p class="text-muted card-sub-title">A navigation with Icon and Text.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<ul class="nav nav-pills" id="tabs_2" role="tablist">
													<li class="nav-item">
														<a class="nav-link border py-2 px-3 m-2 active" id="tab1" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="true">
															<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border py-2 px-3 m-2" id="tab2" data-bs-toggle="tab" href="#tabs_2_2" role="tab" aria-selected="false">
															<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link py-2 px-3 border show m-2" id="tab3" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
															<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border py-2 px-3 m-2" id="tab4" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
															<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border py-2 px-3 m-2" id="tab5" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
															<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Icon Navigation</h6>
											<p class="text-muted card-sub-title">A navigation with Icons.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<ul class="nav nav-pills" id="tabs_3" role="tablist">
													<li class="nav-item m-2">
														<a class="nav-link text-primary bg-light" href="javascript:void(0);">
															<span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-home fs-13"></i></span>
														</a>
													</li>
													<li class="nav-item m-2">
														<a class="nav-link active" href="javascript:void(0);">
															<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-13"></i></span>
														</a>
													</li>
													<li class="nav-item m-2">
														<a class="nav-link text-primary bg-light" href="javascript:void(0);">
															<span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-play fs-13"></i></span>
														</a>
													</li>
													<li class="nav-item m-2">
														<a class="nav-link text-primary bg-light" href="javascript:void(0);">
															<span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-layers fs-13"></i></span>
														</a>
													</li>
													<li class="nav-item m-2">
														<a class="nav-link text-primary bg-light" href="javascript:void(0);">
															<span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-image fs-13"></i> </span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="underline">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Underline Navigation</h6>
											<p class="text-muted card-sub-title">Below is a type of navigation that have a line at the bottom of active link.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-1">
													<nav class="nav main-nav-line flex-column flex-md-row">
														<a class="nav-link active" data-bs-toggle="tab" href="javascript:;">Home</a>
														<a class="nav-link" data-bs-toggle="tab" href="javascript:;">About</a>
														<a class="nav-link" data-bs-toggle="tab" href="javascript:;">Pages</a>
														<a class="nav-link" data-bs-toggle="tab" href="javascript:;">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Justified Navigation</h6>
											<p class="text-muted card-sub-title">Below is a type of navigation that will automatically justify the navs.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="nav nav-justified">
													<a class="nav-link active" data-bs-toggle="tab" href="javascript:;">Home</a>
													<a class="nav-link" data-bs-toggle="tab" href="javascript:;">About</a>
													<a class="nav-link" data-bs-toggle="tab" href="javascript:;">Pages</a>
													<a class="nav-link disabled" data-bs-toggle="tab" href="javascript:;">Custom</a>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('modals')

@endsection

@section('scripts')