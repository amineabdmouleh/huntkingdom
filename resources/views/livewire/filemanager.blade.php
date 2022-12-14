@extends('layouts.app')

@section('styles')


@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Manager</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Manager</li>
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
							<div class="col-lg-4 col-xl-3 col-md-4">
								<div class="card custom-card">
									<div class="card-body text-center">
										<button class="btn btn-primary btn-block" data-bs-target="#createfile" data-bs-toggle="modal"><i class="fe fe-plus me-1"></i> Add New File</button>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 file-manager">
											<div class="d-flex">
												<div>
													<a href="{{url('filemanager-list')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0">
														<i class="fe fe-image fs-18 me-2 bg-success-light text-success p-2 rounded-6"></i>Images
													</a>
												</div>
												<div class="text-end ms-auto mt-3">
													<span class="fs-11 text-dark">20 MB</span>
												</div>
											</div>
											<div class="d-flex">
												<div>
													<a href="{{url('filemanager-list')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0">
														<i class="fe fe-video fs-18 me-2 bg-secondary-light text-secondary p-2 rounded-6"></i>Videos
													</a>
												</div>
												<div class="text-end ms-auto mt-3">
													<span class="fs-11 text-dark">32.5 MB</span>
												</div>
											</div>
											<div class="d-flex">
												<div>
													<a href="{{url('filemanager-list')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0">
														<i class="fe fe-file-text fs-18 me-2 bg-primary-light text-primary p-2 rounded-6"></i> Docs
													</a>
												</div>
												<div class="text-end ms-auto mt-3">
													<span class="fs-11 text-dark">14.2 MB</span>
												</div>
											</div>
											<div class="d-flex">
												<div>
													<a href="{{url('filemanager-list')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0">
														<i class="fe fe-music fs-18 me-2 bg-warning-light text-warning p-2 rounded-6"></i> Music
													</a>
												</div>
												<div class="text-end ms-auto mt-3">
													<span class="fs-11 text-dark">13 MB</span>
												</div>
											</div>
											<div class="d-flex">
												<div>
													<a href="{{url('filemanager-list')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0">
														<i class="fe fe-download fs-18 me-2 bg-danger-light text-danger p-2 rounded-6"></i> Downloads
													</a>
												</div>
												<div class="text-end ms-auto mt-3">
													<span class="fs-11 text-dark">19.3 MB</span>
												</div>
											</div>
											<div class="d-flex">
												<div>
													<a href="{{url('filemanager-list')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0">
														<i class="fe fe-grid fs-18 me-2 bg-info-light text-info p-2 rounded-6"></i> More
													</a>
												</div>
												<div class="text-end ms-auto mt-3">
													<span class="fs-11  text-dark">23 MB</span>
												</div>
											</div>
											<div class="mt-4">
												<h5 class="mb-2">42.3GB <small>used of</small> 64GB </h5>
											</div>
											<div class="progress mt-2">
												<div class="progress-bar bg-primary rounded-0" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-primary me-2"></span>Remote Control
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-secondary me-2"></span>Google Drive
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-success me-2"></span>FTP Files
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-info me-2"></span>Transfer files
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-warning me-2"></span>Deep Clean
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-danger me-2"></span>Favourities
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="wd-10 ht-10 rounded-circle bg-teal me-2"></span>Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9 col-md-8">
								<div class="row row-sm">
									<div class="text-dark mb-2 ms-1 tx-16 tx-semibold tx-uppercase">All Folders</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
														<path fill="#b2bae6" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"></path>
														<path fill="#6575cd" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"></path>
													</svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-primary tx-semibold">Videos</h5>
														<p class="text-muted fs-13 mb-0">35 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">23 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffd7a6" d="M18.12158,11.88672c-1.18039-1.14226-3.05327-1.14485-4.23681-0.00586l-1.58985,1.58008c-0.39155,0.38922-0.39343,1.02216-0.00421,1.41371c0.00043,0.00043,0.00085,0.00086,0.00128,0.00129l4.67481,4.68457L17.14148,20H19c1.65611-0.00181,2.99819-1.34389,3-3v-0.83008c-0.00009-0.26567-0.10585-0.52039-0.29395-0.708L18.12158,11.88672z"/><path fill="#ff9b21" d="M5,20h14c0.355-0.00278,0.70662-0.06923,1.03815-0.19617l-9.91657-9.91711C8.94094,8.74376,7.06706,8.74161,5.88379,9.88184L2.294,13.46191c-0.18812,0.1876-0.2939,0.44232-0.294,0.708V17C2.00181,18.65611,3.34389,19.99819,5,20z"/><path fill="#ffc379" d="M19,4H5C3.34387,4.00183,2.00183,5.34387,2,7v7.16992c0.00012-0.26569,0.1059-0.52039,0.29401-0.70801l3.58978-3.58008c1.18329-1.14026,3.05713-1.13806,4.23779,0.00488l2.87585,2.87604l0.88733-0.8819c1.18353-1.13898,3.05646-1.13641,4.23682,0.00586l3.58447,3.5752c0.18811,0.18762,0.29388,0.44232,0.29395,0.70801V7C21.99817,5.34387,20.65613,4.00183,19,4z"/></svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-warning tx-semibold">Images</h5>
														<p class="text-muted fs-13 mb-0">21 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">19 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#01b8ff" d="M7.293,12.707l3.99969,3.9997a1.00354,1.00354,0,0,0,1.41468,0L16.707,12.707A.99989.99989,0,0,0,15.293,11.293L13,13.58594V8a1,1,0,0,0-2,0v5.58594L8.707,11.293A.99989.99989,0,0,0,7.293,12.707Z"/><path fill="#66d4ff" d="M12,22A10,10,0,1,0,2,12,10.01114,10.01114,0,0,0,12,22ZM7.293,11.293a.99963.99963,0,0,1,1.41406,0L11,13.58594V8a1,1,0,0,1,2,0v5.58594l2.293-2.293A.99989.99989,0,0,1,16.707,12.707l-3.99969,3.9997a1.00354,1.00354,0,0,1-1.41468,0L7.293,12.707A.99962.99962,0,0,1,7.293,11.293Z"/></svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-info tx-semibold">Downloads</h5>
														<p class="text-muted fs-13 mb-0">22 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">10 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f687b9" d="M21.2,6.71l-7.58,7.58c-1.16755,1.17084-3.06319,1.17351-4.23404,0.00596C9.38397,14.29398,9.38198,14.29199,9.38,14.29L1.8,6.71C2.29464,5.66676,3.34544,5.00126,4.5,5h14C19.65456,5.00126,20.70536,5.66676,21.2,6.71z"/><path fill="#f9afd0" d="M21.20001,6.71002L13.62,14.28998c-1.16754,1.17084-3.06317,1.17352-4.23401,0.00598C9.38397,14.29401,9.38196,14.29199,9.38,14.28998L1.79999,6.71002C1.60345,7.11169,1.50085,7.5528,1.5,8v10c0.00488,1.65485,1.34515,2.99512,3,3h14c1.65485-0.00488,2.99512-1.34515,3-3V8C21.49915,7.5528,21.39655,7.11169,21.20001,6.71002z"/><path fill="#f1388b" d="M17.67188,12c-0.26521,0.00002-0.51955-0.10538-0.707-0.293L13.793,8.53613c-1.26645-1.26667-1.26627-3.32018,0.0004-4.58663c1.02674-1.02657,2.61067-1.24566,3.87753-0.53637c1.27183-0.68512,2.84085-0.46806,3.8789,0.53662c1.26465,1.26708,1.26465,3.31885,0,4.58593L18.37891,11.707C18.19145,11.89462,17.9371,12.00003,17.67188,12z"/></svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-secondary tx-semibold">Chat</h5>
														<p class="text-muted fs-13 mb-0">16 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">15 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#66e0e0" d="M6,21H3c-0.55214,0.00014-0.99986-0.44734-1-0.99948C2,20.00035,2,20.00017,2,20v-6c-0.00014-0.55214,0.44734-0.99986,0.99948-1C2.99965,13,2.99983,13,3,13h3c1.65611,0.00181,2.99819,1.34389,3,3v2C8.99819,19.65611,7.65611,20.99819,6,21z M21,21h-3c-1.65611-0.00181-2.99819-1.34389-3-3v-2c0.00181-1.65611,1.34389-2.99819,3-3h3c0.55214-0.00014,0.99986,0.44734,1,0.99948c0,0.00017,0,0.00035,0,0.00052v6c0.00014,0.55214-0.44734,0.99986-0.99948,1C21.00035,21,21.00017,21,21,21z"/><path fill="#00cccc" d="M12,3C6.47717,3,2,7.47717,2,13v1c-0.00012-0.55212,0.44733-0.99988,0.99945-1C2.99963,13,2.99982,13,3,13h1c0-4.41827,3.58173-8,8-8s8,3.58173,8,8h1c0.55212-0.00012,0.99988,0.44733,1,0.99945V13C22,7.47717,17.52283,3,12,3z"/></svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-teal tx-semibold">Music</h5>
														<p class="text-muted fs-13 mb-0">16 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">15 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#fd9fab" d="M22,10.9999l-7-7H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3Z"/><path fill="#fd6074" d="M22,10.9999H17a2,2,0,0,1-2-2v-5Z"/></svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-danger tx-semibold">Docs</h5>
														<p class="text-muted fs-13 mb-0">16 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">15 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffd7a6" d="M18.12158,11.88672c-1.18039-1.14226-3.05327-1.14485-4.23681-0.00586l-1.58985,1.58008c-0.39155,0.38922-0.39343,1.02216-0.00421,1.41371c0.00043,0.00043,0.00085,0.00086,0.00128,0.00129l4.67481,4.68457L17.14148,20H19c1.65611-0.00181,2.99819-1.34389,3-3v-0.83008c-0.00009-0.26567-0.10585-0.52039-0.29395-0.708L18.12158,11.88672z"/><path fill="#ff9b21" d="M5,20h14c0.355-0.00278,0.70662-0.06923,1.03815-0.19617l-9.91657-9.91711C8.94094,8.74376,7.06706,8.74161,5.88379,9.88184L2.294,13.46191c-0.18812,0.1876-0.2939,0.44232-0.294,0.708V17C2.00181,18.65611,3.34389,19.99819,5,20z"/><path fill="#ffc379" d="M19,4H5C3.34387,4.00183,2.00183,5.34387,2,7v7.16992c0.00012-0.26569,0.1059-0.52039,0.29401-0.70801l3.58978-3.58008c1.18329-1.14026,3.05713-1.13806,4.23779,0.00488l2.87585,2.87604l0.88733-0.8819c1.18353-1.13898,3.05646-1.13641,4.23682,0.00586l3.58447,3.5752c0.18811,0.18762,0.29388,0.44232,0.29395,0.70801V7C21.99817,5.34387,20.65613,4.00183,19,4z"/></svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-warning tx-semibold">PDF</h5>
														<p class="text-muted fs-13 mb-0">16 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">15 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6 col-lg-6">
										<div class="card custom-card pos-relative open-folder">
											<div class="card-body px-4 pt-3 pb-2">
												<div class="d-flex">
													<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
														<rect width="7" height="7" x="2" y="2" fill="#3399ff" rx="1"/>
														<rect width="7" height="7" x="2" y="13" fill="#84c1ff" rx="1"/>
														<rect width="7" height="7" x="13" y="2" fill="#84c1ff" rx="1"/>
														<rect width="7" height="7" x="13" y="13" fill="#84c1ff" rx="1"/>
													</svg>
													<div class="ms-auto mt-3">
														<a href="javascript:;" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer bd-t-0">
												<a href="{{url('filemanager-list')}}" class="open-file"></a>
												<div class="d-flex">
													<div class="text-break">
														<h5 class="text-info tx-semibold">More</h5>
														<p class="text-muted fs-13 mb-0">16 Files</p>
													</div>
													<div class="ms-auto mt-4">
														<h6 class="tx-13 tx-semibold">15 MB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="text-dark mb-2 ms-1 tx-16 tx-semibold tx-uppercase">Files</div>
								<div class="row row-sm">
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/video.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-video tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">video.mp4</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/word.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-word tx-20 text-info me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">project.doc</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/01.jpg')}}" alt="img" class="w-100 file-manager-img"></a>
											<div class="card-footer bd-t-0 py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">hill.jpg</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">45 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/pdf.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-pdf tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">file.pdf</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">78 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/excel.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-excel tx-20 text-success me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">sheet.xls</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">34 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/02.jpg')}}" alt="img" class="w-100 file-manager-img"></a>
											<div class="card-footer bd-t-0 py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">image1.jpg</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">92 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/ppt1.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-powerpoint tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">demo.ppt</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">67 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/03.jpg')}}" alt="img" class="w-100 file-manager-img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">sky.jpg</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">56 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/04.jpg')}}" alt="img" class="w-100 file-manager-img"></a>
											<div class="card-footer bd-t-0 py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">image2.jpg</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">56 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/zip1.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-zip-box tx-20 text-warning me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">exe1.zip</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">107 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/files/05.jpg')}}" alt="img" class="w-100 file-manager-img"></a>
											<div class="card-footer bd-t-0 py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-image tx-20 text-danger me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">image1.jpg</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">92 KB</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
										<div class="card custom-card overflow-hidden">
											<a href="{{url('file-details')}}" class="mx-auto my-3"><img src="{{asset('build/assets/img/files/excel.png')}}" alt="img"></a>
											<div class="card-footer py-2 px-3">
												<div class="d-flex">
													<div class="d-flex text-break">
														<i class="mdi mdi-file-excel tx-20 text-success me-1"></i>
														<h6 class="mb-0 mt-2 tx-semibold">sheet.xls</h6>
													</div>
													<div class="ms-auto my-auto">
														<h6 class="text-muted mb-0 tx-normal">34 KB</h6>
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

@section('modals')
        <!-- MODAL -->
        <div class="modal" id="createfile">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Add New File</h6>
						<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
					</div>
					<div class="modal-body">
						<div>
							<input id="demo" type="file" name="files" accept="image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Add</button>
						<button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL -->
@endsection

@section('scripts')

        <!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('resources/assets/js/check-all-mail.js')


        <!-- INTERNAL FANCY UPLOADER JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection
