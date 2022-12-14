@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Shop</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Shop</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<a href="{{url('ecommerce-addproduct')}}" role="button" class="btn btn-white btn-icon-text my-2 me-2">
										<i class="fe fe-plus"></i>
										<span>Add Product</span>
									</a>
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
							<div class="col-md-12 col-lg-12 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="row row-sm">
											<div class="col-sm-12">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search ...">
													<span class="input-group-btn">
														<button class="btn ripple btn-primary" type="button">Search</button>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Categories & Filters</h6>
									</div>
									<div class="card-body">
										<div class="custom-controls-stacked">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
												<span class="custom-control-label">Men</span>
											</label>
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
												<span class="custom-control-label">Women</span>
											</label>
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
												<span class="custom-control-label">Kids</span>
											</label>
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
												<span class="custom-control-label">Others</span>
											</label>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Category</h6>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label tx-medium">Occasion</label>
											<select name="beast" id="select-beast" class="form-control select2-no-search">
												<option label="Select"></option>
												<option value="1">Party Wear</option>
												<option value="2">Casual Wear</option>
												<option value="3">Wedding</option>
												<option value="4">Festive</option>
											</select>
										</div>
										<div class="form-group mb-0">
											<label class="form-label tx-medium">Type</label>
											<select name="beast" id="select-beast1" class="form-control select2-no-search">
												<option label="Select"></option>
												<option value="1">Western wear</option>
												<option value="2">Foot wear</option>
												<option value="3">Top wear</option>
												<option value="4">Bootom wear</option>
												<option value="5">Beauty Groming</option>
												<option value="6">Accessories</option>
											</select>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Color</h6>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="azure" class="colorinput-input" checked="">
													<span class="colorinput-color bg-primary"></span>
												</label>
											</div>
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="indigo" class="colorinput-input">
													<span class="colorinput-color bg-indigo"></span>
												</label>
											</div>
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="teal" class="colorinput-input">
													<span class="colorinput-color bg-teal"></span>
												</label>
											</div>
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="pink" class="colorinput-input">
													<span class="colorinput-color bg-pink"></span>
												</label>
											</div>
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="red" class="colorinput-input">
													<span class="colorinput-color bg-danger"></span>
												</label>
											</div>
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="orange" class="colorinput-input">
													<span class="colorinput-color bg-orange"></span>
												</label>
											</div>
											<div class="">
												<label class="colorinput">
													<input name="color" type="checkbox" value="yellow" class="colorinput-input">
													<span class="colorinput-color bg-warning"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Price</h6>
									</div>
									<div class="card-body">
										<div class="form-group mb-0">
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
												<span class="custom-control-label">Under $25</span>
											</label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2">
												<span class="custom-control-label">$25 to $50</span>
											</label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2">
												<span class="custom-control-label">$50 to $100</span>
													</label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2">
												<span class="custom-control-label">Other (specify)</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-9">
								<div class="row row-sm">
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<div class="products-badge">
															<span class="badge bg-success text-white">In Stock</span>
														</div>
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/01.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/02.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-info">-30%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<div class="products-badge">
															<span class="badge bg-danger text-white">No Stock</span>
														</div>
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/03.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/04.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-success">-50%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/05.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-warning">-20%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<div class="products-badge">
															<span class="badge bg-secondary text-white">New</span>
														</div>
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/06.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/07.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-primary">-10%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (19)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<div class="products-badge">
															<span class="badge bg-info text-white">Best Deal</span>
														</div>
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/08.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<div class="products-badge">
															<span class="badge bg-success text-white">In Stock</span>
														</div>
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/09.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/010.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-info">-30%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<div class="products-badge">
															<span class="badge bg-danger text-white">No Stock</span>
														</div>
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/011.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-3 col-sm-6">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-productdetails')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('build/assets/img/pngs/012.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:;"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-success">-50%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fe fe-shopping-cart"></i>
																<span>Add to Cart</span>
															</a>
														</div>
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

														<p class="fs-13 text-muted mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia.</p>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (32)</a>
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

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')

		
@endsection
