@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Progress</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Progress</li>
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
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Progress</h6>
											<p class="text-muted card-sub-title">A basic progress in template colors.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar" role="progressbar" style= "width: 50%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar" role="progressbar" style= "width: 65%"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar" role="progressbar" style= "width: 75%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Contextual Progress</h6>
											<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info" role="progressbar" style= "width: 50%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar bg-danger" role="progressbar" style= "width: 65%"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar bg-success" role="progressbar" style= "width: 75%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="striped">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Striped Progress</h6>
											<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-striped" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped bg-info" role="progressbar" style= "width: 50%"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style= "width: 65%"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped bg-success" role="progressbar" style= "width: 75%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="animate">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Animated Bars</h6>
											<p class="text-muted card-sub-title">The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
												</div>
												<div class="progress mg-b-10">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
												</div>
												<div class="progress mg-b-10">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
												</div>
												<div class="progress mg-b-10">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
												</div>
												<div class="progress mg-b-10">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
												</div>
												<div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="label">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Progress Label</h6>
											<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-lg" role="progressbar" style= "width: 50%">
														50%
													</div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-secondary" role="progressbar" style= "width: 60%">
														60%
													</div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" class="progress-bar progress-bar-lg bg-info" role="progressbar" style= "width: 95%">
														95%
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="multiple">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Multiple Bars</h6>
											<p class="text-muted card-sub-title">Include multiple progress bars in a progress component if you need.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
													<div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress mg-b-10">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
													<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-teal" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
													<div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="sizes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Progress Sizes</h6>
											<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-b-5 tx-semibold">Size Super Extra Small</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress ht-2 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar ht-2" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress ht-2 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary ht-2" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress ht-2">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info ht-2" role="progressbar" style= "width: 50%"></div>
												</div>
											</div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5 tx-semibold">Size Extra Small</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress ht-5 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs ht-5" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress ht-5 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-xs ht-5" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-xs ht-5" role="progressbar" style= "width: 50%"></div>
												</div>
											</div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5 tx-semibold">Size Small</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress ht-7 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-sm  ht-7" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress ht-7 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-sm ht-7" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress ht-7">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-sm ht-7" role="progressbar" style= "width: 50%"></div>
												</div>
											</div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5 tx-semibold">Size Normal</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress ht-9 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar ht-9" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress ht-9 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary ht-9" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress ht-9">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar ht-9 bg-info" role="progressbar" style= "width: 50%"></div>
												</div>
											</div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5 tx-semibold">Size Large</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-lg" role="progressbar" style= "width: 25%"></div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-lg" role="progressbar" style= "width: 35%"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-lg" role="progressbar" style= "width: 50%"></div>
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
