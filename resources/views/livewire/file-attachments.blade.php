@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Attachments</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Attachments</li>
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
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Coloured Square File Attachment</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-primary text-white"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<button type="button" class="btn btn-close btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-secondary text-white"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
												<button type="button" class="btn btn-close btn-secondary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-success text-white"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
												<button type="button" class="btn btn-close btn-success text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-warning text-white"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</span></button>
												<button type="button" class="btn btn-close btn-warning text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-danger text-white"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
												<button type="button" class="btn btn-close btn-danger text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-info text-white"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
												<button type="button" class="btn btn-close btn-info text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Coloured Rounded File Attachment</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-primary text-white"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<button type="button" class="btn rounded-pill btn-close btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-secondary text-white"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
												<button type="button" class="btn rounded-pill btn-close btn-secondary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-success text-white"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
												<button type="button" class="btn rounded-pill btn-close btn-success text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-warning text-white"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</span></button>
												<button type="button" class="btn rounded-pill btn-close btn-warning text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-danger text-white"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
												<button type="button" class="btn rounded-pill btn-close btn-danger text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-info text-white"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
												<button type="button" class="btn rounded-pill btn-close btn-info text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Outline Square File Attachment</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-outline-primary"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<button type="button" class="btn btn-close btn-outline-primary" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
												<button type="button" class="btn btn-close btn-outline-secondary" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-outline-success"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
												<button type="button" class="btn btn-close btn-outline-success" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-outline-warning"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</span></button>
												<button type="button" class="btn btn-close btn-outline-warning" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-outline-danger"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
												<button type="button" class="btn btn-close btn-outline-danger" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-outline-info"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
												<button type="button" class="btn btn-close btn-outline-info" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Outline Rounded File Attachment</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-outline-primary"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<button type="button" class="btn rounded-pill btn-close btn-outline-primary" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-outline-secondary"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
												<button type="button" class="btn rounded-pill btn-close btn-outline-secondary" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-outline-success"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
												<button type="button" class="btn rounded-pill btn-close btn-outline-success" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-outline-warning"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</span></button>
												<button type="button" class="btn rounded-pill btn-close btn-outline-warning" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-outline-danger"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
												<button type="button" class="btn rounded-pill btn-close btn-outline-danger" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-outline-info"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
												<button type="button" class="btn rounded-pill btn-close btn-outline-info" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Transparent Square File Attachment</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-primary-transparent"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<button type="button" class="btn btn-close btn-primary-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-secondary-transparent"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
												<button type="button" class="btn btn-close btn-secondary-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-success-transparent"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
												<button type="button" class="btn btn-close btn-success-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-warning-transparent"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</span></button>
												<button type="button" class="btn btn-close btn-warning-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-danger-transparent"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
												<button type="button" class="btn btn-close btn-danger-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-info-transparent"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
												<button type="button" class="btn btn-close btn-info-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Transparent Rounded File Attachment</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-primary-transparent rounded-pill"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<button type="button" class="btn btn-close btn-primary-transparent rounded-pill" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-secondary-transparent rounded-pill"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
												<button type="button" class="btn btn-close btn-secondary-transparent rounded-pill" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-success-transparent rounded-pill"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
												<button type="button" class="btn btn-close btn-success-transparent rounded-pill" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-warning-transparent rounded-pill"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</span></button>
												<button type="button" class="btn btn-close btn-warning-transparent rounded-pill" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-danger-transparent rounded-pill"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
												<button type="button" class="btn btn-close btn-danger-transparent rounded-pill" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-info-transparent rounded-pill"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
												<button type="button" class="btn btn-close btn-info-transparent rounded-pill" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Square File Attachment with link</h6>
									</div>
									<div class="card-body">
										<p>Square File Attachment with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a role="button" class="btn btn-primary text-white"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
												<a role="button" class="btn btn-close btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a role="button" class="btn btn-outline-secondary"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</a>
												<a role="button" class="btn btn-close btn-outline-secondary" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a role="button" class="btn btn-success-transparent"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</a>
												<a role="button" class="btn btn-close btn-success-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Rounded File_Attachment with link</h6>
									</div>
									<div class="card-body">
										<p>Rounded File Attachment with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a type="button" class="btn rounded-pill btn-primary text-white"><i class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
												<a type="button" class="btn rounded-pill btn-close btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a type="button" class="btn rounded-pill btn-outline-warning"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
												<a type="button" class="btn rounded-pill btn-close btn-outline-warning" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a type="button" class="btn rounded-pill btn-danger-transparent"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
												<a type="button" class="btn rounded-pill btn-close btn-danger-transparent" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Square File Attachment Sizes</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-sm btn-primary text-white"><i class="mdi mdi-file-image mx-2"></i>Image01..._jpg</button>
												<button type="button" class="btn btn-close btn-sm btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button class="btn btn-secondary text-white"><i class="mdi mdi-file-excel me-2"></i>Document.exl</button>
												<button class="btn btn-close btn-secondary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-lg btn-info"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</button>
												<button type="button" class="btn btn-close btn-lg btn-info" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Rounded File Attachment Sizes</h6>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-sm btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Image01..._jpg</button>
												<button type="button" class="btn rounded-pill btn-close btn-sm btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-secondary"><i class="mdi mdi-file-excel me-2"></i>Document.exl</button>
												<button type="button" class="btn rounded-pill btn-close btn-secondary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<button type="button" class="btn rounded-pill btn-lg btn-info"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</button>
												<button type="button" class="btn rounded-pill btn-close btn-lg btn-info" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Square File Attachment Sizes with link</h6>
									</div>
									<div class="card-body">
										<p>Square File Attachment Sizes with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
										<div class="tags">
											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a class="btn btn-sm btn-primary text-white"><i class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
												<a class="btn btn-close btn-sm btn-primary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a class="btn btn-secondary text-white"><i class="mdi mdi-file-excel me-2"></i>Document.exl</a>
												<a class="btn btn-close btn-secondary text-white" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>

											<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
												<a class="btn btn-lg btn-info"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</a>
												<a class="btn btn-close btn-lg btn-info" aria-label="Close">
													<span aria-hidden="true">×</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">Rounded File Attachment Sizes with link</h6>
									</div>
									<div class="card-body">
										<p>Rounded FileAttachment Sizes with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn rounded-pill btn-sm btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Image01..._jpg</a>
													<a class="btn rounded-pill btn-close btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn rounded-pill btn-secondary text-white"><i class="mdi mdi-file-excel me-2"></i>Document.exl</a>
													<a class="btn rounded-pill btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn rounded-pill btn-lg btn-info"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</a>
													<a class="btn rounded-pill btn-close btn-lg btn-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">File Attachment Style</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="">
												<div class="row">
													<div class="col-xl-2 col-lg-4 col-md-6 col-sm-4">
														<div class="file-image p-2">
															<div class="product-image">
																<a href="{{url('file-details')}}">
																	<img src="{{asset('build/assets/img/files/01.jpg')}}" alt="" class="w-100">
																</a>
																<ul class="icons">
																	<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																	<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
																</ul>
																<a href=""><span class="file-name">Image01.jpg</span></a>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-lg-4 col-md-6 col-sm-4">
														<div class="file-image p-2">
															<div class="product-image">
																<a href="{{url('file-details')}}">
																	<img src="{{asset('build/assets/img/files/02.jpg')}}" alt="" class="w-100">
																</a>
																<ul class="icons">
																	<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																	<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
																</ul>
																<a href=""><span class="file-name">Image02.jpg</span></a>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-lg-4 col-md-6 col-sm-4">
														<div class="file-image p-2">
															<div class="product-image">
																<a href="{{url('file-details')}}">
																	<img src="{{asset('build/assets/img/files/03.jpg')}}" alt="" class="w-100">
																</a>
																<ul class="icons">
																	<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																	<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
																</ul>
																<a href=""><span class="file-name">Image03.jpg</span></a>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-lg-4 col-md-6 col-sm-4">
														<div class="file-image p-2">
															<div class="product-image">
																<a href="{{url('file-details')}}">
																	<img src="{{asset('build/assets/img/files/04.jpg')}}" alt="" class="w-100">
																</a>
																<ul class="icons">
																	<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																	<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
																</ul>
																<a href=""><span class="file-name">Image04</span></a>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-lg-4 col-md-6 col-sm-4">
														<div class="file-image p-2">
															<div class="product-image">
																<a href="{{url('file-details')}}">
																	<img src="{{asset('build/assets/img/files/05.jpg')}}" alt="" class="w-100">
																</a>
																<ul class="icons">
																	<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																	<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
																</ul>
																<a href=""><span class="file-name">Image05.jpg</span></a>
															</div>
														</div>
													</div>
													<div class="col-xl-2 col-lg-4 col-md-6 col-sm-4">
														<div class="file-image p-2">
															<div class="product-image">
																<a href="{{url('file-details')}}">
																	<img src="{{asset('build/assets/img/files/06.jpg')}}" alt="" class="w-100">
																</a>
																<ul class="icons">
																	<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																	<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
																</ul>
																<a href=""><span class="file-name">Image06.jpg</span></a>
															</div>
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

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">File Attachment Small Size</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="file-image-sm">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/word.png')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-sm">word.doc</span>
												</div>
											</div>
											<div class="file-image-sm">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/10.jpg')}}" class="rounded-6" width="100" height="100" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-sm">Image2.jpg</span>
												</div>
											</div>
											<div class="file-image-sm">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/video.png')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-sm">hdi.mp4</span>
												</div>
											</div>
											<div class="file-image-sm">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/09.jpg')}}" class="rounded-6" width="100" height="100" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-sm">img3.jpg</span>
												</div>
											</div>
											<div class="file-image-sm">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/zip1.png')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-sm">lak.zip</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">File Attachment Medium Size</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="file-image-md">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/doc.png')}}" class="rounded-6" width="150" height="150" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-md bg-black-2">word.doc</span>
												</div>
											</div>
											<div class="file-image-md">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/10.jpg')}}" class="rounded-6" width="150" height="150" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-md bg-black-2">Image2.jpg</span>
												</div>
											</div>
											<div class="file-image-md">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/file.png')}}" class="rounded-6" width="150" height="150" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-md bg-black-2">hdi.pdf</span>
												</div>
											</div>
											<div class="file-image-md">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/09.jpg')}}" class="rounded-6" width="150" height="150" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-md bg-black-2">img3.jpg</span>
												</div>
											</div>
											<div class="file-image-md">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/zip.png')}}" class="rounded-6" width="150" height="150" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-md bg-black-2">lak.zip</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-header pb-3">
										<h6 class="main-content-label">File Attachment Large Size</h6>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="file-image-lg">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/doc.png')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-lg bg-black-2">word.doc</span>
												</div>
											</div>
											<div class="file-image-lg">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/10.jpg')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-lg bg-black-2">Image2.jpg</span>
												</div>
											</div>
											<div class="file-image-lg">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/file.png')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-lg bg-black-2">hdi.pdf</span>
												</div>
											</div>
											<div class="file-image-lg">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/09.jpg')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-lg bg-black-2">img3.jpg</span>
												</div>
											</div>
											<div class="file-image-lg">
												<div class="product-image">
													<a href="{{url('file-details')}}">
														<img src="{{asset('build/assets/img/files/zip.png')}}" class="rounded-6" alt="img">
													</a>
													<ul class="icons">
														<li><a href="javascript:;" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:;" class="btn btn-primary"><i class="fe fe-download"></i></a></li>
													</ul>
													<span class="file-name-lg bg-black-2">lak.zip</span>
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

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')

		
@endsection
