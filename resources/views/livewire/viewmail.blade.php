@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">View Mail</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Mail</li>
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
							<div class="col-lg-4 col-xl-3 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="">
											<a class="btn ripple btn-primary btn-compose btn-block" href="{{url('mail-compose')}}">Compose</a>
											<div class="main-mail-menu pd-r-0 mg-t-20">
												<label class="main-content-label main-content-label-sm">Primary</label>
												<nav class="nav main-nav-column mg-b-20">
													<a class="nav-link active" href="javascript:;">
														<i class="fe fe-mail"></i> Inbox <span class="bg-primary text-white">20</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-star"></i> Starred <span class="bg-secondary text-white">3</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-bookmark"></i> Important <span class="bg-info text-white">10</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-send"></i> Sent Mail
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-edit"></i> Drafts
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-disc"></i> Spam <span class="bg-dark text-white">128</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-trash"></i> Trash <span class="bg-danger text-white">6</span>
													</a>
												</nav>
												<label class="main-content-label main-content-label-sm">Label</label>
												<nav class="nav main-nav-column">
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Social
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Promotions <span class="bg-success text-white">22</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Updates <span class="bg-danger text-white">17</span>
													</a>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9 col-md-12">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div class="email-media">
											<div class="mb-4 d-lg-flex">
												<h3>Congratulations on your goal you achieved !</h3>
												<div class="ms-auto d-none d-md-flex fs-18">
													<a href="javascript:;" class="contact-icon text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="Print" aria-label="print"><i class="fe fe-printer"></i></a>
													<a href="javascript:;" class="contact-icon text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="Tag" aria-label="tag"><i class="fe fe-tag"></i></a>
												</div>
											</div>
											<div class="media mt-0">
												<div class="main-img-user avatar-md me-3 online">
													<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}">
												</div>
												<div class="media-body tx-inverse">
													<div class="float-end d-none d-md-flex fs-15">
														<div class="me-3">Nov 2, 2020 12:45 pm</div>
														<div class="me-3">
															<a href="javascript:;" class="btn p-0"><i class="fe fe-star text-dark" data-bs-toggle="tooltip" title="" data-original-title="Rated"></i></a>
														</div>
														<div class="me-3">
															<a href="javascript:;" class="btn p-0"><i class="fa fa-reply text-dark" data-bs-toggle="tooltip" title="" data-original-title="Reply"></i></a>
														</div>
														<div class="me-3">
															<a href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
															<i class="fe fe-more-vertical text-dark" data-bs-toggle="tooltip" title="" data-original-title="View more"></i></a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="javascript:;">Reply</a>
																<a class="dropdown-item" href="javascript:;">Report Spam</a>
																<a class="dropdown-item" href="javascript:;">Delete</a>
																<a class="dropdown-item" href="javascript:;">Show Original</a>
																<a class="dropdown-item" href="javascript:;">Print</a>
																<a class="dropdown-item" href="javascript:;">Filter</a>
															</div>
														</div>
													</div>
													<div class="media-title font-weight-normal"><span class="tx-18 tx-medium">Dennis Mark</span>
														<p class="mb-0 text-muted">dennis@gmail.com </p>
														<small class="me-2 d-md-none">Nov 2, 2020 12:45 pm</small>
														<small class="me-2 d-md-none">
															<a href="javascript:;" class="btn px-0"><i class="fe fe-star text-dark" data-bs-toggle="tooltip" title="" data-original-title="Rated"></i></a>
														</small>
														<small class="me-2 d-md-none">
															<a href="javascript:;" class="btn px-0"><i class="fa fa-reply text-dark" data-bs-toggle="tooltip" title="" data-original-title="Reply"></i></a>
														</small>
													</div>
												</div>
											</div>
										</div>
										<div class="eamil-body">
											<h6 class="mb-3 tx-normal">Hi Sir/Madam</h6>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
											<p class="mb-0">Thanking you Sir/Madam</p>
											<hr class="message-inner-separator">
											<div class="email-attch">
												<div class="float-end">
													<a href="javascript:;" class="btn p-0 lh-0 mn-ht-0p"><i class="fa fa-download text-primary" data-bs-toggle="tooltip" title="" data-original-title="Download"></i></a>
												</div>
												<p>3 Attachments <a href="{{url('file-details')}}" class="ms-2"> View All Images</a></p>
												<div class="emai-img">
													<div class="row row-sm">
														<div class="col-sm-3">
															<a href="{{url('file-details')}}"><img class="w-100 rounded-6" src="{{asset('build/assets/img/media/blog2.jpg')}}" alt="Generic placeholder image"></a>
															<h6 class="mb-3 mt-3 mb-lg-0 tx-semibold">img_01.jpg <small class="text-muted">12kb</small></h6>
														</div>
														<div class="col-sm-3">
															<a href="{{url('file-details')}}"><img class="w-100 rounded-6" src="{{asset('build/assets/img/media/blog3.jpg')}}" alt="Generic placeholder image"></a>
															<h6 class="mb-3 mt-3 mb-lg-0 tx-semibold">img_02.jpg <small class="text-muted">18kb</small></h6>
														</div>
														<div class="col-sm-3">
															<a href="{{url('file-details')}}"><img class="w-100 rounded-6" src="{{asset('build/assets/img/media/blog4.jpg')}}" alt="Generic placeholder image"></a>
															<h6 class=" mt-3 mb-lg-0 tx-semibold">img_03.jpg <small class="text-muted">21kb</small></h6>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-sm ripple btn-primary mt-1 mb-1" href="javascript:;"><i class="fa fa-reply"></i> Reply</a>
										<a class="btn btn-sm ripple btn-secondary mt-1 mb-1" href="javascript:;"><i class="fa fa-share"></i> Forward</a>
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
