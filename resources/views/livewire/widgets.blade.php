@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Widgets</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-2 pt-1">New Users</label>
											<h2 class="text-end card-item-icon card-icon">
											<i class="mdi mdi-account-multiple icon-size float-start text-primary bg-primary-transparent p-2 rounded-circle tx-20 lh-1"></i><span class="">4,567</span></h2>
											<p class="mb-0 text-muted">Monthly users<span class="float-end">64%</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-2 pt-1">Total tax</label>
											<h2 class="text-end"><i class="mdi mdi-cube icon-size float-start text-secondary bg-secondary-transparent p-2 rounded-circle tx-20 lh-1"></i><span class="">$76,521</span></h2>
											<p class="mb-0 text-muted">Monthly Income<span class="float-end">$4,367</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-2 pt-1">Total Profit</label>
											<h2 class="text-end"><i class="icon-size mdi mdi-poll-box float-start text-success bg-success-transparent p-2 rounded-circle tx-20 lh-1"></i><span class="">$37,451</span></h2>
											<p class="mb-0 text-muted">Monthly Profit<span class="float-end">$3,702</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-2 pt-1">Total Sales</label>
											<h2 class="text-end"><i class="mdi mdi-cart icon-size float-start text-warning bg-warning-transparent p-2 rounded-circle tx-20 lh-1"></i><span class="">29,520</span></h2>
											<p class="mb-0 text-muted">Monthly Sales<span class="float-end">1,789</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header border-bottom">
										<div>
											<h3 class="card-title tx-18"><label class="main-content-label tx-15">SALES ANALYTICS</label></h3>
										</div>
									</div>
									<div class="card-body">
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Women's Fashion</span>
												<span class="float-end text-dark">86%</span>
											</div>
											<div class="progress ht-7 mt-1">
												<div class="progress-bar ht-7 progress-bar-striped progress-bar-animated wd-90p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Electronics</span>
												<span class="float-end text-dark">83%</span>
											</div>
											<div class="progress ht-7 mt-1">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="83" class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-85p bg-success" role="progressbar"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Mobiles</span>
												<span class="float-end text-dark">76%</span>
											</div>
											<div class="progress ht-7 mt-1">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-80p bg-info" role="progressbar"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Footwear</span>
												<span class="float-end text-dark">71%</span>
											</div>
											<div class="progress ht-7 mt-2">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="71" class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-75p bg-secondary" role="progressbar"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Refridgerators</span>
												<span class="float-end text-dark">66%</span>
											</div>
											<div class="progress ht-7 mt-1">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-70p bg-warning" role="progressbar"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Furniture</span>
												<span class="float-end text-dark">60%</span>
											</div>
											<div class="progress ht-7 mt-1">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar ht-7 progress-bar-striped progress-bar-animated wd-65p bg-danger" role="progressbar"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Grocery</span>
												<span class="float-end text-dark">55%</span>
											</div>
											<div class="progress ht-7 mt-1">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-60p bg-primary" role="progressbar"></div>
											</div>
										</div>
										<div class="clearfix mb-3">
											<div class="clearfix">
												<span class="float-start text-dark">Home</span>
												<span class="float-end text-dark">52%</span>
											</div>
											<div class="progress ht-7 mt-2">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="52" class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-55p bg-info" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom">
											<div>
												<h3 class="card-title tx-18"><label class="main-content-label tx-15">TRANSACTIONS</label></h3>
											</div>
									</div>
									<div class="card-body pb-0">
										<div class="transaction">
											<div class="transaction-blog">
												<div class="transaction-img rounded-50 border-primary bg-primary-transparent text-primary mt-1">
													<svg class="transcation-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
												</div>
												<div class="transaction-details d-flex">
													<div><span class="text-dark tx-semibold"> Electricity Bill</span> <p class="text-muted"> 11 Mar 3:00PM</p></div>
													<div class="ms-auto fs-15 text-danger font-weight-normal">-$15.30</div>
												</div>
											</div>
											<div class="transaction-blog">
												<div class="transaction-img rounded-50 border-secondary bg-secondary-transparent text-secondary mt-1">
													<span class="avatar-1">AL</span>
												</div>
												<div class="transaction-details d-flex">
													<div><span class="text-dark tx-semibold"> Maxin Well </span>  <p class="text-muted"> 13 Mar 11:49AM</p></div>
													<div class="ms-auto fs-15 text-success font-weight-normal">+$100.00</div>
												</div>
											</div>
											<div class="transaction-blog">
												<div class="transaction-img rounded-50 border-success bg-success-transparent text-success mt-1">
													<span class="avatar-1">KL</span>
												</div>
												<div class="transaction-details d-flex">
													<div><span class="text-dark tx-semibold">Keval Lia</span>   <p class="text-muted"> 16 Mar 1:06PM</p></div>
													<div class="ms-auto fs-15 text-success font-weight-normal">+$89.06</div>
												</div>
											</div>
											<div class="transaction-blog">
												<div class="transaction-img rounded-50 border-info bg-info-transparent text-info mt-1">
													<svg class="transcation-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#01b8ff" d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
											</div>
												<div class="transaction-details d-flex">
													<div><span class="text-dark tx-semibold"> Net Flix </span> <p class="text-muted"> 20 Mar 4:00PM</p></div>
													<div class="ms-auto fs-15 text-danger font-weight-normal">-$10.00</div>
												</div>
											</div>
											<div class="transaction-blog">
												<div class="transaction-img rounded-50 border-danger bg-danger-transparent text-danger mt-1">
													<span class="avatar-1">RT</span>
												</div>
												<div class="transaction-details d-flex">
													<div><span class="text-dark tx-semibold"> Rita Mark </span> <p class="text-muted"> 20 Mar 4:00PM</p></div>
													<div class="ms-auto fs-15 text-success font-weight-normal">+$125</div>
												</div>
											</div>
											<div class="transaction-blog">
												<div class="transaction-img rounded-50 border-warning bg-warning-transparent text-warning mt-1">
													<span class="avatar-1">PE</span>
												</div>
												<div class="transaction-details d-flex">
													<div><span class="text-dark tx-semibold"> Park Entri </span> <p class="text-muted"> 24 Mar 6:06PM</p></div>
													<div class="ms-auto fs-15 text-danger font-weight-normal">-$40.99</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-xl-4 col-lg-12">
								<div class="card custom-card">
									<img class="card-img-top w-100 ht-xl-350 blog-img" src="{{asset('build/assets/img/media/blog9.jpg')}}" alt="">
									<div class="card-body">
										<h5 class="main-content-label mb-3 tx-16">Teri Dactyl Certain</h5>
										<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
										<a class="btn btn-sm ripple btn-primary" href="javascript:;">Read More<i class="fe fe-arrow-right ms-1"></i></a>
									</div>
									</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12 col-xl-8">
								<div class="row row-sm">
									<div class="col-sm-12 col-md-4">
										<div class="card custom-card our-team">
											<div class="card-body">
												<div class="picture avatar-lg online text-center">
													<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}">
												</div>
												<div class="text-center mt-3">
													<h5 class="pro-user-username text-dark mt-2 mb-0">Mariane Galeon</h5>
													<p class="pro-user-desc text-muted mb-1">Web Developer</p>
													<p class="user-info-rating">
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="far fa-star text-warning"> </i></a>
													</p>
												</div>
												<div class="contact-info mb-0 text-center">
													<a href="https://www.facebook.com/" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
													<a href="https://twitter.com/" class="contact-icon border text-info"><i class="fab fa-twitter"></i></a>
													<a href="https://www.linkedin.com/" class="contact-icon border text-danger"><i class="fab fa-linkedin"></i></a>
													<a href="https://dribbble.com/" class="contact-icon border text-secondary"><i class="fab fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="card custom-card our-team">
											<div class="card-body">
												<div class="picture avatar-lg online text-center">
													<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
												</div>
												<div class="text-center mt-3">
													<h5 class="pro-user-username text-dark mt-2 mb-0">Joyce Chua</h5>
													<p class="pro-user-desc text-muted mb-1">App Developer</p>
													<p class="user-info-rating">
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="far fa-star text-warning"> </i></a>
													</p>
												</div>
												<div class="contact-info mb-0 text-center">
													<a href="https://www.facebook.com/" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
													<a href="https://twitter.com/" class="contact-icon border text-info"><i class="fab fa-twitter"></i></a>
													<a href="https://www.linkedin.com/" class="contact-icon border text-danger"><i class="fab fa-linkedin"></i></a>
													<a href="https://dribbble.com/" class="contact-icon border text-secondary"><i class="fab fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="card custom-card our-team">
											<div class="card-body">
												<div class="picture avatar-lg online text-center">
													<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												</div>
												<div class="text-center mt-3">
													<h5 class="pro-user-username text-dark mt-2 mb-0">Lisa Ranco</h5>
													<p class="pro-user-desc text-muted mb-1">App Developer</p>
													<p class="user-info-rating">
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="fa fa-star text-warning"> </i></a>
														<a href="javascript:;"><i class="far fa-star text-warning"> </i></a>
													</p>
												</div>
												<div class="contact-info mb-0 text-center">
													<a href="https://www.facebook.com/" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
													<a href="https://twitter.com/" class="contact-icon border text-info"><i class="fab fa-twitter"></i></a>
													<a href="https://www.linkedin.com/" class="contact-icon border text-danger"><i class="fab fa-linkedin"></i></a>
													<a href="https://dribbble.com/" class="contact-icon border text-secondary"><i class="fab fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card custom-card">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-6 border-end">
													<div class="card-body iconfont text-center">
														<h6 class="tx-normal">Total Cost Reduction</h6>
														<h2 class="mt-1">$23,567</h2>
														<p class="text-muted"><span><i class="fa fa-arrow-up text-success me-1"> </i>23% </span> in this year</p>
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info wd-50p"></div>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-6">
													<div class="card-body iconfont text-center">
														<h6 class="tx-normal">Total Cost Savings</h6>
														<h2 class="mt-1">15.2%</h2>
														<p class="text-muted"><span><i class="fa fa-arrow-down text-danger me-1"> </i>12%</span> in this year</p>
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger wd-70p"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header pb-1">
										<h3 class="card-title mb-2 tx-18"><label class="main-content-label tx-15">SALES ACTIVITY</label></h3>
									</div>
									<div class="product-timeline card-body">
										<ul class="timeline-1 mb-0">
											<li class="mt-0">
												<svg class="bg-primary-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M14.5,2L14.5,2C14.2,2,14,2.2,14,2.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v0C22,5.4,18.6,2,14.5,2z M15,9V3c3.2,0.2,5.7,2.8,6,6H15z M19.5,12.5h-8v-8C11.5,4.2,11.3,4,11,4c-5,0-9,4-9,9s4,9,9,9c5,0,9-4,9-9v0C20,12.7,19.8,12.5,19.5,12.5z M11.5,21c-4.4,0.3-8.2-3.1-8.5-7.5C2.7,9.1,6.1,5.3,10.5,5v8c0,0.3,0.2,0.5,0.5,0.5h8C18.7,17.5,15.5,20.7,11.5,21z"/></svg>
												<span class="tx-semibold mb-4 tx-14 ms-3">Total Products</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">2 days ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">1.2k New Products</p>
											</li>
											<li class="mt-0">
												<svg class="bg-danger-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M21.5,17h-15C5.6715698,17,5,16.3284302,5,15.5S5.6715698,14,6.5,14h10.9638672c1.2661133,0.0041504,2.3724365-0.8544312,2.6826172-2.0819702l1.8378906-7.2959595c0.0680542-0.2669678-0.0932617-0.5385742-0.3602905-0.6066284C21.5834961,4.005127,21.5418091,3.999939,21.5,4H6.3908691L6.3642578,3.8935547C6.0869751,2.7798462,5.0861816,1.9986572,3.9384766,2H2.5C2.223877,2,2,2.223877,2,2.5S2.223877,3,2.5,3h1.4384766C4.6269531,2.9990234,5.227356,3.4676514,5.3935547,4.1357422L7.609375,13H6.5C5.1192627,13,4,14.1192627,4,15.5S5.1192627,18,6.5,18h1.0124512C7.1818848,18.4303589,7.0018311,18.9573364,7,19.5C7,20.8807373,8.1192627,22,9.5,22s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5h4.0249023C15.1818848,18.4303589,15.0018311,18.9573364,15,19.5c0,1.3807373,1.1192627,2.5,2.5,2.5s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z M6.6416016,5h14.2167969l-1.6816406,6.6738281C18.9780884,12.4567871,18.2716675,13.0037842,17.4638672,13H8.65625L6.6416016,5z M9.5,21C8.6715698,21,8,20.3284302,8,19.5S8.6715698,18,9.5,18s1.5,0.6715698,1.5,1.5C10.9990845,20.328064,10.328064,20.9990845,9.5,21z M17.5,21c-0.8284302,0-1.5-0.6715698-1.5-1.5s0.6715698-1.5,1.5-1.5s1.5,0.6715698,1.5,1.5C18.9990845,20.328064,18.328064,20.9990845,17.5,21z"/></svg>
												<span class="tx-semibold mb-4 tx-14 ms-3">Total Sales</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">25 mins ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">1.1k New Sales</p>
											</li>
											<li class="mt-0">
												<svg class="bg-success-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M9.5,2C9.223877,2,9,2.223877,9,2.5v19c0,0.0001831,0,0.0003662,0,0.0005493C9.0001831,21.7765503,9.223999,22.0001831,9.5,22c0.0001831,0,0.0003662,0,0.0006104,0C9.7765503,21.9998169,10.0001831,21.776001,10,21.5v-19C10,2.223877,9.776123,2,9.5,2z M4.5,12C4.223877,12,4,12.223877,4,12.5v9c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,21.7765503,4.223999,22.0001831,4.5,22c0.0001831,0,0.0003662,0,0.0006104,0C4.7765503,21.9998169,5.0001831,21.776001,5,21.5v-9C5,12.223877,4.776123,12,4.5,12z M19.5,16c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C19.0001831,21.7765503,19.223999,22.0001831,19.5,22c0.0001831,0,0.0003662,0,0.0006104,0C19.7765503,21.9998169,20.0001831,21.776001,20,21.5v-5C20,16.223877,19.776123,16,19.5,16z M14.5,8C14.223877,8,14,8.223877,14,8.5v13c0,0.0001831,0,0.0003662,0,0.0005493C14.0001831,21.7765503,14.223999,22.0001831,14.5,22c0.0001831,0,0.0003662,0,0.0006104,0C14.7765503,21.9998169,15.0001831,21.776001,15,21.5v-13C15,8.223877,14.776123,8,14.5,8z"/></svg>
												<span class="tx-semibold mb-4 tx-14 ms-3">Total Revenue</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">40 mins ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">22.5K New Revenue</p>
											</li>
											<li class="mt-0">
												<svg class="bg-warning-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"/></svg>
												<span class="tx-semibold mb-4 tx-14 ms-3">Total Profit</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">1 hour ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">4k New Profit</p>
											</li>
											<li class="mt-0">
												<svg class="bg-purple-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z"/></svg>
												<span class="tx-semibold mb-4 tx-14 ms-3">Customer Visits</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">1 day ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">16% Increased</p>
											</li>
											<li class="mt-0 mb-0">
												<svg class="bg-primary-gradient text-white product-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffffff" d="M21.8534546,7.1464844l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-14,14C2.0526733,16.2402344,2,16.3673706,2,16.5v5.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l14-14c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221C22.0487671,7.6581421,22.0487061,7.3416138,21.8534546,7.1464844z M7.2930298,21H3v-4.2930298l10.671814-10.671814l4.2926025,4.293457L7.2930298,21z M18.6714478,9.621582l-4.2926636-4.293396L16.5,3.2069702L20.7930298,7.5L18.6714478,9.621582z"/></svg>
												<span class="tx-semibold mb-4 tx-14 ms-3">Customer Reviews</span>
												<a href="javascript:;" class="float-end tx-11 text-muted">1 day ago</a>
												<p class="mb-0 text-muted tx-12 ms-3">1.4k Reviews</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-primary-transparent rounded-circle text-primary">
											<i class="fe fe-user"></i>
										</div>
										<p class="mb-1 text-muted">Total Users</p>
										<h3 class="mb-0">34,789</h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
											<i class="fe fe-trending-up"></i>
										</div>
										<p class="mb-1 text-muted">Total Sales</p>
										<h3 class="mb-0">98,674</h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-info-transparent rounded-circle text-info">
											<i class="fe fe-dollar-sign"></i>
										</div>
										<p class="mb-1 text-muted">Total Profits</p>
										<h3 class="mb-0"><span>$</span>45,078</h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-success-transparent rounded-circle text-success">
											<i class="fe fe-shopping-cart"></i>
										</div>
										<p class="mb-1 text-muted">Total Orders</p>
										<h3 class="mb-0">35,897</h3>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-4 col-xl-4 col-md-4">
								<div class="card custom-card bg-primary-gradient">
									<div class="card-body">
										<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item flex-column">
													<i class="si si-social-facebook tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">12th June</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">20% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Trevor Hart</i>
													</div>
												</div>
												<div class="carousel-item flex-column">
													<i class="si si-social-google tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">24th July</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">60% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Joseph Vaughan</i>
													</div>
												</div>
												<div class="carousel-item flex-column active">
													<i class="si si-social-twitter tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">9th Aug</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">90% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Alan Hemmings</i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xl-4 col-md-4">
								<div class="card custom-card bg-danger-gradient">
									<div class="card-body">
										<div id="myCarousel0" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item flex-column">
													<i class="si si-social-facebook tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">11th June</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">30% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Alan Hemmings</i>
													</div>
												</div>
												<div class="carousel-item flex-column">
													<i class="si si-social-google tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">21st July</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">70% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Eric Lee</i>
													</div>
												</div>
												<div class="carousel-item flex-column active">
													<i class="si si-social-twitter tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">12th Aug</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">80% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Eric Lee</i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xl-4 col-md-4">
								<div class="card custom-card bg-success-gradient">
									<div class="card-body">
										<div id="myCarousel1" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item flex-column">
													<i class="si si-social-facebook tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">25th June</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">30% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Eric Lee</i>
													</div>
												</div>
												<div class="carousel-item flex-column">
													<i class="si si-social-google tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">6th July</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">70% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Eric Lee</i>
													</div>
												</div>
												<div class="carousel-item flex-column active">
													<i class="si si-social-twitter tx-30 text-white mb-2"></i>
													<p class="text-white mt-2">7th Aug</p>
													<h3 class="text-white tx-light">Now Get <span class="font-bold">80% Off</span><br>on buy</h3>
													<div class="text-white m-t-20">
														<i>- Eric Lee</i>
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
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">Number Of Sales</p>
										<div>
											<h4 class="dash-25 mb-2">568</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<p class="mb-0"><i class="fas fa-caret-down me-1 text-danger"></i> 0.5%</p>
											<p class="ms-auto mb-0"><i class="fas fa-caret-up me-1 text-success"></i>0.7%</p>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-70p" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="ms-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">New Revenue</p>
										<div>
											<h4 class="dash-25 mb-2">$12,897</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<p class="mb-0"><i class="fas fa-caret-up me-1 text-success"></i> 0.72%</p>
											<p class="ms-auto mb-0"><i class="fas fa-caret-down me-1 text-danger"></i>0.43%</p>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="ms-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">Total Cost</p>
										<div>
											<h4 class="dash-25 mb-2">$11,234</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<p class="mb-0"><i class="fas fa-caret-down me-1 text-danger"></i> 1.4%</p>
											<p class="ms-auto mb-0"><i class="fas fa-caret-down me-1 text-danger"></i>1.44%</p>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-50p bg-success" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="ms-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">Profit By Sale</p>
										<div>
											<h4 class="dash-25 mb-2">$789</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<p class="mb-0"><i class="fas fa-caret-down me-1 text-danger"></i> 0.4%</p>
											<p class="ms-auto mb-0"><i class="fas fa-caret-up me-1 text-success"></i>0.9%</p>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="ms-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="tx-normal">Click Through Conversions</h6>
											<h6><span class="fs-30 me-2">14,678</span><span class="badge bg-success">1.5%</span></h6>
											<span class="text-muted">The number of clicks to the ad that consist of a single impression.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="tx-normal">View Through Conversions</h6>
											<h6><span class="fs-30 me-2">2,971</span><span class="badge bg-danger">0.55%</span></h6>
											<span class="text-muted">Estimated daily unique views  through conversions per visitor on the ads.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="tx-normal">Total Conversions</h6>
											<h6><span class="fs-30 me-2">1,896</span><span class="badge bg-success">1.8%</span></h6>
											<span class="text-muted">Estimated total conversions on ads per impressions to the ads.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-md-12">
								<div class="card custom-card">
									<div class="row row-sm">
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<h6 class="mb-0 tx-normal">Gross profit Margin</h6>
												<h2 class="mb-1 mt-2"><span class="counter">77</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ms-1"><i class="fe fe-arrow-down"></i> 1.68%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<h6 class="mb-0 tx-normal">Opex Ratio</h6>
												<h2 class="mb-1 mt-2"><span class="counter">60</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ms-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<h6 class="mb-0 tx-normal">Operating Profit Margin</h6>
												<h2 class="mb-1 mt-2"><span class="counter">57</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ms-1"><i class="fe fe-arrow-down"></i> 0.87%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0">
											<div class="card-body text-center">
												<h6 class="mb-0 tx-normal">Net Profit Margin</h6>
												<h2 class="mb-1 mt-2"><span class="counter">35</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ms-1"><i class="fe fe-arrow-up"></i> 22%</span> for Last month</p>
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
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1 tx-15">Light Gallery</h6>
											<p class="text-muted card-sub-title">A customizable, modular, responsive, lightbox gallery plugin for jQuery.</p>
										</div>
										<ul id="lightgallery" class="list-unstyled row mb-0">
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4" data-responsive="{{asset('build/assets/img/media/1.jpg')}}" data-src="{{asset('build/assets/img/media/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/1.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4" data-responsive="{{asset('build/assets/img/media/2.jpg')}}" data-src="{{asset('build/assets/img/media/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/2.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4" data-responsive="{{asset('build/assets/img/media/3.jpg')}}" data-src="{{asset('build/assets/img/media/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/3.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4" data-responsive="{{asset('build/assets/img/media/4.jpg')}}" data-src="{{asset('build/assets/img/media/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/4.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mt-1" data-responsive="{{asset('build/assets/img/media/5.jpg')}}" data-src="{{asset('build/assets/img/media/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/5.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mt-1" data-responsive="{{asset('build/assets/img/media/6.jpg')}}" data-src="{{asset('build/assets/img/media/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/6.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mt-1" data-responsive="{{asset('build/assets/img/media/7.jpg')}}" data-src="{{asset('build/assets/img/media/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/7.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mt-1" data-responsive="{{asset('build/assets/img/media/8.jpg')}}" data-src="{{asset('build/assets/img/media/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6" src="{{asset('build/assets/img/media/8.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mt-1" data-responsive="{{asset('build/assets/img/media/9.jpg')}}" data-src="{{asset('build/assets/img/media/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6 mb-0" src="{{asset('build/assets/img/media/9.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mb-sm-0 mt-1" data-responsive="{{asset('build/assets/img/media/10.jpg')}}" data-src="{{asset('build/assets/img/media/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6 mb-0" src="{{asset('build/assets/img/media/10.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mb-sm-0 mt-1" data-responsive="{{asset('build/assets/img/media/11.jpg')}}" data-src="{{asset('build/assets/img/media/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6 mb-0" src="{{asset('build/assets/img/media/11.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mt-1" data-responsive="{{asset('build/assets/img/media/12.jpg')}}" data-src="{{asset('build/assets/img/media/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive rounded-6 mb-0" src="{{asset('build/assets/img/media/12.jpg')}}" alt="Thumb-2">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL CHART.BUNDLE JS -->
        <script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

        <!-- PEITY JS -->
        <script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- JQUERY-UI JS -->
        <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- INTERNAL LIGHT GALLERY JS -->
        <script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lightgallery-1.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>

@endsection
