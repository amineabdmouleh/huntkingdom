@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Wishlist</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
							<div class="col-md-12 col-lg-12 col-xl-12">
								<div class="row row-sm">
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/1.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Men's Shoes</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$49.00</span>
																<span class="fs-18">$39.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/2.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Hand Bag</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$30.00</span>
																<span class="fs-18">$21.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/3.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Wrist Watch</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$29.00</span>
																<span class="fs-18">$15.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/4.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Long Frock</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$32.00</span>
																<span class="fs-18">$22.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/5.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Girls Sandals</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$30.00</span>
																<span class="fs-18">$21.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/6.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Sofa Chair</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$29.00</span>
																<span class="fs-18">$15.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class=" mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/7.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Laptop</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$200.00</span>
																<span class="fs-18">$149.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (19)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/8.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Soft Toy</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$49.00</span>
																<span class="fs-18">$39.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/9.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Smart Phone</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$49.00</span>
																<span class="fs-18">$39.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/10.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Girls Skirt</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$30.00</span>
																<span class="fs-18">$21.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/11.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Fashion Ring</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$29.00</span>
																<span class="fs-18">$15.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/12.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:;"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:;">Sunglasses</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$32.00</span>
																<span class="fs-18">$22.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (32)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<nav>
									<ul class="pagination justify-content-end">
										<li class="page-item disabled"><a class="page-link" href="javascript:;">Prev</a></li>
										<li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:;">4</a></li>
										<li class="page-item"><a class="page-link" href="javascript:;">5</a></li>
										<li class="page-item"><a class="page-link" href="javascript:;">Next</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')


@endsection
