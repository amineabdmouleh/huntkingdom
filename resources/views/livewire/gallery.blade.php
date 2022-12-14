@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Gallery</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
						<div class="masonry row row-sm">
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href="{{asset('build/assets/img/media/1.jpg')}}" class="js-img-viewer" data-caption="IMAGE-01"
										data-id="lion">
										<img src="{{asset('build/assets/img/media/1.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href="{{asset('build/assets/img/media/2.jpg')}}" class="js-img-viewer" data-caption="IMAGE-02"
										data-id="camel">
										<img src="{{asset('build/assets/img/media/2.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href="{{asset('build/assets/img/media/3.jpg')}}" class="js-img-viewer" data-caption="IMAGE-03"
										data-id="hippo">
										<img src="{{asset('build/assets/img/media/3.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href="{{asset('build/assets/img/media/4.jpg')}}" class="js-img-viewer" data-caption="IMAGE-04"
										data-id="koala">
										<img src="{{asset('build/assets/img/media/4.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href="{{asset('build/assets/img/media/5.jpg')}}"  class="js-img-viewer" data-caption="IMAGE-05"
										data-id=" bear">
										<img src=" {{asset('build/assets/img/media/5.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/6.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-06"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/6.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/7.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-07"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/7.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/8.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-08"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/8.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/9.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-09"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/9.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/10.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-10"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/10.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/11.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-11"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/11.jpg')}}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<div class="brick">
									<a href=" {{asset('build/assets/img/media/14.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-11"
										data-id=" rhino">
										<img src=" {{asset('build/assets/img/media/14.jpg')}}" alt="img">
									</a>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- GALLERY JS -->
        <script src="{{asset('build/assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
		@vite('resources/assets/js/gallery.js')

		
@endsection
