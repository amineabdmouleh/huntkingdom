@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Media Objects</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Media Objects</li>
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
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">The media object helps build complex and repetitive components where some media is positioned alongside content that doesn’t wrap around said media. Plus, it does this with only two required classes thanks to flexbox.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="media d-block d-sm-flex">
													<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/media/1.jpg')}}"></a>
													<div class="media-body">
														<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="nesting">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Nesting</h6>
											<p class="text-muted card-sub-title">Media objects can be infinitely nested, though we suggest you stop at some point. Place nested <code>.media</code> within the <code>.media-body</code> of a parent media object.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="media d-block d-sm-flex">
													<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/media/2.jpg')}}"></a>
													<div class="media-body">
														<h5 class="tx-medium">Media Heading</h5>
														<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
														<div class="media d-block d-sm-flex mg-t-25">
															<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/media/3.jpg')}}"></a>
															<div class="media-body">
																<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="align">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alignment</h6>
											<p class="text-muted card-sub-title">Media in a media object can be aligned with flexbox utilities to the top (default), middle, or end of your .media-body content.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="media d-block d-sm-flex">
													<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{asset('build/assets/img/media/4.jpg')}}"></a>
													<div class="media-body">
														<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="list">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Media List</h6>
											<p class="text-muted card-sub-title">Because the media object has so few structural requirements, you can also use these classes on list HTML elements.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<ul class="list-unstyled">
													<li class="media d-block d-sm-flex">
														<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/media/6.jpg')}}"></a>
														<div class="media-body">
															<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
														</div>
													</li>
													<li class="media d-block d-sm-flex mg-t-25">
														<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/media/7.jpg')}}"></a>
														<div class="media-body">
															<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
														</div>
													</li>
													<li class="media d-block d-sm-flex mg-t-25">
														<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/media/8.jpg')}}"></a>
														<div class="media-body">
															<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="order">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Order</h6>
											<p class="text-muted card-sub-title">Change the order of content in media objects by modifying the HTML itself, or by adding some custom flexbox CSS to set the order property (to an integer of your choosing).</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="media d-block d-sm-flex">
													<div class="media-body">
														<h5 class="tx-medium">Media Heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													</div>
													<a href="javascript:;"><img alt="img" class="wd-100p wd-sm-100  mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{asset('build/assets/img/media/5.jpg')}}"></a>
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
