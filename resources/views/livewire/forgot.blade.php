@extends('layouts.custom-app')

@section('styles')

@endsection

@section('switcher-icon')
<div class="page main-signin-wrapper">
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
										<div class="card-body mt-2 mb-2">
											<div class="mobilelogo">
												<img src="{{asset('build/assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 dark-logo" alt="logo">
												<img src="{{asset('build/assets/img/brand/logo-light.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 light-logo" alt="logo">
											</div>
											<div class="clearfix"></div>
											<h2 class="text-start mb-2">Forgot Password</h2>
											<p class="mb-3 text-muted tx-13 ms-0 text-start">Don't worry! We will help you to recover your password.</p>
											<form>
												<div class="form-group text-start">
													<label class="tx-medium">Enter the Email Address associated with your account</label>
													<input class="form-control" placeholder="Enter email" type="email" autocomplete="username" value="">
												</div>
												<a class="btn btn-primary btn-block" href="{{url('index')}}">Request reset link</a>
											</form>
											<div class="card-footer border-top-0 ps-0 mt-3 text-start mb-0 ">
												<p>Did you remembered your password?</p>
												<p class="mb-0">Try to <a href="{{url('signin')}}">Signin</a></p>
											</div>
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
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 d-none d-lg-block text-center bg-primary details rounded-end-11">
								<div class="mt-4 pt-3 p-2 pos-relative">
									<img src="{{asset('build/assets/img/brand/logo-light.png')}}" class="header-brand-img mb-2 mt-2" alt="logo">
									<div class="clearfix"></div>
									<img src="{{asset('build/assets/img/pngs/user.png')}}" class="ht-200 mb-0" alt="user">
									<h2 class="mt-4 text-white tx-normal">Reset Your Password</h2>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Don't worry! We will help you to recover your password</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END ROW -->
@endsection

@section('scripts')

@endsection
