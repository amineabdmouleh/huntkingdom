@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Extras</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Extras</li>
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
							<div class="col-xl-12 cl-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Opacity Example</h6>
											<p class="text-muted  card-sub-title">You can set opacity to an element instantly by using the following utilities classes for opacity.</p>
										</div>
										<div class="row row-sm">
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-0">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-1">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-2">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-3">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-4">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-5">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-6">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-7">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-8">Opacity Example</span>
													</div>
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card shadow">
													<div class="card-body">
														<span class="op-9">Opacity Example</span>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.op-[value]</code></td>
														<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
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
														<td><code>.op-[breakpoint]-[value]</code></td>
														<td>
															<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-12 cl-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Shadow Example</h6>
											<p class="text-muted  card-sub-title">You can add or remove shadow to an element instantly by using the following utilities classes for shadow.</p>
										</div>
										<div class="row row-sm">
											<div class="col-xl-4">
												<div class="card custom-card">
													<div class="card-body shadow-sm">
														<span>Small Shadow</span>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card custom-card">
													<div class="card-body shadow-md">
														<span>Medium Shadow</span>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card custom-card">
													<div class="card-body shadow-lg">
														<span>Large Shadow</span>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card custom-card">
													<div class="card-body shadow-base">
														<span>Shadow</span>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card custom-card">
													<div class="card-body shadow">
														<span>Normal Shadow</span>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card custom-card">
													<div class="card-body shadow-none">
														<span>Shadow None</span>
													</div>
												</div>
											</div>
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
														<td><code>.shadow-sm</code></td>
														<td>Small Shadow.</td>
													</tr>
													<tr>
														<td><code>.shadow-md</code></td>
														<td>Medium Shadow.</td>
													</tr>
													<tr>
														<td><code>.shadow-lg</code></td>
														<td>Large Shadow.</td>
													</tr>
													<tr>
														<td><code>.shadow-base</code></td>
														<td>Add shadow to any box element.</td>
													</tr>
													<tr>
														<td><code>.shadow</code></td>
														<td>Normal shadow.</td>
													</tr>
													<tr>
														<td><code>.shadow-none</code></td>
														<td>Remove shadow to any box element.</td>
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
