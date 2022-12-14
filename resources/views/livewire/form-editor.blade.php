@extends('layouts.app')

@section('styles')

@endsection

@section('content')

							<!-- PAGE HEADER -->
							<div class="page-header">
								<div>
									<h2 class="main-content-title tx-24 mg-b-5">Form Editor</h2>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Form Editor</li>
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
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header">
											<div>
												<h6 class="main-content-label">Summernote Editor</h6>
											</div>
										</div>
										<div class="card-body">
											<div id="summernote"><p>Hello Summernote</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header">
											<div>
												<h6 class="main-content-label">Rich Text Editor</h6>
											</div>
										</div>
										<div class="card-body">
											<textarea class="content" name="example"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header">
											<div>
												<h6 class="main-content-label">Quill Editor</h6>
											</div>
										</div>
										<div class="card-body">
											<div class="ql-wrapper ql-wrapper-demo">
												<div id="quillEditor">
													<p>Quill is a free, open source <a href="https://github.com/quilljs/quill/">Form editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
													<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header">
											<div>
												<h6 class="main-content-label">Quill Editor in Modal</h6>
											</div>
										</div>
										<div class="card-body">
											<div class="">
												<a class="btn ripple btn-primary" data-bs-target="#modalQuill" data-bs-toggle="modal" href="javascript:;">View Live Demo</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header">
											<div>
												<h6 class="main-content-label">Quill Inline-Edit Editor</h6>
											</div>
										</div>
										<div class="card-body">
											<div class="wd-xl-70p ht-350">
												<div class="ql-scrolling-demo rounded-6" id="scrolling-container">
													<div id="quillInline">
														<h2>Try to select me and edit</h2>
														<p><br></p>
														<p>Pippin looked out from the shelter of <a href="https://www.bootstrapdash.com">Gandalf"s cloak</a>. He wondered if he was awake or still sleeping, still in the swift-moving dream in which he had been wrapped so long since the great ride began. The <a href="http://bootstrapdash.net">dark world</a> was rushing by and the wind sang loudly in his ears. He could see nothing but the wheeling stars, and away to his right vast shadows against the sky where the mountains of the South marched past. Sleepily he tried to reckon the times and stages of their journey, but his memory was drowsy and uncertain.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->
@endsection

@section('modals')

        <!-- QUILL MODAL -->
        <div class="modal" id="modalQuill">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header pd-20">
						<h6 class="modal-title">Create New Document</h6>
						<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body pd-0">
						<div class="ql-wrapper ql-wrapper-modal ht-250">
							<div class="flex-1" id="quillEditorModal2">
								<p>Quill is a free, open source <a href="https://github.com/quilljs/quill/">Form editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
								<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
							</div>
						</div>
					</div>
					<div class="modal-footer pd-20">
						<button class="btn ripple btn-success" type="button">Save changes</button>
						<button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END QUILL MODAL -->

@endsection

@section('scripts')

        <!-- INTERNAL QUILL JS -->
        <script src="{{asset('build/assets/plugins/quill/quill.min.js')}}"></script>

        <!-- INTERNAL RICH TEXT EDITOR JS -->
        <script src="{{asset('build/assets/plugins/rich-text/jquery.richtext.js')}}"></script>

        <!-- INTERNAL SUMMERNOTE EDITOR JS -->
        <script src="{{asset('build/assets/plugins/summernote-editor/summernote.js')}}"></script>
		@vite('resources/assets/js/summernote.js')


        <!-- INTERNAL FORM-EDITOR JS -->
		@vite('resources/assets/js/form-editor.js')


@endsection
