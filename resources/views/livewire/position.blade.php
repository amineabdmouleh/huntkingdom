@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Position</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Position</li>
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
								<div class="card custom-card" id="setposition">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Set Position</h6>
											<p class="text-muted  card-sub-title">You can set a position to an element instantly by using the following utilities classes.</p>
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
														<td><code>.pos-relative</code></td>
														<td>Set a relative position to an element.</td>
													</tr>
													<tr>
														<td><code>.pos-absolute</code></td>
														<td>Set an absolute position to an element.</td>
													</tr>
													<tr>
														<td><code>.pos-fixed</code></td>
														<td>Set a fixed position to an element.</td>
													</tr>
													<tr>
														<td><code>.pos-static</code></td>
														<td>Set a static position to an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="cornering">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Cornering</h6>
											<p class="text-muted  card-sub-title">You can set a top,right,bottom and left position to an element using the following utilities classes.</p>
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
														<td><code>.t-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.r-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.b-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.l-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="zyposition">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">X and Y Position</h6>
											<p class="text-muted  card-sub-title">You can set a top,right,bottom and left position to an element using the following utilities classes.</p>
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
														<td><code>.t-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.r-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.b-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.l-[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="negative">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Negative Corner</h6>
											<p class="text-muted  card-sub-title">You can set a negative positioning to an element using the following utilities classes.</p>
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
														<td><code>.t--[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.r--[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.b--[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
													<tr>
														<td><code>.l--[value]</code></td>
														<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="zindex">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Z-Index Property</h6>
											<p class="text-muted  card-sub-title">You can set a z-index to an element instantly using the following utilities classes.</p>
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
														<td><code>.z-index-[value]</code></td>
														<td>10 | 50 | 100 | 150 | 200</td>
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
