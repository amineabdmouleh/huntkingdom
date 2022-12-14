@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tags</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tags</li>
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
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Default Tags</h6>
											<p class="text-muted card-sub-title">Below is the basic tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-default mt-1 mb-1">Default</span>
												<span class="tag tag-primary mt-1 mb-1">Primary</span>
												<span class="tag tag-success mt-1 mb-1">Success</span>
												<span class="tag tag-info mt-1 mb-1">Info</span>
												<span class="tag tag-warning mt-1 mb-1">Warning</span>
												<span class="tag tag-danger mt-1 mb-1">Danger</span>
												<span class="tag tag-dark mt-1 mb-1">Dark</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pill Tags</h6>
											<p class="text-muted card-sub-title">Below is the pill tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-default tag-pill mt-1 mb-1">Default</span>
												<span class="tag tag-primary tag-pill mt-1 mb-1">Primary</span>
												<span class="tag tag-success tag-pill mt-1 mb-1">Success</span>
												<span class="tag tag-info tag-pill mt-1 mb-1">Info</span>
												<span class="tag tag-warning tag-pill mt-1 mb-1">Warning</span>
												<span class="tag tag-danger tag-pill mt-1 mb-1">Danger</span>
												<span class="tag tag-dark tag-pill mt-1 mb-1">Dark</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Tags</h6>
											<p class="text-muted card-sub-title">Below is the transparent tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-primary-transparent mt-1 mb-1">Primary</span>
												<span class="tag tag-secondary-transparent mt-1 mb-1">Primary</span>
												<span class="tag tag-success-transparent mt-1 mb-1">Success</span>
												<span class="tag tag-info-transparent mt-1 mb-1">Info</span>
												<span class="tag tag-warning-transparent mt-1 mb-1">Warning</span>
												<span class="tag tag-danger-transparent mt-1 mb-1">Danger</span>
												<span class="tag tag-dark-transparent mt-1 mb-1">Dark</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Pill Tags</h6>
											<p class="text-muted card-sub-title">Below is the transparent tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-primary-transparent tag-pill mt-1 mb-1">Primary</span>
												<span class="tag tag-secondary-transparent tag-pill mt-1 mb-1">Primary</span>
												<span class="tag tag-success-transparent tag-pill mt-1 mb-1">Success</span>
												<span class="tag tag-info-transparent tag-pill mt-1 mb-1">Info</span>
												<span class="tag tag-warning-transparent tag-pill mt-1 mb-1">Warning</span>
												<span class="tag tag-danger-transparent tag-pill mt-1 mb-1">Danger</span>
												<span class="tag tag-dark-transparent tag-pill mt-1 mb-1">Dark</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="link">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Link Tags</h6>
											<p class="text-muted card-sub-title">Below is the link tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<a href="javascript:void(0);" class="tag tag-default">First tag</a>
													<a href="javascript:void(0);" class="tag tag-default">Second tag</a>
													<a href="javascript:void(0);" class="tag tag-default">Third tag</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="avatar">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Avatar Tags</h6>
											<p class="text-muted card-sub-title">Below is the avatar tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-default">
														<span class="tag-avatar cover-image" style="background-image: url({{asset('build/assets/img/users/1.jpg')}})"></span>
														<span class="mt-1">Victoria</span>
													</span>
													<span class="tag tag-default">
														<span class="tag-avatar cover-image" style="background-image: url({{asset('build/assets/img/users/2.jpg')}})"></span>
														<span class="mt-1">Victoria</span>
													</span>
													<span class="tag tag-default">
														<span class="tag-avatar cover-image" style="background-image: url({{asset('build/assets/img/users/3.jpg')}})"></span>
														<span class="mt-1">Victoria</span>
													</span>
													<span class="tag tag-default">
														<span class="tag-avatar cover-image" style="background-image: url({{asset('build/assets/img/users/4.jpg')}})"></span>
														<span class="mt-1">Victoria</span>
													</span>
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
											<h6 class="main-content-label mb-1">Color Tags</h6>
											<p class="text-muted card-sub-title">Below is the color tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-blue">Blue tag</span>
												<span class="tag tag-azure">Azure tag</span>
												<span class="tag tag-indigo">Indigo tag</span>
												<span class="tag tag-purple">Purple tag</span>
												<span class="tag tag-pink">Pink tag</span>
												<span class="tag tag-red">Red tag</span>
												<span class="tag tag-orange">Orange tag</span>
												<span class="tag tag-yellow">Yellow tag</span>
												<span class="tag tag-lime">Lime tag</span>
												<span class="tag tag-green">Green tag</span>
												<span class="tag tag-teal">Teal tag</span>
												<span class="tag tag-cyan">Cyan tag</span>
												<span class="tag tag-gray">Gray tag</span>
												<span class="tag tag-gray-dark">Dark Gray tag</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="default">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Default Tags Addon</h6>
											<p class="text-muted card-sub-title">Below is the default  tags addon example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-default">
														One
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default">
														Two
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default">
														Three
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default">
														Four
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
												</div>
												<div class="tags mt-2">
													<span class="tag tag-default">
														npm
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-dark">
														npm
														<a href="javascript:void(0)" class="tag-addon tag-danger"><i class="fe fe-activity"></i></a>
													</span>
													<span class="tag tag-default">
														bundle
														<a href="javascript:void(0)"><span class="tag-addon tag-success">passing</span></a>
													</span>
													<span class="tag tag-dark">
														CSS gzip size
														<a href="javascript:void(0)"><span class="tag-addon tag-warning">20.9 kB</span></a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="inptags">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Input Tags</h6>
											<p class="text-muted card-sub-title">Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="form-group mb-0">
													<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
												</div>
												<div class="form-group mb-0">
													<select multiple data-role="tagsinput" class="form-control">
														<option value="jQuery">jQuery</option>
														<option value="Angular">Angular</option>
														<option value="React">React</option>
														<option value="Vue">Vue</option>
													</select>
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

		<!-- PEITY JS -->
		<script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('resources/assets/js/widgets.js')

		
        <!-- INTERNAL INPUTTAGS JS -->
	    <script src="{{asset('build/assets/plugins/inputtags/inputtags.js')}}"></script>

@endsection
