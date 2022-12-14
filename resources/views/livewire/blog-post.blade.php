@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Blog Post</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
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
							<div class="col-lg-12 col-md-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="form-group">
											<label class="tx-semibold">Title</label>
											<input type="text" class="form-control" placeholder="Title">
										</div>
										<div class="form-group">
											<label class="tx-semibold">Category</label>
												<select class="form-control select2-no-search">
													<option label="Choose one">
													</option>
													<option value="Fashion">
														Fashion
													</option>
													<option value="Life Style">
														Life Style
													</option>
													<option value="Science">
														Science
													</option>
													<option value="Health">
														Health
													</option>
													<option value="Humanities">
														Humanities
													</option>
													<option value="Business">
														Business
													</option>
													<option value="Marketing">
														Marketing
													</option>
												</select>
										</div>
										<div class="form-group">
											<label class="tx-semibold">Type</label>
											<div class="d-md-flex ad-post-details">
												<label class="custom-control custom-radio mb-2 me-4">
													<input type="radio" class="custom-control-input" name="radios2" value="option1">
													<span class="custom-control-label">Image</span>
												</label>
												<label class="custom-control custom-radio  mb-2 me-4">
													<input type="radio" class="custom-control-input" name="radios2" value="option2" checked="">
													<span class="custom-control-label">Video</span>
												</label>
												<label class="custom-control custom-radio mb-2 me-4">
													<input type="radio" class="custom-control-input" name="radios2" value="option3">
													<span class="custom-control-label">Audio</span>
												</label>
												<label class="custom-control custom-radio mb-2">
													<input type="radio" class="custom-control-input" name="radios2" value="option4">
													<span class="custom-control-label">Text</span>
												</label>
											</div>
										</div>
										<div class="ql-wrapper ql-wrapper-demo mb-3">
											<label class="tx-semibold">Post Description</label>
											<div id="quillEditor">
											</div>
										</div>
										<label class="tx-semibold">Upload File</label>
										<div class="p-4 border rounded-6 mb-4 form-group">
											<div>
												<input id="demo" type="file" name="files" accept="image/jpg, image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
											</div>
										</div>
										<div class="form-group mb-0">
											<label class="tx-semibold">Upload Video URL</label>
											<input type="text" class="form-control" placeholder="https://videos.com" value="https://www.youtube.com/embed/tMWkeBIohBs">
										</div>
									</div>
									<div class="card-footer mb-1">
										<a href="javascript:void(0)" class="btn btn-primary">Post</a>
										<a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

        <!-- INTERNAL BLOG POST JS -->
		@vite('resources/assets/js/blog-post.js')

        <!-- INTERNAL QUILL JS -->
        <script src="{{asset('build/assets/plugins/quill/quill.min.js')}}"></script>

        <!-- INTERNAL FANCY UPLOADER JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


@endsection
