@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Margin</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Margin</li>
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
								<div class="card custom-card" id="setmargin">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Set Margin</h6>
											<p class="text-muted  card-sub-title">You can set a margin to an element instantly by using the following utilities classes.</p>
										</div>
										<div class="d-flex">
											<div class="wd-150 ht-80 bg-light"></div>
											<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light mg-l-20">
												.mg-l-20 (or) .ms-2
											</div>
											<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light mg-l-40">
												.mg-l-40 (or) .ms-4
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Smaller Margin</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.mg-t-[value]<br>
														.mg-r-[value]<br>
														.mg-b-[value]<br>
														.mg-l-[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
													</tr>
													<tr>
														<td><code>.mt-[value]<br>
														.me-[value]<br>
														.mb-[value]<br>
														.ms-[value]</code></td>
														<td>0 | 1 | 2 | 3 | 4 | 5</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="mediamargin">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Media Query Margin</h6>
											<p class="text-muted  card-sub-title">You can also set a margin to a different media query using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.mg-[breakpoint]-t-[value]<br>
														.mg-[breakpoint]-r-[value]<br>
														.mg-[breakpoint]-b-[value]<br>
														.mg-[breakpoint]-l-[value]</code></td>
														<td>
															<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the margin value (refer to code above)</p>
														</td>
													</tr>
													<tr>
														<td><code>.mt-[breakpoint]-[value]<br>
														.me-[breakpoint]-[value]<br>
														.mb-[breakpoint]-[value]<br>
														.ms-[breakpoint]-[value]</code></td>
														<td>
															<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the margin value (refer to code above)</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="automargin">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Auto Margin</h6>
											<p class="text-muted  card-sub-title">You can also set a margin to a different media query using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.mg-t-auto</code> (or) <code>.mt-auto</code></td>
														<td>Set a top margin to auto</td>
													</tr>
													<tr>
														<td><code>.mg-r-auto</code> (or) <code> .me-auto</code></td>
														<td>Set a right margin to auto</td>
													</tr>
													<tr>
														<td><code>.mg-b-auto</code> (or) <code>.mb-auto</code></td>
														<td>Set a bottom margin to auto</td>
													</tr>
													<tr>
														<td><code>.mg-l-auto</code> (or) <code>.ms-auto</code></td>
														<td>Set a left margin to auto</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

@endsection
