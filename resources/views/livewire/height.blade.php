@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Height</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Height</li>
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
								<div class="card custom-card" id="seth">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Set Height</h6>
											<p class="text-muted  card-sub-title">You can set a height to an element instantly by using the following utilities classes for height.</p>
										</div>
										<div class="d-flex">
											<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light">
												.ht-80
											</div>
											<div class="d-flex align-items-center justify-content-center wd-150 ht-150 bg-light mg-l-20">
												.ht-150
											</div>
											<div class="d-flex align-items-center justify-content-center wd-150 ht-100 bg-light mg-l-20">
												.ht-100
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Smaller Height</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.ht-[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive mt-0">
											<table class="table main-table-reference mg-t-0">
												<thead>
													<tr>
														<th class="wd-30p">Regular Height</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.ht-[value]</code></td>
														<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Bigger Height</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.ht-[value]</code></td>
														<td>150 | 200 | 250 | 300 | ... | 850 &nbsp; (step of 50)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="percentage">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Percentage Height</h6>
											<p class="text-muted  card-sub-title">You can set a height through percentage using the following utilities classes.</p>
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
														<td><code>.ht-[value]p</code></td>
														<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="media">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Media Query Height</h6>
											<p class="text-muted  card-sub-title">You can also set a height to a different media query using the following utilities classes.</p>
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
														<td><code>.ht-[size]-[value]</code></td>
														<td class="bd-l" rowspan="2">
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the height value (refer to code above)</p>
														</td>
													</tr>
													<tr>
														<td><code>.ht-[size]-[value]p</code></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="extra">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Extra Height Classes</h6>
											<p class="text-muted  card-sub-title">You can also set a height using the extra utilities classes below.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.ht-100v</code></td>
														<td>Set a height to an element based on viewport height.</td>
													</tr>
													<tr>
														<td><code>.ht-auto</code></td>
														<td>Set an auto height to an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW  -->
@endsection

@section('scripts')

@endsection
