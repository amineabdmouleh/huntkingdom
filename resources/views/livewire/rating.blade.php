@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Ratings</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ratings</li>
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
						<div class="row row-cards">
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Star Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-1" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Heart Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-2" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Multi Star Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-3" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Multi Heart Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-6" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Multi Circle Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-4" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Thumbs-Up Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-5" data-stars="2">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-cards">
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Basic Star Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Rounded Star Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars  block my-rating-4" data-rating="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Gradient Color Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-5" data-rating="5">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Execute callback when Rating</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-6"   data-rating="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Read Only Mode</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-7"  data-rating="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Use fullstars</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-8" data-rating="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">On Hover Event</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-9" data-rating="2">
										</div>
										<span class="live-rating"></span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h6 class="card-title"><label class="main-content-label">Rating Level Colors</label></h6>
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-10" data-rating="2">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')
		

        <!-- STAR RATING JS -->
        <script src="{{asset('build/assets/plugins/rating/jquery-rate-picker.js')}}"></script>
        <script src="{{asset('build/assets/plugins/rating/rating-picker.js')}}"></script>

        <!-- STAR RATINGS-2 JS -->
        <script src="{{asset('build/assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
        <script src="{{asset('build/assets/plugins/ratings-2/star-rating.js')}}"></script>

@endsection
