@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Manager List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Manager List</li>
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/01.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer bd-t-0 py-2 px-3">
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/07.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer bd-t-0 py-2 px-3">
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/02.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer bd-t-0 py-2 px-3">
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/03.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer py-2 px-3">
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/04.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer bd-t-0 py-2 px-3">
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/05.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer bd-t-0 py-2 px-3">
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
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/06.jpg')}}" alt="img" class="w-100 file-managerlist-img"></a>
									<div class="card-footer bd-t-0 py-2 px-3">
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
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/ppt1.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-powerpoint tx-20 text-danger me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">demo.ppt</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">67 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/excel.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-excel tx-20 text-success me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">sheet.xls</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">34 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/zip1.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-zip-box tx-20 text-warning me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">exe1.zip</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/video.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-video tx-20 text-danger me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">video.mp4</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/word.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-word tx-20 text-info me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">project.doc</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/word.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-word tx-20 text-info me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">project.doc</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/word.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-word tx-20 text-info me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">project.doc</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/pdf.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-pdf tx-20 text-danger me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">file.pdf</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">78 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/excel.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-excel tx-20 text-success me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">sheet.xls</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">34 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/ppt1.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-powerpoint tx-20 text-danger me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">demo.ppt</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">67 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}" class="mx-auto my-4"><img src="{{asset('build/assets/img/files/word.png')}}" alt="img"></a>
									<div class="card-footer py-2 px-3">
										<div class="d-flex">
											<div class="d-flex text-break">
												<i class="mdi mdi-file-word tx-20 text-info me-1"></i>
												<h6 class="mb-0 mt-2 tx-semibold">project.doc</h6>
											</div>
											<div class="ms-auto my-auto">
												<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
											</div>
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


@endsection
