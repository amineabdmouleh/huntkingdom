@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">List Group</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Group</li>
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
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="list-group-item">Cras justo odio</li>
														<li class="list-group-item">Dapibus ac facilisis in</li>
														<li class="list-group-item">Morbi leo risus</li>
														<li class="list-group-item">Porta ac consectetur ac</li>
														<li class="list-group-item">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="disabled">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Disabled Item</h6>
											<p class="text-muted card-sub-title">Add disabled class to a <code>.list-group-item</code> to indicate the current active selection.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="list-group-item">Cras justo odio</li>
														<li class="list-group-item disabled">Dapibus ac facilisis in</li>
														<li class="list-group-item">Morbi leo risus</li>
														<li class="list-group-item">Porta ac consectetur ac</li>
														<li class="list-group-item">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="active">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Active Item</h6>
											<p class="text-muted card-sub-title">Add active class to a <code>.list-group-item</code> to indicate the current active selection.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="list-group-item">Cras justo odio</li>
														<li class="list-group-item active">Dapibus ac facilisis in</li>
														<li class="list-group-item">Morbi leo risus</li>
														<li class="list-group-item">Porta ac consectetur ac</li>
														<li class="list-group-item">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="link">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Link and Buttons</h6>
											<p class="text-muted card-sub-title">Use link tag or button to create actionable list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<div class="list-group">
														<a class="list-group-item list-group-item-action active" href="javascript:;">Cras justo odio</a>
														<a class="list-group-item list-group-item-action" href="javascript:;">Dapibus ac facilisis in</a>
														<a class="list-group-item list-group-item-action" href="javascript:;">Morbi leo risus</a>
														<a class="list-group-item list-group-item-action" href="javascript:;">Porta ac consectetur ac</a>
														<a class="list-group-item list-group-item-action" href="javascript:;">Vestibulum at eros</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="image">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Using Avatars</h6>
											<p class="text-muted card-sub-title">A list that contain an image with the help of utility classes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="list-group-item d-flex align-items-center">
															<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{asset('build/assets/img/users/2.jpg')}}">
															<div>
																<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Premium Member</span>
															</div>
														</li>
														<li class="list-group-item d-flex align-items-center">
															<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{asset('build/assets/img/users/3.jpg')}}">
															<div>
																<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Premium Member</span>
															</div>
														</li>
														<li class="list-group-item d-flex align-items-center">
															<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{asset('build/assets/img/users/4.jpg')}}">
															<div>
																<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Premium Member</span>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="badge">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">With badges</h6>
											<p class="text-muted card-sub-title">Add badges to any list group item to show unread counts, activity, and more with the help of some.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="list-group-item d-flex justify-content-between align-items-center">
														Cras justo odio
														<span class="badge bg-primary rounded-pill">14</span>
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">
														Dapibus ac facilisis in
														<span class="badge bg-primary rounded-pill">2</span>
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">
														Morbi leo risus
														<span class="badge bg-primary rounded-pill">1</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="flush">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Flush List</h6>
											<p class="text-muted card-sub-title">Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group list-group-flush">
														<li class="list-group-item">Cras justo odio</li>
														<li class="list-group-item">Dapibus ac facilisis in</li>
														<li class="list-group-item">Morbi leo risus</li>
														<li class="list-group-item">Porta ac consectetur ac</li>
														<li class="list-group-item">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="context">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Contextual classes</h6>
											<p class="text-muted card-sub-title">Use contextual classes to style list items with a stateful background and color.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="list-group-item">Dapibus ac facilisis in</li>
														<li class="list-group-item list-group-item-primary">A simple primary list group item</li>
														<li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
														<li class="list-group-item list-group-item-success">A simple success list group item</li>
														<li class="list-group-item list-group-item-warning">A simple warning list group item</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card" id="content">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom content</h6>
											<p class="text-muted card-sub-title">Add badges to any list group item to show unread counts, activity, and more with the help of some.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<div class="list-group">
														<a href="javascript:;" class="list-group-item list-group-item-action active">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-1 tx-medium">List group item heading</h5>
															<small>3 days ago</small>
														</div>
														<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
														<small>Donec id elit non mi porta.</small>
														</a>
														<a href="javascript:;" class="list-group-item list-group-item-action">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-1 tx-medium">List group item heading</h5>
															<small class="text-muted">3 days ago</small>
														</div>
														<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
														<small class="text-muted">Donec id elit non mi porta.</small>
														</a>
														<a href="javascript:;" class="list-group-item list-group-item-action">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-1 tx-medium">List group item heading</h5>
															<small class="text-muted">3 days ago</small>
														</div>
														<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
														<small class="text-muted">Donec id elit non mi porta.</small>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card custom-card mg-b-20" id="list1">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Unstyled List
										</div>
										<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
										<div class="text-wrap">
											<div class="example">
												<ul class="list-unstyled">
													<li>This is a list.</li>
													<li>It appears completely unstyled.</li>
													<li>Structurally, it's still a list.</li>
													<li>However, this style only applies to immediate child elements.</li>
													<li>Nested lists:
													<ul>
														<li>are unaffected by this style</li>
														<li>are unaffected by this style</li>
														<li>will still show a bullet</li>
														<li>will still show a bullet</li>
														<li>and have appropriate left margin</li>
													</ul>
													</li>
													<li>This may still come in handy in some situations.</li>
													<li>This may still come in handy in some situations.</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Ordered List style 1</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="listorder">Cras justo odio</li>
														<li class="listorder">Dapibus ac facilisis in</li>
														<li class="listorder">Morbi leo risus</li>
														<li class="listorder">Porta ac consectetur ac</li>
														<li class="listorder">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Ordered List style 2</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="listorder1">Cras justo odio</li>
														<li class="listorder1">Dapibus ac facilisis in</li>
														<li class="listorder1">Morbi leo risus</li>
														<li class="listorder1">Porta ac consectetur ac</li>
														<li class="listorder1">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Unordered List style 1</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="listunorder1">Cras justo odio</li>
														<li class="listunorder1">Dapibus ac facilisis in</li>
														<li class="listunorder1">Morbi leo risus</li>
														<li class="listunorder1">Porta ac consectetur ac</li>
														<li class="listunorder1">Vestibulum at eros</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Unordered List style 2</h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="">
													<ul class="list-group">
														<li class="listunorder">Cras justo odio</li>
														<li class="listunorder">Dapibus ac facilisis in</li>
														<li class="listunorder">Morbi leo risus</li>
														<li class="listunorder">Porta ac consectetur ac</li>
														<li class="listunorder">Vestibulum at eros</li>
													</ul>
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

        <!-- PEITY JS -->
        <script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('resources/assets/js/widgets.js')


        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/clipboard/clipboard.js')}}"></script>
		
@endsection
