@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Alerts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Alerts</li>
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
								<div class="card custom-card" id="basic-alert">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Alerts</h6>
											<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-primary" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-secondary" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-success" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-danger" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-warning" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-info mg-b-0" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="alert alert-[value]"</code></td>
													<td>success | info | warning | danger</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card custom-card" id="outline-alert">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Outline Alerts</h6>
											<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-outline-primary" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-outline-secondary" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-outline-success" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-outline-danger" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-outline-warning mg-b-0" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="alert alert-outline-[value]"</code></td>
													<td>success | info | warning | danger</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card custom-card" id="solid-alert">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Solid Colored Alerts</h6>
											<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-solid-primary alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-solid-secondary alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-solid-success alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-solid-info alert-dismissible fade show" role="alert">
													<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-solid-warning alert-dismissible fade show" role="alert">
													<strong>Warning!</strong> Better check yourself, you're not looking too good.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-solid-danger alert-dismissible fade show  mg-b-0" role="alert">
													<strong>Oh snap!</strong> Change a few things up and try submitting again.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="alert alert-solid-[value]"</code></td>
													<td>success | info | warning | danger</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card custom-card" id="link-alerts">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Links in Alerts</h6>
											<p class="text-muted card-sub-title">Use the <code class="highlighter-rouge">.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-primary" role="alert">
												A simple primary alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												</div>
												<div class="alert alert-secondary" role="alert">
												A simple secondary alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												</div>
												<div class="alert alert-success" role="alert">
												A simple success alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												</div>
												<div class="alert alert-danger" role="alert">
												A simple danger alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												</div>
												<div class="alert alert-warning" role="alert">
												A simple warning alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												</div>
												<div class="alert alert-info mb-0" role="alert">
												A simple info alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="additional-alerts">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Additional Content Alert</h6>
											<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-success mb-0" role="alert">
													<h4 class="alert-heading">Well done!</h4>
													<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
													<hr>
													<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="dismiss-alerts">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dismissing Alerts</h6>
											<p class="text-muted card-sub-title">Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-primary alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-secondary alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-success alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-info alert-dismissible fade show" role="alert">
													<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-warning alert-dismissible fade show" role="alert">
													<strong>Warning!</strong> Better check yourself, you're not looking too good.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-danger alert-dismissible fade show  mg-b-0" role="alert">
													<strong>Oh snap!</strong> Change a few things up and try submitting again.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="icon-alerts">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alert With Icon</h6>
											<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
										</div>
										<div class="text-wrap">
											<div class="example">

												<div class="alert alert-primary d-flex align-items-center" role="alert">
													<i class="fe fe-info me-2"></i>
													<div>
														An example alert with an icon
													</div>
												</div>
												<div class="alert alert-secondary d-flex align-items-center" role="alert">
													<i class="fe fe-download me-2"></i>
													<div>
														An example alert with an icon
													</div>
												</div>
												<div class="alert alert-info d-flex align-items-center" role="alert">
													<i class="fe fe-check-square me-2"></i>
													<div>
														An example alert with an icon
													</div>
												</div>
												<div class="alert alert-success d-flex align-items-center mb-0" role="alert">
													<i class="fe fe-bell me-2"></i>
													<div>
														An example alert with an icon
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="icon-dismissalerts">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alert With Icon Dismissing</h6>
											<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-primary alert-dismissible fade show" role="alert">
													<i class="fe fe-info me-2"></i>
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-secondary alert-dismissible fade show" role="alert">
													<i class="fe fe-download me-2"></i>
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-success alert-dismissible fade show" role="alert">
													<i class="fe fe-check-square me-2"></i>
													<strong>Well done!</strong> You successfully read this important alert message.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
													<i class="fe fe-bell me-2"></i>
													<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alert Style 1</h6>
											<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="alert alert-success">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>Success Message</strong>
															<hr>
															<p>You successfully read this important alert message.</p>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="alert alert-info">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>Info Message</strong>
															<hr>
															<p>This alert needs your attention, but not super important.</p>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="alert alert-warning">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>Warning Message</strong>
															<hr>
															<p>Best check yo self, you're not looking too good.</p>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="alert alert-danger mb-0">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>Danger Message</strong>
															<hr>
															<p>Change a few things up and try submitting again.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alert Style 2</h6>
											<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-xl-4 col-sm-6 col-md-6">
														<div class="alert alert-primary alert-bdleft-primary">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>A simple alert style</strong>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6 col-md-6">
														<div class="alert alert-info alert-bdleft-info">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>A simple alert style</strong>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6 col-md-6">
														<div class="alert alert-danger alert-bdleft-danger">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>A simple alert style</strong>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6 col-md-6">
														<div class="alert alert-warning mb-xl-0 alert-bdleft-warning">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>A simple alert style</strong>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6 col-md-6">
														<div class="alert alert-secondary mb-xl-0 alert-bdleft-secondary">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>A simple alert style</strong>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6 col-md-6">
														<div class="alert alert-success mb-xl-0 alert-bdleft-success">
															<button type="button" class="btn-close float-end fs-10" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
															<strong>A simple alert style</strong>
														</div>
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

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>
@endsection
