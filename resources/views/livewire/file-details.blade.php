@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Details</li>
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
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body px-4 pt-4">
										<a href="javascript:;"><img src="{{asset('build/assets/img/files/img1.jpg')}}" alt="img" class="rounded-6 w-100"></a>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body h-100">
										<h5 class="mb-3 tx-semibold">Related Files</h5>
										<div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/01.jpg')}}" alt="img"></a>
													<div class="card-footer border bd-t-0 py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image1.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">45 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/07.jpg')}}" alt="img"></a>
													<div class="card-footer border bd-t-0 py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image2.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">45 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/02.jpg')}}" alt="img"></a>
													<div class="card-footer border bd-t-0 py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image3.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">92 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/03.jpg')}}" alt="img"></a>
													<div class="card-footer border py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image4.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">56 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/04.jpg')}}" alt="img"></a>
													<div class="card-footer border bd-t-0 py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image5.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">56 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/05.jpg')}}" alt="img"></a>
													<div class="card-footer border bd-t-0 py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image6.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">92 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card custom-card overflow-hidden">
													<a href="javascript:;"><img src="{{asset('build/assets/img/files/06.jpg')}}" alt="img"></a>
													<div class="card-footer border bd-t-0 py-2 px-3">
														<div class="d-flex">
															<div class="d-flex text-break">
																<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
																<h6 class="mb-0 mt-2 tx-semibold">image7.jpg</h6>
															</div>
															<div class="ms-auto my-auto">
																<h6 class="text-muted mb-0 tx-normal">56 KB</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<h5 class="mb-3 tx-15 tx-semibold tx-uppercase">File details</h5>
										<div class="">
											<div class="row">
												<div class="col-xl-12">
													<div class="table-responsive">
														<table class="table mb-0 table-bordered text-nowrap">
															<tbody>
																<tr>
																	<th>File Name</th>
																	<td>image.jpg</td>
																</tr>
																<tr>
																	<th>File Size</th>
																	<td>15 MB</td>
																</tr>
																<tr>
																	<th>Date Created</th>
																	<td>09-09-2021</td>
																</tr>
																<tr>
																	<th>Width</th>
																	<td>1000</td>
																</tr>
																<tr>
																	<th>Height</th>
																	<td>500</td>
																</tr>
																<tr>
																	<th>Dimensions</th>
																	<td>1000 x 500</td>
																</tr>
																<tr>
																	<th>Resolution Unit</th>
																	<td>2</td>
																</tr>
																<tr>
																	<th>File Format</th>
																	<td>jpg</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body pb-0">
										<h5 class="mb-3 tx-semibold">Recent Files</h5>
										<ul id="lightgallery" class="list-unstyled row">
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 border-bottom-0" data-responsive="{{asset('build/assets/img/files/01.jpg')}}" data-src="{{asset('build/assets/img/files/01.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/files/01.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 border-bottom-0" data-responsive="{{asset('build/assets/img/files/02.jpg')}}" data-src="{{asset('build/assets/img/files/02.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/files/02.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 border-bottom-0" data-responsive="{{asset('build/assets/img/files/03.jpg')}}" data-src="{{asset('build/assets/img/files/03.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/files/03.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 border-bottom-0" data-responsive="{{asset('build/assets/img/files/04.jpg')}}" data-src="{{asset('build/assets/img/files/04.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/files/04.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 border-bottom-0" data-responsive="{{asset('build/assets/img/files/05.jpg')}}" data-src="{{asset('build/assets/img/files/05.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/files/05.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 border-bottom-0" data-responsive="{{asset('build/assets/img/files/06.jpg')}}" data-src="{{asset('build/assets/img/files/06.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/files/06.jpg')}}" alt="Thumb-2">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')
		

        <!-- INTERNAL OWL CAROUSEL JS -->
        <script src="{{asset('build/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

        <!-- INTERNAL FILE DETAILS JS -->
		@vite('resources/assets/js/file-detail.js')


        <!-- INTERNAL LIGHT GALLERY JS -->
        <script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lightgallery-1.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>

@endsection
