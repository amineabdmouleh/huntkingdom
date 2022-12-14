@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Timeline</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Timeline</li>
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
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 custom-card-header">
										<h6 class="main-content-label mb-0">Vertical Timeline</h6>
									</div>
									<div class="card-body">
										<div class="vtimeline">
											<div class="timeline-wrapper timeline-wrapper-primary">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Art Ramadani posted a status update</h6>
													</div>
													<div class="timeline-body">
														<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put.</p>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart  text-muted me-1"></i>
														<span>19</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>19 Oct 2021</span>
													</div>
												</div>
											</div>
											<div class="timeline-wrapper timeline-inverted timeline-wrapper-secondary">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Job Meeting</h6>
													</div>
													<div class="timeline-body">
														<p>You have a meeting at Laborator Office Today.</p>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart  text-muted me-1"></i>
														<span>25</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>10th Oct 2021</span>
													</div>
												</div>
											</div>
											<div class="timeline-wrapper timeline-wrapper-info">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Arlind Nushi checked in at New York</h6>
													</div>
													<div class="timeline-body">
														<p>Alpha 5 has arrived just over a month after Alpha 4 with some major feature improvements and a boat load of bug fixes.</p>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart  text-muted me-1"></i>
														<span>19</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>5th Oct 2021</span>
													</div>
												</div>
											</div>
											<div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Eroll Maxhuni uploaded 4 new photos to album Summer Trip</h6>
													</div>
													<div class="timeline-body">
														<p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>
														<ul id="lightgallery" class="list-unstyled row mb-0">
															<li class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mb-4" data-responsive="{{asset('build/assets/img/media/11.jpg')}}" data-src="{{asset('build/assets/img/media/11.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
																<a href="" class="wd-100p">
																	<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/11.jpg')}}" alt="Thumb-1">
																</a>
															</li>
														</ul>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart  text-muted me-1"></i>
														<span>19</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>27th Sep 2021</span>
													</div>
												</div>
											</div>
											<div class="timeline-wrapper timeline-wrapper-success">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Support Team sent you an email</h6>
													</div>
													<div class="timeline-body">
														<p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo....</p>
														<a class="btn btn-sm ripple btn-primary text-white mb-3">Read more</a>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart  text-muted me-1"></i>
														<span>25</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>25th Sep 2021</span>
													</div>
												</div>
											</div>
											<div class="timeline-wrapper timeline-inverted timeline-wrapper-warning">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Mr. Doe shared a image</h6>
													</div>
													<div class="timeline-body">
														<ul id="lightgallery" class="list-unstyled row mb-0">
															<li class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mb-4" data-responsive="{{asset('build/assets/img/media/7.jpg')}}" data-src="{{asset('build/assets/img/media/7.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
																<a href="" class="wd-100p">
																	<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/7.jpg')}}" alt="Thumb-1">
																</a>
															</li>
														</ul>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart  text-muted me-1"></i>
														<span>32</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>19th Sep 2021</span>
													</div>
												</div>
											</div>
											<div class="timeline-wrapper timeline-wrapper-dark">
												<div class="timeline-badge"></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h6 class="timeline-title">Sarah Young accepted your friend request</h6>
													</div>
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
													</div>
													<div class="timeline-footer d-flex align-items-center flex-wrap">
														<i class="fe fe-heart text-muted me-1"></i>
														<span>26</span>
														<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>15th Sep 2021</span>
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

        <!-- INTERNAL TIMELINE JS -->
        <script src="{{asset('build/assets/plugins/timeline/js/timeline.min.js')}}"></script>
		@vite('resources/assets/js/timline.js')


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
