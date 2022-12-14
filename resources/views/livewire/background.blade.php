@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Background</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Background</li>
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
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Contextual Colors</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card color-primary">
															<div class="card-header bg-primary">
																<p>#4d65d9</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Primary</h6>
																	<p class="mb-0 text-primary">.bg-primary</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-secondary">
															<div class="card-header bg-secondary">
																<p>#f1388b</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Secondary</h6>
																	<p class="mb-0 text-secondary">.bg-secondary</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-success">
															<div class="card-header bg-success">
																<p>#19b159</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Success</h6>
																	<p class="mb-0 text-success">.bg-success</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-info">
															<div class="card-header bg-info">
																<p>#01b8ff</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Info</h6>
																	<p class="mb-0 text-info">.bg-info</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-danger">
															<div class="card-header bg-danger">
																<p>#fd6074</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Danger</h6>
																	<p class="mb-0 text-danger">.bg-danger</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-warning">
															<div class="card-header bg-warning">
																<p>#ff9b21</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Warning</h6>
																	<p class="mb-0 text-warning">.bg-warning</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-teal">
															<div class="card-header bg-teal">
																<p>#00cccc</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Teal</h6>
																	<p class="mb-0 text-teal">.bg-teal</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-purple">
															<div class="card-header bg-purple">
																<p>#6f42c1</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Purple</h6>
																	<p class="mb-0 text-purple">.bg-purple</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-dark">
															<div class="card-header bg-dark">
																<p>#3b4863</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Dark</h6>
																	<p class="mb-0 text-dark">.bg-dark</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-light">
															<div class="card-header bg-light">
																<p>#f0f2f8</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Light</h6>
																	<p class="mb-0 text-dark">.bg-light</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-indigo">
															<div class="card-header bg-indigo">
																<p>#4b0082</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Indigo</h6>
																	<p class="mb-0 text-indigo">.bg-indigo</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-azure">
															<div class="card-header bg-azure">
																<p>#007ea7</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Azure</h6>
																	<p class="mb-0 text-azure">.bg-azure</p>
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

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Light Colors</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-primary-light">
															<div class="card-header bg-primary-light">
																<p>rgba(68, 86, 195, 0.2)</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Primary</h6>
																	<p class="mb-0 text-primary">.bg-primary-light</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-secondary-light">
															<div class="card-header bg-secondary-light">
																<p>rgba(241, 56, 139, 0.2)</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Secondary</h6>
																	<p class="mb-0 text-secondary">.bg-secondary-light</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-success-light">
															<div class="card-header bg-success-light">
																<p>rgba(25, 177, 89, 0.2)</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Success</h6>
																	<p class="mb-0 text-success">.bg-success-light</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-info-light">
															<div class="card-header bg-info-light">
																<p>rgba(1, 184, 255, 0.2)</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Info</h6>
																	<p class="mb-0 text-info">.bg-info-light</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-danger-light">
															<div class="card-header bg-danger-light">
																<p>rgba(253, 96, 116, 0.2)</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Danger</h6>
																	<p class="mb-0 text-danger">.bg-danger-light</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-warning-light">
															<div class="card-header bg-warning-light">
																<p>rgba(255, 155, 33, 0.2)</p>
															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Warning</h6>
																	<p class="mb-0 text-warning">.bg-warning-light</p>
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

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Gradient Colors</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-primary-gradient">
															<div class="card-header bg-primary-gradient">

															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Primary</h6>
																	<p class="mb-0 text-primary">.bg-primary-gradient</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-secondary-gradient">
															<div class="card-header bg-secondary-gradient">

															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Secondary</h6>
																	<p class="mb-0 text-secondary">.bg-secondary-gradient</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-success-gradient">
															<div class="card-header bg-success-gradient">

															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Success</h6>
																	<p class="mb-0 text-success">.bg-success-gradient</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-info-gradient">
															<div class="card-header bg-info-gradient">

															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Info</h6>
																	<p class="mb-0 text-info">.bg-info-gradient</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-danger-gradient">
															<div class="card-header bg-danger-gradient">

															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Danger</h6>
																	<p class="mb-0 text-danger">.bg-danger-gradient</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-md-4 col-lg-3 col-sm-6">
														<div class="card custom-card mb-lg-0 color-warning-gradient">
															<div class="card-header bg-warning-gradient">

															</div>
															<div class="card-body">
																<div class="text-center">
																	<h6 class="mb-0">Warning</h6>
																	<p class="mb-0 text-warning">.bg-warning-gradient</p>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bg-primary-gradient"</code></td>
													<td>linear-gradient(to right, #4d65d9 0%, #7789f7 100%)</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bg-secondary-gradient"</code></td>
													<td>linear-gradient(to right, #f1388b 0%, #fb6dad 100%)</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bg-success-gradient"</code></td>
													<td>linear-gradient(to right, #19b159 0%, #6cefa3 100%)</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bg-info-gradient"</code></td>
													<td>linear-gradient(to right, #01b8ff 0%, #7edbff 100%)</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bg-danger-gradient"</code></td>
													<td>linear-gradient(to right, #fd6074 0%, #f594a0 100%)</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bg-warning-gradient"</code></td>
													<td>linear-gradient(to right, #ff9b21 0%, #f9c07b 100%)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Transparent Color Set</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row no-gutters">
													<div class="col-1">
														<div class="img-filter-primary">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/01.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-secondary">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/02.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-warning">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/03.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-info">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/04.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-danger">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/05.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-success">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/06.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-dark">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/07.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-teal">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/08.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-purple">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/09.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-pink">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/10.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-azure">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/01.jpg')}}">
														</div>
													</div>
													<div class="col-1">
														<div class="img-filter-indigo">
															<img alt="img" class="w-100 h-100" src="{{asset('build/assets//img/images/02.jpg')}}">
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

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-sm-12">
								<div class="card custom-card" id="whitebg">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent White Set</h6>
											<p class="text-muted  card-sub-title">A set of overlay transparent white background utilities classes.</p>
										</div>
										<div class="d-flex flex-wrap">
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-1"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-2"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-3"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-4"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-5"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-6"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-7"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-8"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-white-9"></div>
											</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-white-[value]"</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 col-sm-12">
								<div class="card custom-card" id="blackbg">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Black Set</h6>
											<p class="text-muted  card-sub-title">A set of overlay transparent black background utilities classes.</p>
										</div>
										<div class="d-flex flex-wrap">
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-1"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-2"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-3"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-4"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-5"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-6"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-7"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-8"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{asset('build/assets//img/media/8.jpg')}}">
												<div class="pos-absolute a-0 bg-black-9"></div>
											</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-black-[value]"</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

@endsection
