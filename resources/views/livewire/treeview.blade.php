@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Treeview</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Treeview</li>
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
						<div class="row">
							<div class="col-md-12">
								<div class="card custom-card mg-b-20">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Basic Treeview
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
										<div class="row">
											<!-- col -->
											<div class="col-lg-4">
												<ul id="treeview1">
													<li><a href="javascript:;">TECH</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">XRP</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- /col -->

											<!-- col -->
											<div class="col-lg-4 mt-4 mt-lg-0">
												<ul id="treeview2">
													<li><a href="javascript:;">TECH</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">XRP</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- /col -->

											<!-- col -->
											<div class="col-lg-4 mt-4 mt-lg-0">
												<ul id="treeview3">
													<li><a href="javascript:;">TECH</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">XRP</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- /col -->
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Tree View Styles
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
										<div class="row">
											<!-- col -->
											<div class="col-lg-4">
												<ul id="tree1">
													<li><a href="javascript:;">Treeview1</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview2</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview3</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview4</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview5</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview6</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- /col -->

											<!-- col -->
											<div class="col-lg-4 mt-4 mt-lg-0">
												<ul id="tree2">
													<li><a href="javascript:;">Treeview1</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview2</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview3</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview4</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview5</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview6</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- /col -->

											<!-- col -->
											<div class="col-lg-4 mt-4 mt-lg-0">
												<ul id="tree3">
													<li><a href="javascript:;">Treeview1</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview2</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview3</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview4</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview5</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.
																				<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
													<li><a href="javascript:;">Treeview6</a>
														<ul>
															<li>Company Maintenance</li>
															<li>Employees
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.<ul>
																					<li>Reports
																						<ul>
																							<li>Report1</li>
																							<li>Report2</li>
																							<li>Report3</li>
																						</ul>
																					</li>
																					<li>Employee Maint.</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Human Resources</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- /col -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

		<!--- INTERNAL TREEVIEW JS -->
		<script src="{{asset('build/assets/plugins/treeview/treeview.js')}}"></script>
@endsection
