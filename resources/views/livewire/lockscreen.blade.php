@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

		@section('switcher-icon')

		<div class="page main-signin-wrapper">
		@endsection

			<!-- ROW -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card border-0">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-6 col-xs-12 col-sm-12 login_form rounded-start-11">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body main-profile-overview mt-3 mb-3">
											<div class="mobilelogo">
												<img src="{{asset('build/assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 dark-logo" alt="logo">
												<img src="{{asset('build/assets/img/brand/logo-light.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 light-logo" alt="logo">
											</div>
											<div class="clearfix"></div>
											<h2 class="text-start mb-2">Lock Screen</h2>
											<p class="mb-4 text-muted tx-13 ms-0 text-start">Unlock your screen by entering password</p>
											<form>
												<div class="text-start d-flex float-start mb-4 user-lock">
													<img alt="avatar avatar-sm" class="rounded-circle mb-0" src="{{asset('build/assets/img/users/6.jpg')}}">
													<div class="my-auto">
														<p class="my-auto ms-3 text-uppercase tx-semibold">Dennis Mark</p>
														<input hidden type="text" autocomplete="username" value="Dennis Mark">
													</div>
												</div>
												<div class="form-group">
													<input class="form-control border-end-0" placeholder="Enter your password" type="password" autocomplete="new-password" data-bs-toggle="password">
												</div>
												<a class="btn btn-primary btn-block mt-4 mb-4" href="{{url('index')}}">Unlock</a>
												<div class="signin-or-title">
													<h5 class="fs-12 mb-1 title tx-normal">or</h5>
												</div>
												<div class="pb-1 pt-4">
													<div class="text-center socialicons">
														<a href="https://myaccount.google.com/" target="_blank" class="btn ripple btn-danger-transparent rounded-circle" role="button"><i class="mdi mdi-google"></i></a>
														<a href="https://www.facebook.com/" target="_blank" class="btn ripple btn-primary-transparent rounded-circle" role="button"><i class="mdi mdi-facebook"></i></a>
														<a href="https://twitter.com/" target="_blank" class="btn ripple btn-info-transparent rounded-circle" role="button"><i class="mdi mdi-twitter"></i></a>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 d-none d-lg-block bg-primary details rounded-end-11">
								<div class="mt-2 pt-4 ps-5 ms-3 pe-5 pos-relative">
									<img src="{{asset('build/assets/img/brand/logo-light.png')}}" class="header-brand-img mb-2 mt-2" alt="logo">
									<div class="clearfix"></div>
									<img src="{{asset('build/assets/img/pngs/user.png')}}" class="ht-250 mb-0" alt="user">
									<h2 class="mt-4 text-white tx-normal">Unlock</h2>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Enter your password to access the admin.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END ROW -->
@endsection

@section('scripts')

		<!-- BOOTSTRAP SHOW PASSWORD JS -->
		<script src="{{asset('build/assets/plugins/bootstrap/js/bootstrap-show-password.min.js')}}"></script>
@endsection
