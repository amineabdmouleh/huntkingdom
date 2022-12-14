@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Draggable Cards</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
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
						<div class="sortable">
							<div class="row row-sm">
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-body card-draggable">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md me-3 cover-image" style="background-image: url({{asset('build/assets/img/users/6.jpg')}})"></div>
											<div>
												<a class="tx-semibold" href="{{url('profile')}}">Anna Ogden</a> <small class="d-block text-muted">2 days ago</small>
											</div>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<a href="javascript:;"><img alt="Image" class="card-img-top" src="{{asset('build/assets/img/media/1.jpg')}}"></a>
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										</div>
										<div class="card-footer">
											January, 20, 2017 4:30am
										</div>
									</div>
									<div class="card custom-card  bg-secondary tx-white card-draggable">
										<div class="card-body">
											<h5 class="main-content-label tx-white mg-b-10">The Card Title</h5>
											<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link text-white" href="javascript:;">Card link</a> <a class="card-link text-white" href="javascript:;">Another link</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable bg-secondary tx-white">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<h5 class="main-content-label tx-dark mg-b-10">The Card Title</h5>
											<p class="card-subtitle mg-b-15 text-muted">This is the card subtitle</p>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="javascript:;">Card link</a> <a class="card-link" href="javascript:;">Another link</a>
										</div>
									</div>
									<div class="card custom-card card-body tx-white-8 bg-gray-800 card-draggable">
										Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
										<a href="javascript:;"><img alt="Image" class="card-img-bottom" src="{{asset('build/assets/img/media/3.jpg')}}"></a>
									</div>
									<div class="card custom-card card-body card-draggable">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md me-3 cover-image" style="background-image: url({{asset('build/assets/img/users/3.jpg')}})"></div>
											<div>
												<a class="tx-semibold" href="{{url('profile')}}">Anna Ogden</a> <small class="d-block text-muted">2 days ago</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable bg-primary tx-white">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable overflow-hidden">
										<img alt="Image" class="card-img img-fluid draggable-img rounded-10" src="{{asset('build/assets/img/media/6.jpg')}}">
										<div class="card-img-overlay bg-black-4">
											<h5 class="card-title tx-white tx-semibold">Card title</h5>
											<p class="card-text tx-white-7 tx-12 tx-md-14">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											<p class="card-text tx-white-7 tx-12 tx-md-14">Last updated 3 mins ago</p>
										</div>
									</div>
									<div class="card custom-card card-body card-draggable">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md me-3 cover-image" style="background-image: url({{asset('build/assets/img/users/5.jpg')}})"></div>
											<div>
												<a class="tx-semibold" href="{{url('profile')}}">Anna Ogden</a> <small class="d-block text-muted">2 days ago</small>
											</div>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-header tx-semibold">
											Description
										</div>
										<div class="card-body">
											<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<a href="javascript:;"><img alt="Image" class="card-img-top" src="{{asset('build/assets/img/media/5.jpg')}}"></a>
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL DRAGGABLE JS -->
        <script src="{{asset('build/assets/plugins/draggable/jquery-ui-draggable.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/draggable/draggable.js')}}"></script>

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>
		
@endsection
