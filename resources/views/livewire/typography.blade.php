@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Typography</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Typography</li>
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
								<div class="card custom-card" id="heading">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Headings</h6>
											<p class="text-muted card-sub-title">All HTML headings, <code>h1</code> through <code>h6</code>, are available.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1>h1 Heading</h1>
												<h2>h2 Heading</h2>
												<h3>h3 Heading</h3>
												<h4>h4 Heading</h4>
												<h5>h5 Heading</h5>
												<h6>h6 Heading</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Headings</h6>
											<p class="text-muted card-sub-title">All HTML headings, <code>h1</code> through <code>h6</code>, are available.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1 class="text-primary">h1 Heading</h1>
												<h2 class="text-secondary">h2 Heading</h2>
												<h3 class="text-success">h3 Heading</h3>
												<h4 class="text-danger">h4 Heading</h4>
												<h5 class="text-info">h5 Heading</h5>
												<h6 class="text-warning">h6 Heading</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card" id="display">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Display headings</h6>
											<p class="text-muted card-sub-title">you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1 class="display-1">Display 1</h1>
												<hr>
												<h1 class="display-2">Display 2</h1>
												<hr>
												<h1 class="display-3">Display 3</h1>
												<hr>
												<h1 class="display-4">Display 4</h1>
												<hr>
												<h1 class="display-5">Display 5</h1>
												<hr>
												<h1 class="display-6">Display 6</h1>
												<hr>
												<h1 class="display-7">Display 7</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Display headings</h6>
											<p class="text-muted card-sub-title">you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1 class="display-1 text-primary">Display 1</h1>
												<hr>
												<h1 class="display-2 text-secondary">Display 2</h1>
												<hr>
												<h1 class="display-3 text-success">Display 3</h1>
												<hr>
												<h1 class="display-4 text-danger">Display 4</h1>
												<hr>
												<h1 class="display-5 text-info">Display 5</h1>
												<hr>
												<h1 class="display-6 text-warning">Display 6</h1>
												<hr>
												<h1 class="display-7 text-teal">Display 7</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="lead">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Lead</h6>
											<p class="text-muted card-sub-title">Make a paragraph stand out by adding <code>.lead</code>.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<p class="lead mb-0">
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="linetext">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Inline text elements</h6>
											<p class="text-muted card-sub-title">Styling for common inline HTML5 elements.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<p>You can use the mark tag to <mark>highlight</mark> text.</p>
												<p><del>This line of text is meant to be treated as deleted text.</del></p>
												<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
												<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
												<p><u>This line of text will render as underlined</u></p>
												<p><small>This line of text is meant to be treated as fine print.</small></p>
												<p><strong>This line rendered as bold text.</strong></p>
												<p class="mb-0"><em>This line rendered as italicized text.</em></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="blockquotes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Blockquotes</h6>
											<p class="text-muted card-sub-title">For quoting blocks of content from another source within your document. <code>.blockquote</code> around any HTML as the quote.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<blockquote class="blockquote mb-0">
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Text Tranform</h6>
											<p class="text-muted card-sub-title">Text Transform will change the text into lower, upper, capitilize cases.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<p class="text-uppercase">upper case</p>
												<p class="text-lowercase">LOWER CASE</p>
												<p class="text-capitalize mb-0">text capitalize</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card" id="aligment">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alignment</h6>
											<p class="text-muted card-sub-title">Use text utilities as needed to change the alignment of your blockquote.</p>
										</div>
										<div class="text-wrap mb-4">
											<div class="example">
												<figure>
													<blockquote class="blockquote">
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
													<figcaption class="blockquote-footer">
														Someone famous in <cite title="Source Title">Source Title</cite>
													</figcaption>
													</figure>
											</div>
										</div>
										<div class="text-wrap mb-4">
											<div class="example">
												<figure class="text-center">
													<blockquote class="blockquote">
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
													<figcaption class="blockquote-footer">
														Someone famous in <cite title="Source Title">Source Title</cite>
													</figcaption>
													</figure>
											</div>
										</div>
										<div class="text-wrap">
											<div class="example">
												<figure class="text-end">
													<blockquote class="blockquote">
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
													<figcaption class="blockquote-footer">
														Someone famous in <cite title="Source Title">Source Title</cite>
													</figcaption>
													</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="fontsize">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Font Size</h6>
											<p class="text-muted card-sub-title">You can set a font size instantly to an element by using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.tx-[size]</code></td>
														<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="fontweight">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Font Weight</h6>
											<p class="text-muted card-sub-title">You can set a font weight instantly to an element by using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Weight</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.tx-[weight]</code></td>
														<td>bold | semibold | medium | normal | light | thin | xthin</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="fontfamily">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Font Family</h6>
											<p class="text-muted card-sub-title">You can set a font family instantly to an element by using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Family</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.tx-[family]</code></td>
														<td>sserif | roboto</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="fontspace">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Font Spacing</h6>
											<p class="text-muted card-sub-title">You can set a font spacing instantly to an element by using the following utilities classes.</p>
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
														<td><code>.tx-spacing-[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
													</tr>
													<tr>
														<td><code>.tx-spacing--[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="fontcolor">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Font Color</h6>
											<p class="text-muted card-sub-title">You can set a font color instantly to an element by using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Color</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.tx-[color]</code></td>
														<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
													</tr>
													<tr>
														<td><code>.tx-gray-[num]</code></td>
														<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
													</tr>
													<tr>
														<td><code>.tx-white-[transparency]</code></td>
														<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="lineh">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Line Height</h6>
											<p class="text-muted card-sub-title">You can set a line height instantly to an element by using the following utilities classes.</p>
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
														<td><code>.lh-[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-20p">Viewport</th>
														<th class="wd-50p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.lh-[viewport]-[value]</code></td>
														<td>xs | sm | md | lg | xl</td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
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

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>

@endsection
