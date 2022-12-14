@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Mail Inbox</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mail Inbox</li>
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
						<!-- PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-xl-3 col-lg-4">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="">
										<div class="p-4 border-bottom">
											<a class="btn btn-primary btn-block btn-compose" href="{{url('mail-compose')}}">Compose</a>
										</div>
										<div class="card-body tab-list-items">
											<div class="main-content-left main-content-left-mail">
												<div class="main-mail-menu">
													<label class="main-content-label main-content-label-sm">Primary</label>
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link active" href="javascript:;">
															<i class="fe fe-mail"></i> Inbox <span class="bg-primary text-white">20</span>
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-star"></i> Starred <span class="bg-secondary text-white">3</span>
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-bookmark"></i> Important <span class="bg-info text-white">10</span>
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-send"></i> Sent Mail
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-edit"></i> Drafts
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-disc"></i> Spam <span class="bg-dark text-white">128</span>
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-trash"></i> Trash <span class="bg-danger text-white">6</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Label</label>
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-folder"></i> Social
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-folder"></i> Work <span class="bg-warning text-white">22</span>
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-folder"></i> Personal
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-folder"></i> Promotions <span class="bg-success text-white">22</span>
														</a>
														<a class="nav-link" href="javascript:;">
															<i class="fe fe-folder-plus"></i> Updates <span class="bg-dark text-white">17</span>
														</a>
													</nav>
												</div><!-- main-mail-menu -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8  main-content-body-mail1">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="inbox-body p-4">
										<div class="input-group main-mail-search">
											<input class="form-control" placeholder="Search Email..." type="text">
											<span class="input-group-btn">
												<button class="btn btn-primary" type="button">
													<span class="input-group-btn">
														<i class="fa fa-search"></i>
													</span>
												</button>
											</span>
										</div>
										<div class="mail-option mt-4">
											<div class="chk-all border-0">
												<div class="btn-group">
													<a data-bs-toggle="dropdown" href="javascript:;" class="btn mini all" aria-expanded="false">
														All
														<i class="fe fe-chevron-down"></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="javascript:;"> None</a></li>
														<li><a href="javascript:;"> Read</a></li>
														<li><a href="javascript:;"> Unread</a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a href="javascript:;" class="btn mini tooltips">
													<i class="fe fe-refresh-cw"></i>
												</a>
											</div>
											<div class="btn-group hidden-phone">
												<a data-bs-toggle="dropdown" href="javascript:;" class="btn mini blue" aria-expanded="false">
													More
													<i class="fe fe-chevron-down"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="javascript:;"><i class="fe fe-edit me-2"></i> Mark as Read</a></li>
													<li><a href="javascript:;"><i class="fe fe fe-slash me-2"></i> Spam</a></li>
													<li class="divider"></li>
													<li><a href="javascript:;"><i class="fe fe-trash me-2"></i> Delete</a></li>
												</ul>
											</div>
											<ul class="unstyled inbox-pagination">
												<li><span>1-50 of 234</span></li>

												<li>
													<a class="btn np-btn" href="javascript:;"><i class="fe fe-chevron-right pagination-right"></i></a>
												</li>
											</ul>
										</div>
										<div class="table-responsive">
											<table class="table table-inbox text-md-nowrap table-hover text-nowrap">
												<tbody>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Tim Reid, S P N</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Boost Your Website Traffic</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">April 01</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Freelancer.com </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Stop wasting your visitors </td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">May 23</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">PHPClass</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Added a new class: Login Class Fast Site</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">9:27 AM</td>
													</tr>

													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Facebook</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Somebody requested a new password </td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">June 13</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Skype</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Password successfully changed</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 24</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Google+</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">alireza, do you know</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 09</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">WOW Slider </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">New WOW Slider v7.8 - 67% off</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">LinkedIn Pulse</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">The One Sign Your Co-Worker Will Stab</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">Feb 19</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Google Webmaster </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Improve the search presence of WebSite</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 15</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">JW Player</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Last Chance: Upgrade to Pro for </td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 15</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Drupal Community</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Welcome to the Drupal Community</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 04</td>
													</tr>

													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Zoosk </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">7 new singles we think you'll like</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">May 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">LinkedIn </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Alireza: Nokia Networks, System Group and </td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">February 25</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Facebook</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Your account was recently logged into</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">March 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Twitter</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Your Twitter password has been changed</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">April 07</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">InternetSeer</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Performance Report</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">July 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Bertina </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">IMPORTANT: Don't lose your domains!</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">June 16</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Laura Gaffin, S P N </td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Your Website On Google (Higher Rankings Are Better)</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">August 10</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Facebook</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Alireza Zare Login faild</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">feb 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">AddMe.com</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Submit Your Website to the AddMe Business Directory</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">August 10</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show tx-semibold clickable-row" data-href="{{url('viewmail')}}">Terri Rexer, S P N</td>
														<td class="view-message tx-light clickable-row" data-href="{{url('viewmail')}}">Forget Google AdWords: Un-Limited Clicks fo</td>
														<td class="view-message text-end tx-semibold clickable-row" data-href="{{url('viewmail')}}">April 14</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- mail-content -->
								</div>
								<div class="text-center ms-3 mb-4">
									<div class="row row-sm">
										<nav>
											<ul class="pagination justify-content-end">
												<li class="page-item disabled"><a class="page-link" href="javascript:;">Prev</a></li>
												<li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
												<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
												<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
												<li class="page-item"><a class="page-link" href="javascript:;">4</a></li>
												<li class="page-item"><a class="page-link" href="javascript:;">5</a></li>
												<li class="page-item"><a class="page-link" href="javascript:;">Next</a></li>
											</ul>
										</nav>
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
