@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Thumbnails</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
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
								<div class="card custom-card" id="thumb">
									<div class="card-body ht-100p ">
										<div>
											<h6 class="main-content-label mb-1">Image Thumbnail</h6>
											<p class="text-muted card-sub-title">Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-12 col-md-3">
														<a href="javascript:;"><img alt="Responsive image" class="img-thumbnail" src="{{asset('build/assets/img/media/9.jpg')}}"></a>
													</div>
													<div class="col-12 col-md-3 mg-t-10 mg-md-t-0">
														<a href="javascript:;"><img alt="Responsive image" class="img-thumbnail" src="{{asset('build/assets/img/media/13.jpg')}}"></a>
													</div>
													<div class="col-12 col-md-3 mg-t-10 mg-md-t-0">
														<a href="javascript:;"><img alt="Responsive image" class="img-thumbnail" src="{{asset('build/assets/img/media/14.jpg')}}"></a>
													</div>
													<div class="col-12 col-md-3 mg-t-10 mg-md-t-0">
														<a href="javascript:;"><img alt="Responsive image" class="img-thumbnail" src="{{asset('build/assets/img/media/15.jpg')}}"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="aligning">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Aligning Thumbnails</h6>
											<p class="text-muted card-sub-title">Align images with the helper float classes or text alignment classes.</p>
										</div>
										<div class="text-wrap mb-3">
											<div class="example">
												<div class="clearfix">
													<a href="javascript:;"><img src="{{asset('build/assets/img/media/10.jpg')}}" class="float-sm-start wd-100p wd-sm-250 rounded-6 m-1" alt="img"></a>
													<a href="javascript:;"><img src="{{asset('build/assets/img/media/11.jpg')}}" class="float-sm-end wd-100p wd-sm-250 mg-t-10 mg-sm-t-0 rounded-6 m-1" alt="img"></a>
												</div>
											</div>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="clearfix">
													<a href="javascript:;"><img src="{{asset('build/assets/img/media/4.jpg')}}" class="mx-auto d-block wd-100p wd-sm-250 rounded-6" alt="img"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="contentthumb">
									<div class="card-body ht-100p ">
										<div>
											<h6 class="main-content-label mb-1">Custom content Thumbnails</h6>
											<p class="text-muted card-sub-title">Using the images in custom content thumbnails</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-xxl-3 col-md-6 col-lg-6">
														<div class="img-thumbnail">
															<a href="javascript:;">
																<img src="{{asset('build/assets/img/media/9.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h5 class="tx-medium">Thumbnail Label</h5>
																<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																<div class="btn btn-list">
																	<a href="javascript:;" class="btn ripple btn-primary" role="button">Button</a>
																	<a href="javascript:;" class="btn ripple btn-success" role="button">Button</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xxl-3 col-md-6 col-lg-6 mg-t-10 mg-md-t-0 mg-xxl-t-0">
														<div class="img-thumbnail">
															<a href="javascript:;">
																<img src="{{asset('build/assets/img/media/2.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h5 class="tx-medium">Thumbnail Label</h5>
																<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																<div class="btn btn-list">
																	<a href="javascript:;" class="btn ripple btn-primary" role="button">Button</a>
																	<a href="javascript:;" class="btn ripple btn-success" role="button">Button</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xxl-3 col-md-6 col-lg-6 mg-t-10 mg-xxl-t-0">
														<div class="img-thumbnail">
															<a href="javascript:;">
																<img src="{{asset('build/assets/img/media/8.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h5 class="tx-medium">Thumbnail Label</h5>
																<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																<div class="btn btn-list">
																	<a href="javascript:;" class="btn ripple btn-primary" role="button">Button</a>
																	<a href="javascript:;" class="btn ripple btn-success" role="button">Button</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xxl-3 col-md-6 col-lg-6 mg-t-10 mg-xxl-t-0">
														<div class="img-thumbnail">
															<a href="javascript:;">
																<img src="{{asset('build/assets/img/media/4.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h5 class="tx-medium">Thumbnail Label</h5>
																<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																<div class="btn btn-list">
																	<a href="javascript:;" class="btn ripple btn-primary" role="button">Button</a>
																	<a href="javascript:;" class="btn ripple btn-success" role="button">Button</a>
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
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>
@endsection
