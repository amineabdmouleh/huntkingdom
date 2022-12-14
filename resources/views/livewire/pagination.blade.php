@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Pagination</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pagination</li>
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
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card overflow-hidden" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Pagination</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav>
													<ul class="pagination mb-0">
														<li class="page-item"><a class="page-link" href="javascript:;">Previous</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">Next</a></li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card overflow-hidden" id="icon">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pagination with Icons</h6>
											<p class="text-muted card-sub-title">Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav>
													<ul class="pagination mb-0">
														<li class="page-item">
															<a class="page-link" href="javascript:;" aria-label="Previous">
																<span aria-hidden="true">&laquo;</span>
															</a>
														</li>
														<li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
														<li class="page-item">
															<a class="page-link" href="javascript:;" aria-label="Next">
																<span aria-hidden="true">&raquo;</span>
															</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card overflow-hidden" id="disactive">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Disabled and active Pagination</h6>
											<p class="text-muted card-sub-title">Pagination links are customizable for different circumstances.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav>
													<ul class="pagination mb-0">
														<li class="page-item disabled">
															<a class="page-link" href="javascript:;" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
														<li class="page-item active" aria-current="page">
															<a class="page-link" href="javascript:;">2 <span class="sr-only">(current)</span></a>
														</li>
														<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
														<li class="page-item">
															<a class="page-link" href="javascript:;">Next</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card overflow-hidden" id="circled">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Circled Pagination</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<ul class="pagination pagination-circled mb-0">
													<li class="page-item">
														<a class="page-link" href="javascript:;"><i class="icon ion-ios-arrow-back"></i></a>
													</li>
													<li class="page-item active">
														<a class="page-link" href="javascript:;">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="javascript:;">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="javascript:;">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="javascript:;"><i class="icon ion-ios-arrow-forward"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card overflow-hidden" id="sizes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pagination Sizes</h6>
											<p class="text-muted card-sub-title">Fancy larger or smaller pagination Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes..</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-sm-6 col-md-6">
														<nav>
															<ul class="pagination pagination-lg mb-0">
																<li class="page-item active" aria-current="page">
																	<span class="page-link">1</span>
																</li>
																<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
																<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
															</ul>
														</nav>
													</div>
													<div class="col-sm-6 col-md-6 mg-t-10">
														<nav>
															<ul class="pagination pagination-sm mb-0">
																<li class="page-item active" aria-current="page">
																	<span class="page-link">1</span>
																</li>
																<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
																<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
															</ul>
														</nav>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card overflow-hidden" id="align">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alignment Pagination</h6>
											<p class="text-muted card-sub-title">Change the alignment of pagination components.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="Page navigation example">
													<ul class="pagination">
														<li class="page-item disabled">
															<a class="page-link" href="javascript:;" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
														<li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
														<li class="page-item">
															<a class="page-link" href="javascript:;">Next</a>
														</li>
													</ul>
												</nav>
												<nav aria-label="Page navigation example">
													<ul class="pagination justify-content-center">
														<li class="page-item disabled">
															<a class="page-link" href="javascript:;" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
														<li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
														<li class="page-item">
															<a class="page-link" href="javascript:;">Next</a>
														</li>
													</ul>
												</nav>
												<nav aria-label="Page navigation example">
													<ul class="pagination justify-content-end mb-0">
														<li class="page-item disabled">
															<a class="page-link" href="javascript:;" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
														<li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
														<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
														<li class="page-item">
															<a class="page-link" href="javascript:;">Next</a>
														</li>
													</ul>
												</nav>
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
