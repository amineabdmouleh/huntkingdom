@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Avatars</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Avatar</li>
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
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Avatar Sizes</h6>
											<p class="text-muted card-sub-title">An avatar can have different sizes like larger and smaller avatar.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-xs">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}">
													</div>
													<div class="avatar avatar-sm">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
													</div>
													<div class="avatar">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
													</div>
													<div class="avatar avatar-lg">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}">
													</div>
													<div class="avatar avatar-xl d-none d-sm-flex">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
													</div>
													<div class="avatar avatar-xxl d-none d-sm-flex">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Radius Avatar Sizes</h6>
											<p class="text-muted card-sub-title">An avatar can have different sizes like larger and smaller avatar.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-xs">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/1.jpg')}}">
													</div>
													<div class="avatar avatar-sm">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/2.jpg')}}">
													</div>
													<div class="avatar">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/3.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/4.jpg')}}">
													</div>
													<div class="avatar avatar-lg">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/5.jpg')}}">
													</div>
													<div class="avatar avatar-xl d-none d-sm-flex">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/6.jpg')}}">
													</div>
													<div class="avatar avatar-xxl d-none d-sm-flex">
														<img alt="avatar" class="rounded-7" src="{{asset('build/assets/img/users/7.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Initials Avatars</h6>
											<p class="text-muted card-sub-title">An avatar can have a temporary use of user's initial name while their photos are not yet available.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-xs bg-primary">
														A
													</div>
													<div class="avatar avatar-sm bg-secondary">
														U
													</div>
													<div class="avatar bg-info">
														C
													</div>
													<div class="avatar avatar-md bg-success">
														X
													</div>
													<div class="avatar avatar-lg bg-warning">
														E
													</div>
													<div class="avatar avatar-xl d-none d-sm-flex bg-danger">
														M
													</div>
													<div class="avatar avatar-xxl d-none d-sm-flex bg-pink">
														NB
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Initials Avatars</h6>
											<p class="text-muted card-sub-title">An avatar can have a temporary use of user's initial name while their photos are not yet available.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-xs bg-primary-transparent text-primary">
														A
													</div>
													<div class="avatar avatar-sm bg-secondary-transparent text-secondary">
														U
													</div>
													<div class="avatar bg-info-transparent text-info">
														C
													</div>
													<div class="avatar avatar-md bg-success-transparent text-success">
														X
													</div>
													<div class="avatar avatar-lg bg-warning-transparent text-warning">
														E
													</div>
													<div class="avatar avatar-xl d-none d-sm-flex bg-danger-transparent text-danger">
														M
													</div>
													<div class="avatar avatar-xxl d-none d-sm-flex bg-pink-transparent text-pink">
														NB
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Avatar Square Shapes</h6>
											<p class="text-muted card-sub-title">An avatar can have different shapes like square and round, radius avatars.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-md">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/4.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/5.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/6.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Avatar Radius Shapes</h6>
											<p class="text-muted card-sub-title">An avatar can have different shapes like square and round, radius avatars.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-md">
														<img alt="avatar" class="radius" src="{{asset('build/assets/img/users/4.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="radius" src="{{asset('build/assets/img/users/5.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="radius" src="{{asset('build/assets/img/users/6.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Avatar Rounded Shapes</h6>
											<p class="text-muted card-sub-title">An avatar can have different shapes like square and round, radius avatars.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group avatar-list">
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}">
													</div>
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Status Indicator with Square Shape</h6>
											<p class="text-muted card-sub-title">An avatar can have a status indicator to indicate users availability.</p>
										</div>
										<div class="text-wrap mb-3">
											<div class="example d-flex">
												<div class="avatar-list d-flex">
													<div class="main-avatar avatar online">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/9.jpg')}}">
													</div>
													<div class="main-avatar avatar offline">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/2.jpg')}}">
													</div>
													<div class="main-avatar avatar bg-warning">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/3.jpg')}}">
													</div>
													<div class="main-avatar avatar bg-danger">
														<img alt="avatar" class="square" src="{{asset('build/assets/img/users/10.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Status Indicator with Radius Shape</h6>
											<p class="text-muted card-sub-title">An avatar can have a status indicator to indicate users availability.</p>
										</div>
										<div class="text-wrap mb-3">
											<div class="example d-flex">
												<div class="avatar-list d-flex">
													<div class="main-avatar avatar online">
														<img alt="avatar" class="rounded-10" src="{{asset('build/assets/img/users/9.jpg')}}">
													</div>
													<div class="main-avatar avatar offline">
														<img alt="avatar" class="rounded-10" src="{{asset('build/assets/img/users/2.jpg')}}">
													</div>
													<div class="main-avatar avatar bg-warning">
														<img alt="avatar" class="rounded-10" src="{{asset('build/assets/img/users/3.jpg')}}">
													</div>
													<div class="main-avatar avatar bg-danger">
														<img alt="avatar" class="rounded-10" src="{{asset('build/assets/img/users/10.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Status Indicator with Rounded Shape</h6>
											<p class="text-muted card-sub-title">An avatar can have a status indicator to indicate users availability.</p>
										</div>
										<div class="text-wrap mb-3">
											<div class="example d-flex">
												<div class="avatar-list d-flex">
													<div class="main-avatar avatar online">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/9.jpg')}}">
													</div>
													<div class="main-avatar avatar offline">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
													</div>
													<div class="main-avatar avatar bg-warning">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}">
													</div>
													<div class="main-avatar avatar bg-danger">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}">
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