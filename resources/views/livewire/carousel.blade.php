@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Carousel</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Carousel</li>
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
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Basic Carousel</h6>
											<p class="text-muted card-sub-title">Here’s a carousel with slides only.</p>
										</div>
										<div class="">
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/8.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/9.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/10.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Controls</h6>
											<p class="text-muted card-sub-title">Adding the previous and next controls.</p>
										</div>
										<div>
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExample2">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/11.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/12.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/13.jpg')}}">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExample2" role="button" data-bs-slide="prev">
													<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carouselExample2" role="button" data-bs-slide="next">
													<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Indicators</h6>
											<p class="text-muted card-sub-title">You can also add the indicators to the carousel, alongside the controls too</p>
										</div>
										<div>
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExample3">
												<ol class="carousel-indicators">
													<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample3"></li>
													<li data-bs-slide-to="1" data-bs-target="#carouselExample3"></li>
													<li data-bs-slide-to="2" data-bs-target="#carouselExample3"></li>
												</ol>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/13.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/15.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/16.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Captions</h6>
											<p class="text-muted card-sub-title">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item.</code></p>
										</div>
										<div>
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExample4">
												<ol class="carousel-indicators">
													<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample4"></li>
													<li data-bs-slide-to="1" data-bs-target="#carouselExample4"></li>
													<li data-bs-slide-to="2" data-bs-target="#carouselExample4"></li>
												</ol>
												<div class="carousel-inner bg-dark">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100 op-3" src="{{asset('build/assets/img/media/17.jpg')}}">
														<div class="carousel-caption d-none d-md-block">
															<h5 class="tx-semibold">First Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100 op-3" src="{{asset('build/assets/img/media/18.jpg')}}">
														<div class="carousel-caption d-none d-md-block">
															<h5 class="tx-semibold">Second Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100 op-3" src="{{asset('build/assets/img/media/19.jpg')}}">
														<div class="carousel-caption d-none d-md-block">
															<h5 class="tx-semibold">Third Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Top Indicators</h6>
											<p class="text-muted card-sub-title">Adding the indicators to the carousel at the top position.</p>
										</div>
										<div id="carousel-indicators1" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-top-indicators">
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Top Right Indicators</h6>
											<p class="text-muted card-sub-title">Adding the indicators to the carousel at the top right position.</p>
										</div>
										<div id="carousel-indicators2" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-top-right-indicators">
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="2" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/3.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/5.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Top Left Indicators</h6>
											<p class="text-muted card-sub-title">Adding the indicators to the carousel at the top left position.</p>
										</div>
										<div id="carousel-indicators3" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-top-left-indicators">
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="2" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/6.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Bottom Right Indicators</h6>
											<p class="text-muted card-sub-title">Adding the indicators to the carousel at the bottom right position.</p>
										</div>
										<div id="carousel-indicators4" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-bottom-right-indicators">
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="2" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Bottom Left Indicators</h6>
											<p class="text-muted card-sub-title">Adding the indicators to the carousel at the bottom left position.</p>
										</div>
										<div id="carousel-indicators5" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-bottom-left-indicators">
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="2" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/8.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/9.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('build/assets/img/media/10.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel with Background Gradient Color Captions</h6>
											<p class="text-muted card-sub-title">Carousel having gradient background color with the captions.</p>
										</div>
										<div class="carousel slide" data-bs-ride="carousel" id="carouselExample5">
											<ol class="carousel-indicators">
												<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample5"></li>
												<li data-bs-slide-to="1" data-bs-target="#carouselExample5"></li>
												<li data-bs-slide-to="2" data-bs-target="#carouselExample5"></li>
											</ol>
											<div class="carousel-inner bg-dark">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/gradient1.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5 class="tx-semibold">First Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/gradient2.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5 class="tx-semibold">Second Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/gradient3.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5 class="tx-semibold">Third Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel with Background Color Captions</h6>
											<p class="text-muted card-sub-title">Carousel having background color with the captions.</p>
										</div>
										<div class="carousel slide" data-bs-ride="carousel" id="carouselExample6">
											<ol class="carousel-indicators">
												<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample6"></li>
												<li data-bs-slide-to="1" data-bs-target="#carouselExample6"></li>
												<li data-bs-slide-to="2" data-bs-target="#carouselExample6"></li>
											</ol>
											<div class="carousel-inner bg-dark">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/blue.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5 class="tx-semibold">First Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/red.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5 class="tx-semibold">Second Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/media/green.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5 class="tx-semibold">Third Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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

@endsection
