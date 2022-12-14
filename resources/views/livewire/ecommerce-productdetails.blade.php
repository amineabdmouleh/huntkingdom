@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Product Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card productdesc">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-5 col-lg-12 col-md-12">
												<div class="row">
													<div class="col-xl-2 col-md-2">
														<div class="clearfix carousel-slider">
															<div id="thumbcarousel" class="carousel slide" data-interval="false">
																<div class="carousel-inner">
																	<div class="carousel-item active">
																		<div data-bs-target="#carousel" data-bs-slide-to="0" class="thumb my-2"><img src="{{asset('build/assets/img/pngs/sandal-5.png')}}" alt="img" class="border rounded-6"></div>
																		<div data-bs-target="#carousel" data-bs-slide-to="1" class="thumb my-2"><img src="{{asset('build/assets/img/pngs/sandal-1.png')}}" alt="img" class="border rounded-6"></div>
																		<div data-bs-target="#carousel" data-bs-slide-to="2" class="thumb my-2"><img src="{{asset('build/assets/img/pngs/sandal-4.png')}}" alt="img" class="border rounded-6"></div>
																		<div data-bs-target="#carousel" data-bs-slide-to="3" class="thumb my-2"><img src="{{asset('build/assets/img/pngs/sandal-2.png')}}" alt="img" class="border rounded-6"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-10 col-sm-12">
														<div class="product-carousel my-2">
															<div id="carousel" class="carousel slide" data-bs-ride="false">
																<div class="carousel-inner border">
																	<div class="carousel-item active"><img src="{{asset('build/assets/img/pngs/sandal-5.png')}}" alt="img" class="img-fluid mx-auto  d-block rounded-6">
																	</div>
																	<div class="carousel-item"> <img src="{{asset('build/assets/img/pngs/sandal-1.png')}}" alt="img" class="img-fluid mx-auto  d-block rounded-6">
																	</div>
																	<div class="carousel-item"> <img src="{{asset('build/assets/img/pngs/sandal-4.png')}}" alt="img" class="img-fluid mx-auto  d-block rounded-6">
																	</div>
																	<div class="carousel-item"> <img src="{{asset('build/assets/img/pngs/sandal-2.png')}}" alt="img" class="img-fluid mx-auto  d-block rounded-6">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-7 col-lg-12 col-md-12">
												<div class="mt-2 mb-2">
													<h3 class=" mb-3 tx-semibold">Leather Sandals for Women</h3>
														<p class="text-muted float-start me-3">
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fas fa-star-half-alt text-warning"></span>
													</p>
													<p class="text-muted mb-4">( 154 Customers Review )</p>
													<h6 class="text-success text-uppercase">51 % Off</h6>
													<h5 class="mb-2 tx-semibold">Price : <span class="text-muted me-2 ms-2"><del class="fs-13">$199 USD</del></span>$99 USD</h5>
													<p class="tx-13 text-muted">FREE SHIPPING on orders above $299 </p>
													<h6 class="mt-4 fs-16 tx-semibold">Description</h6>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
													<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
													<div class="">
														<span class="tx-semibold fs-16">Available :</span>
														<span class="font-weight-normal text-success ms-2">In Stock</span>
													</div>
												</div>
												<div class="row row-sm">
													<div class="col-12 d-flex">
														<h6 class="mt-2 fs-16 me-4 tx-semibold">Quantity :</h6>
														<div class="handle-counter" id="handleCounter">
															<button class="counter-minus btn">
																<i class="fas fa-minus tx-10"></i>
															</button>
															<input type="text" value="2">
															<button class="counter-plus btn">
																<i class="fas fa-plus tx-10"></i>
															</button>
														</div>
													</div>
												</div>
												<div class="mt-4 btn-list">
													<a href="{{url('ecommerce-cart')}}" class="btn ripple btn-primary rounded-6"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
													<a href="{{url('ecommerce-checkout')}}" class="btn ripple btn-success rounded-6"><i class="fe fe-credit-card"> </i> Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="panel desc-tabs border-0 p-0">
											<div class="tab-menu-heading">
												<div class="tabs-menu ">
													<ul class="nav panel-tabs">
														<li class="">
															<a href="#tab11" class="active" data-bs-toggle="tab">
																<i class="fe fe-info"></i>
																<span>Specifications</span>
															</a>
														</li>
														<li>
															<a href="#tab12" data-bs-toggle="tab">
																<i class="fe fe-edit"></i>
																<span>Description</span>
															</a>
														</li>
														<li>
															<a href="#tab13" data-bs-toggle="tab">
																<i class="fe fe-menu"></i>
																<span>Details</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body border mt-3 rounded-6">
												<div class="tab-content">
													<div class="tab-pane active" id="tab11">
														<div class="table-responsive">
															<table class="table mb-0  text-nowrap">
																<tbody>
																	<tr>
																		<th scope="row">Category :</th>
																		<td>Footwear</td>
																	</tr>
																	<tr>
																		<th scope="row">Color :</th>
																		<td>Peach</td>
																	</tr>
																	<tr>
																		<th scope="row">Brand :</th>
																		<td>Ducimus</td>
																	</tr>
																	<tr>
																		<th scope="row">Size-UK :</th>
																		<td>6 </td>
																	</tr>
																	<tr>
																		<th scope="row">Material :</th>
																		<td>Leather</td>
																	</tr>
																	<tr>
																		<th scope="row">Heel Type :</th>
																		<td>Flats</td>
																	</tr>
																	<tr>
																		<th scope="row">Lifestyle :</th>
																		<td>Casual, Formal, Party Wear</td>
																	</tr>
																	<tr>
																		<th scope="row">Warranty Summary :</th>
																		<td>1 Year</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane" id="tab12">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
														<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
													</div>
													<div class="tab-pane" id="tab13">
														<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3 tx-15">Reviews</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="media">
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
													</div>
													<div class="media-body ms-3 d-sm-flex">
														<div class="">
															<div class="">
																<span class="tx-15 text-dark tx-semibold mb-0">Edwin Andrews</span>
																<span class="fs-11 text-muted mb-0 d-inline-block">- 2 days ago</span>
															</div>
															<div class="static-rate fs-10">
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fas fa-star-half-alt text-warning" aria-hidden="true"></i>
															</div>
															<p class="">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris</p>
															<div class="media mg-t-15">
																<div class="avatar avatar-sm">
																	<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
																</div>
																<div class="media-body ms-3 d-flex">
																	<div class="">
																		<p class="tx-15 text-dark tx-semibold mb-0">Elsie Ralph</p>
																		<p class="fs-11 text-muted mb-0">2 days ago</p>
																		<p class="mb-1">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris</p>
																		<div class="text-end text-sm-start">
																			<a href="javascript:;" class="btn btn-primary btn-sm">Reply</a>
																			<a href="javascript:;" class="btn btn-light btn-sm">Like</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="ms-auto float-end">
															<a href="javascript:;" class="contact-icon text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="Like" aria-label="Like"><i class="fe fe-heart"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-wrap mt-2">
											<div class="example">
												<div class="media">
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}">
													</div>
													<div class="media-body ms-3 d-sm-flex">
														<div class="">
															<div class="">
																<span class="tx-15 text-dark tx-semibold mb-0">Ruther Prek</span>
																<span class="fs-11 text-muted mb-0 d-inline-block">- 2 days ago</span>
															</div>
															<div class="static-rate fs-10">
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fas fa-star-half-alt text-warning" aria-hidden="true"></i>
																<i class="far fa-star text-warning" aria-hidden="true"></i>
															</div>
															<p class="">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris</p>
															<div class="media mg-t-15">
																<div class="avatar avatar-sm">
																	<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
																</div>
																<div class="media-body ms-3 d-flex">
																	<div class="">
																		<p class="tx-15 text-dark tx-semibold mb-0">Hilone Cia</p>
																		<p class="fs-11 text-muted mb-0">2 days ago</p>
																		<p class="mb-1">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris</p>
																		<div class="text-end text-sm-start">
																			<a href="javascript:;" class="btn btn-primary btn-sm">Reply</a>
																			<a href="javascript:;" class="btn btn-light btn-sm">Like</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="ms-auto float-end">
															<a href="javascript:;" class="contact-icon text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="Like" aria-label="Like"><i class="fe fe-heart"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-wrap mt-2">
											<div class="example">
												<div class="media">
													<div class="avatar avatar-md">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}">
													</div>
													<div class="media-body ms-3 d-sm-flex">
														<div class="">
															<div class="">
																<span class="tx-15 text-dark tx-semibold mb-0">Henry Elsia</span>
																<span class="fs-11 text-muted mb-0 d-inline-block">- 2 days ago</span>
															</div>
															<div class="static-rate fs-10">
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fa fa-star text-warning" aria-hidden="true"></i>
																<i class="fas fa-star-half-alt text-warning" aria-hidden="true"></i>
																<i class="far fa-star text-warning" aria-hidden="true"></i>
															</div>
															<p class="">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris</p>
															<div class="media mg-t-15">
																<div class="avatar avatar-sm">
																	<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}">
																</div>
																<div class="media-body ms-3 d-flex">
																	<div class="">
																		<p class="tx-15 text-dark tx-semibold mb-0">Ben John</p>
																		<p class="fs-11 text-muted mb-0">2 days ago</p>
																		<p class="mb-1">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris</p>
																		<div class="text-end text-sm-start">
																			<a href="javascript:;" class="btn btn-primary btn-sm">Reply</a>
																			<a href="javascript:;" class="btn btn-light btn-sm">Like</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="ms-auto float-end">
															<a href="javascript:;" class="contact-icon text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="Like" aria-label="Like"><i class="fe fe-heart"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3 tx-15">Add A Review</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<div class="form-group">
														<input type="text" class="form-control" id="name1" placeholder="Your Name">
													</div>
													<div class="form-group">
														<input type="email" class="form-control" id="email" placeholder="Email Address">
													</div>
													<div class="form-group">
														<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
													</div>
													<a href="javascript:;" class="btn btn-primary">Send</a>
												</div>
											</div>
										</div>
									</div>
									</div>

							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="card-header border-bottom-0 px-0">
									<h5 class="main-content-label tx-15">Similar Products</h5>
								</div>
								<div class="card-body px-0">
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
																<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
																<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
																<a href="javascript:void(0);" class="me-4 text-muted"> (28)</a>
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
																<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
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
																<a href="javascript:void(0);" class="me-4 text-muted"> (09)</a>
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

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')


        <!-- INTERNAL HANDLECOUNTER JS -->
		@vite('resources/assets/js/handleCounter.js')

@endsection
