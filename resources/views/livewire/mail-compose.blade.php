@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Mail Compose</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mail Compose</li>
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
									<div class="card-body tab-list-items">
										<div class="main-content-left main-content-left-mail">
											<div class="main-mail-menu">
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
												<nav class="nav main-nav-column mg-b-20">
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Social
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Work <span class="bg-warning text-white">22</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Personal
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder"></i> Promotions <span class="bg-success text-white">22</span>
													</a>
													<a class="nav-link" href="javascript:;">
														<i class="fe fe-folder-plus"></i> Updates <span class="bg-dark text-white">17</span>
													</a>
												</nav>
											</div><!-- main-mail-menu -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<h3 class="card-title tx-18">
											<label class="main-content-label tx-15">Compose New Message</label>
										</h3>
									</div>
									<div class="card-body">
										<form>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3 col-xl-2 form-label tx-semibold">To</label>
													<div class="col-sm-9 col-xl-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3 col-xl-2 form-label tx-semibold">CC</label>
													<div class="col-sm-9 col-xl-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3 col-xl-2 form-label tx-semibold">BC</label>
													<div class="col-sm-9 col-xl-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3 col-xl-2 form-label tx-semibold">Subject</label>
													<div class="col-sm-9 col-xl-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<label class="col-sm-3 col-xl-2 form-label tx-semibold">Message</label>
													<div class="col-sm-9 col-xl-10">
														<textarea rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer d-sm-flex">
										<div class="">
											<a href="javascript:void(0)" class="btn px-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Attach">
												<i class="fe fe-paperclip fs-16"></i>
											</a>
											<a href="javascript:void(0)" class="btn px-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Link">
												<i class="fe fe-link fs-16"></i>
											</a>
											<a href="javascript:void(0)" class="btn px-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Photos">
												<i class="fe fe-image fs-16"></i>
											</a>
											<a href="javascript:void(0)" class="btn px-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
												<i class="fe fe-trash fs-16"></i>
											</a>
										</div>
										<div class="btn-list ms-auto">
											<button class="btn btn-danger">Cancel</button>
											<button class="btn btn-primary">Send message</button>
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
