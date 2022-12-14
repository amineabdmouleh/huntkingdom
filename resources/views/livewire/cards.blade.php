@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- END PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Cards</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cards</li>
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
						<!-- PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card custom-card card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body bg-primary tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body bg-danger tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body bg-info tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h5 class="main-content-label mb-0">Card Header</h5>
									</div>
									<div class="card-body">
										<h6 class="tx-normal">Special title treatment</h6>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<a href="javascript:;" class="btn btn-primary ripple btn-block">View</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h5 class="main-content-label mb-0">Card Header</h5>
									</div>
									<div class="card-body">
										<h6 class="tx-normal">Special title treatment</h6>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									</div>
									<div class="card-footer">
										<p class="mb-0">Card-footer</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h5 class="main-content-label mb-0">Blockquote</h5>
									</div>
									<div class="card-body">
										<figure>
											<blockquote class="blockquote">
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.rhoncus ut, imperdiet a.</p>
											</blockquote>
											<figcaption class="blockquote-footer">
											Someone famous in <cite title="Source Title">Source Title</cite>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<h5 class="main-content-label mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="javascript:;">Card link</a> <a class="card-link" href="javascript:;">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card  bg-primary tx-white">
									<div class="card-body">
										<h5 class="main-content-label tx-white mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="javascript:;">Card link</a> <a class="card-link tx-white-7 hover-white" href="javascript:;">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card  bg-danger tx-white">
									<div class="card-body">
										<h5 class="main-content-label tx-white mg-b-10">The Card Title</h5>
										<p class="card-subtitle tx-white-8 mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="javascript:;">Card link</a> <a class="card-link tx-white-7 hover-white" href="javascript:;">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card  bg-info tx-white">
									<div class="card-body">
										<h5 class="main-content-label tx-white mg-b-10">The Card Title</h5>
										<p class="card-subtitle tx-white-8 mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="javascript:;">Card link</a> <a class="card-link tx-white-7 hover-white" href="javascript:;">Another link</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h5 class="main-content-label mb-0">Basic Card</h5>
										<div class="card-options">
											<a href="javascript:;" class="card-options-collapse py-0" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:;" class="card-options-remove py-0" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
									Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h5 class="main-content-label mb-0">Basic Card</h5>
										<div class="card-options">
											<a href="javascript:;" class="card-options-collapse py-0" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:;" class="card-options-fullscreen py-0" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="javascript:;" class="card-options-remove py-0" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
									Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h5 class="main-content-label mb-0">Basic Card</h5>
										<div class="card-options">
											<a href="javascript:;" class="btn btn-primary btn-sm py-0">Action 1</a>
											<a href="javascript:;" class="btn btn-secondary btn-sm ms-2 py-0">Action 2</a>
										</div>
									</div>
									<div class="card-body">
									Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-6 col-lg-3">
								<div class="card overflow-hidden custom-card ">
									<a href="javascript:;"><img alt="Image" class="img-fluid b-img" src="{{asset('build/assets/img/media/1.jpg')}}"></a>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 ">
								<div class="card overflow-hidden custom-card">
									<a href="javascript:;"><img alt="Image" class="img-fluid b-img" src="{{asset('build/assets/img/media/2.jpg')}}"></a>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="card overflow-hidden custom-card">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<a href="javascript:;"><img alt="Image" class="img-fluid b-img" src="{{asset('build/assets/img/media/3.jpg')}}"></a>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 ">
								<div class="card overflow-hidden custom-card">
									<div class="card-body ">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<a href="javascript:;"><img alt="Image" class="img-fluid b-img" src="{{asset('build/assets/img/media/4.jpg')}}"></a>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card overflow-hidden card-blog-overlay1 custom-card">
									<div class="card-body  text-white z-index2">
										<h3 class="main-content-label text-white">card-with image</h3>
										<p class="tx-white-7 tx-13 mb-0 mt-2">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur Some quick example text to build on the card title and make up the bulk of the card's content...</p>
									</div>
									<div class="card-footer  text-white z-index2">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card overflow-hidden card-blog-overlay2 custom-card">
									<div class="card-header border-bottom-0 custom-card-header">
										<h3 class="main-content-label text-white mb-0">card-with image</h3>
									</div>
									<div class="card-body  text-white z-index2">
										<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										<a class="tx-white" href="javascript:;">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card overflow-hidden card-blog-overlay custom-card">
									<div class="card-body text-white z-index2">
										<h3 class="main-content-label text-white">card-with image</h3>
										<p class="tx-white-7 tx-13 mt-2">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur Some quick example text to build on the card title and make up the bulk of the card's content...</p>
										<button class="btn btn-sm btn-primary">Read more</button>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-4">
								<div class="card custom-card">
									<div class="card-header p-3 tx-semibold tx-white bg-primary">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="card custom-card">
									<div class="card-header p-3 tx-semibold tx-white bg-secondary">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="card custom-card">
									<div class="card-header p-3 tx-semibold tx-white bg-success">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW-->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer">
										January, 20, 2017 4:30am
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer tx-center">
										<a href="javascript:;">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer tx-center">
										<a class="btn ripple btn-primary btn-sm" href="javascript:;">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card custom-card card-body tx-white-8 bg-primary border-0">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body tx-white-8 bg-secondary border-0">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body tx-white-8 bg-gray-800 border-0">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-6">
								<div class="card card-aside custom-card">
									<a href="javascript:;" class="card-aside-column  cover-image rounded-start-11" data-image-src="{{asset('build/assets/img/media/11.jpg')}}"  style="background: url({{asset('build/assets/img/media/11.jpg')}}) center center;"></a>
									<div class="card-body">
										<h5 class="main-content-label mg-b-10">The Card Title</h5>
										<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
										<div class="d-flex align-items-center pt-3 mt-auto">
											<div class="main-img-user avatar-sm me-3">
												<img src="{{asset('build/assets/img/users/1.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
											</div>
											<div>
												<a href="{{url('profile')}}" class="text-default tx-semibold">Alica Nestle</a>
												<small class="d-block text-muted">15 mintues ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="far fa-heart me-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="far fa-thumbs-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="card card-aside custom-card">
									<div class="card-body">
										<h5 class="main-content-label mg-b-10">The Card Title</h5>
										<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
										<div class="d-flex align-items-center pt-3 mt-auto">
											<div class="main-img-user avatar-sm me-3">
												<img src="{{asset('build/assets/img/users/2.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
											</div>
											<div>
												<a href="{{url('profile')}}" class="text-default tx-semibold">Mericon Elsa</a>
												<small class="d-block text-muted">15 mintues ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="far fa-heart me-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="far fa-thumbs-up"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:;" class="card-aside-column  cover-image rounded-end-11" data-image-src="{{asset('build/assets/img/media/13.jpg')}}" style="background: url({{asset('build/assets/img/media/13.jpg')}}) center center;"></a>
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
