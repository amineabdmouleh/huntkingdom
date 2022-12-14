@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Badges</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Badges</li>
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
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units..</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1>Heading 01 <span class="badge bg-light">New</span></h1>
												<h2>Heading 02 <span class="badge bg-light">New</span></h2>
												<h3>Heading 03 <span class="badge bg-light">New</span></h3>
												<h4>Heading 04 <span class="badge bg-light">New</span></h4>
												<h5>Heading 05 <span class="badge bg-light">New</span></h5>
												<h6>Heading 06 <span class="badge bg-light">New</span></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Badges</h6>
											<p class="text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units..</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1 class="text-primary">Heading 01 <span class="badge bg-primary">New</span></h1>
												<h2 class="text-secondary">Heading 02 <span class="badge bg-secondary">New</span></h2>
												<h3 class="text-warning">Heading 03 <span class="badge bg-warning">New</span></h3>
												<h4 class="text-danger">Heading 04 <span class="badge bg-danger">New</span></h4>
												<h5 class="text-info">Heading 05 <span class="badge bg-info">New</span></h5>
												<h6 class="text-success">Heading 06 <span class="badge bg-success">New</span></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="contextual">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Contextual Variations</h6>
											<p class="text-muted card-sub-title">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<span class="badge bg-primary">Primary</span>
													<span class="badge bg-secondary">Secondary</span>
													<span class="badge bg-success">Success</span>
													<span class="badge bg-danger">Danger</span>
													<span class="badge bg-warning">Warning</span>
													<span class="badge bg-info">Info</span>
													<span class="badge bg-light">Light</span>
													<span class="badge bg-dark">Dark</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pill Badges</h6>
											<p class="text-muted card-sub-title">Use the <code>.rounded-pill</code> modifier class to make badges more rounded.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<span class="badge rounded-pill bg-primary">Primary</span>
													<span class="badge rounded-pill bg-secondary">Secondary</span>
													<span class="badge rounded-pill bg-success">Success</span>
													<span class="badge rounded-pill bg-danger">Danger</span>
													<span class="badge rounded-pill bg-warning">Warning</span>
													<span class="badge rounded-pill bg-info">Info</span>
													<span class="badge rounded-pill bg-light">Light</span>
													<span class="badge rounded-pill bg-dark">Dark</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Light Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<span class="badge bg-primary-light">Primary</span>
													<span class="badge bg-secondary-light">Secondary</span>
													<span class="badge bg-success-light">Success</span>
													<span class="badge bg-danger-light">Danger</span>
													<span class="badge bg-warning-light">Warning</span>
													<span class="badge bg-info-light">Info</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Gradient Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<span class="badge bg-primary-gradient">Primary</span>
													<span class="badge bg-secondary-gradient">Secondary</span>
													<span class="badge bg-success-gradient">Success</span>
													<span class="badge bg-danger-gradient">Danger</span>
													<span class="badge bg-warning-gradient">Warning</span>
													<span class="badge bg-info-gradient">Info</span>
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
											<h6 class="main-content-label mb-1">Buttons With Square Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn ripple btn-primary">
													Notifications <span class="badge bg-light ms-2">4</span>
													</button>
													<button type="button" class="btn ripple btn-secondary">
													Notifications <span class="badge bg-light ms-2">78</span>
													</button>
													<button type="button" class="btn ripple btn-success">
													Notifications <span class="badge bg-light ms-2">12</span>
													</button>
													<button type="button" class="btn ripple btn-info">
													Notifications <span class="badge bg-light ms-2">67</span>
													</button>
													<button type="button" class="btn ripple btn-danger">
													Notifications <span class="badge bg-light ms-2">45</span>
													</button>
													<button type="button" class="btn ripple btn-warning">
													Notifications <span class="badge bg-light ms-2">120</span>
													</button>
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
											<h6 class="main-content-label mb-1">Buttons With Rounded Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn ripple btn-primary">
													Notifications <span class="badge bg-light ms-2 rounded-pill">4</span>
													</button>
													<button type="button" class="btn ripple btn-secondary">
													Notifications <span class="badge bg-light ms-2 rounded-pill">78</span>
													</button>
													<button type="button" class="btn ripple btn-success">
													Notifications <span class="badge bg-light ms-2 rounded-pill">12</span>
													</button>
													<button type="button" class="btn ripple btn-info">
													Notifications <span class="badge bg-light ms-2 rounded-pill">67</span>
													</button>
													<button type="button" class="btn ripple btn-danger">
													Notifications <span class="badge bg-light ms-2 rounded-pill">45</span>
													</button>
													<button type="button" class="btn ripple btn-warning">
													Notifications <span class="badge bg-light ms-2 rounded-pill">120</span>
													</button>
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
											<h6 class="main-content-label mb-1">Outline Buttons With Square Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn ripple btn-outline-primary">
													Notifications <span class="badge bg-primary ms-2">4</span>
													</button>
													<button type="button" class="btn ripple btn-outline-secondary">
													Notifications <span class="badge bg-secondary ms-2">78</span>
													</button>
													<button type="button" class="btn ripple btn-outline-success">
													Notifications <span class="badge bg-success ms-2">12</span>
													</button>
													<button type="button" class="btn ripple btn-outline-info">
													Notifications <span class="badge bg-info ms-2">67</span>
													</button>
													<button type="button" class="btn ripple btn-outline-danger">
													Notifications <span class="badge bg-danger ms-2">45</span>
													</button>
													<button type="button" class="btn ripple btn-outline-warning">
													Notifications <span class="badge bg-warning ms-2">120</span>
													</button>
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
											<h6 class="main-content-label mb-1">Outline Buttons With Rounded Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn ripple btn-outline-primary">
													Notifications <span class="badge bg-primary ms-2 rounded-pill">4</span>
													</button>
													<button type="button" class="btn ripple btn-outline-secondary">
													Notifications <span class="badge bg-secondary ms-2 rounded-pill">78</span>
													</button>
													<button type="button" class="btn ripple btn-outline-success">
													Notifications <span class="badge bg-success ms-2 rounded-pill">12</span>
													</button>
													<button type="button" class="btn ripple btn-outline-info">
													Notifications <span class="badge bg-info ms-2 rounded-pill">67</span>
													</button>
													<button type="button" class="btn ripple btn-outline-danger">
													Notifications <span class="badge bg-danger ms-2 rounded-pill">45</span>
													</button>
													<button type="button" class="btn ripple btn-outline-warning">
													Notifications <span class="badge bg-warning ms-2 rounded-pill">120</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="link">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Link Badges</h6>
											<p class="text-muted card-sub-title">Using the contextual badge classes on an element quickly provide actionable badges with hover and focus states.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<a class="badge bg-primary" href="javascript:;">Primary</a>
													<a class="badge bg-secondary" href="javascript:;">Secondary</a>
													<a class="badge bg-success" href="javascript:;">Success</a>
													<a class="badge bg-danger" href="javascript:;">Danger</a>
													<a class="badge bg-warning" href="javascript:;">Warning</a>
													<a class="badge bg-info" href="javascript:;">Info</a>
													<a class="badge bg-light" href="javascript:;">Light</a>
													<a class="badge bg-dark" href="javascript:;">Dark</a>
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

        <!-- INTERNAL PEITY JS -->
        <script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('resources/assets/js/widgets.js')
@endsection
