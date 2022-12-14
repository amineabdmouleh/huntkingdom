@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Dropdowns</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
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
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Dropdown</h6>
											<p class="text-muted card-sub-title">Below is the Basic Dropdown.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropdown with Rounded</h6>
											<p class="text-muted card-sub-title">Below is the Dropdown with Radius</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Light Dropdowns</h6>
											<p class="text-muted card-sub-title">Below is the Light Dropdowns.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary-transparent dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary-transparent dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success-transparent dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning-transparent dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Light Dropdown with Rounded</h6>
											<p class="text-muted card-sub-title">Below is the Light Dropdowns with Radius.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Outline Dropdowns</h6>
											<p class="text-muted card-sub-title">Below is the Outline Dropdowns</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Outline Dropdown with Rounded</h6>
											<p class="text-muted card-sub-title">Below is the Outline Dropdowns with Radius</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-secondary dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-success dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-warning dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropup</h6>
											<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropup class to the parent element.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown dropup btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-up ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-up ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-up ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-up ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropright & Dropleft</h6>
											<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropright & dropleft class to the parent element.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-xs">
													<div class="col-sm-6 col-md-3">
														<div class="dropdown dropend btn-list">
															<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-bs-toggle="dropdown" id="droprightMenuButton" type="button">Dropright<i class="fas fa-caret-right ms-1"></i></button>
															<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
																<a class="dropdown-item" href="javascript:;">Action</a>
																<a class="dropdown-item" href="javascript:;">Another action</a>
																<a class="dropdown-item" href="javascript:;">Something else here</a>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
														<div class="dropdown dropstart">
															<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle" data-bs-toggle="dropdown" id="dropleftMenuButton" type="button">Dropleft</button>
															<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
																<a class="dropdown-item" href="javascript:;">Action</a>
																<a class="dropdown-item" href="javascript:;">Another action</a>
																<a class="dropdown-item" href="javascript:;">Something else here</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Active Menu Item</h6>
											<p class="text-muted card-sub-title">Add active class to items in the dropdown to style them as active.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item active" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item active" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item active" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Disabled Menu Item</h6>
											<p class="text-muted card-sub-title">Add disabled class to items in the dropdown to style them as disabled.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item disabled" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item disabled" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item disabled" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropdown Header</h6>
											<p class="text-muted card-sub-title">Add a header to label sections of actions in any dropdown menu.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropdown Divider</h6>
											<p class="text-muted card-sub-title">Separate groups of related menu items with a divider.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:;">Action</a> <a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:;">Action</a> <a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:;">Action</a> <a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Icon Dropdowns</h6>
											<p class="text-muted card-sub-title">Below is the Dropdown with an Icon.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-bs-toggle="dropdown" type="button"><i class="fe fe-plus me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button"><i class="fe fe-heart me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success dropdown-toggle" data-bs-toggle="dropdown" type="button"><i class="fe fe-check me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-bs-toggle="dropdown" type="button"><i class="fe fe-link me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Rounded Light Dropdown with Icon</h6>
											<p class="text-muted card-sub-title">Below is the Icon Light Dropdown with Radius. </p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown btn-list">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button"><i class="fe fe-plus me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button"><i class="fe fe-heart me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button"><i class="fe fe-check me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
													</div>
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning-transparent dropdown-toggle btn-rounded" data-bs-toggle="dropdown" type="button"><i class="fe fe-link me-1"></i><i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:;">Action</a>
														<a class="dropdown-item" href="javascript:;">Another action</a>
														<a class="dropdown-item" href="javascript:;">Something else here</a>
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
