@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">categorys List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">categorys</a></li>
									<li class="breadcrumb-item active" aria-current="page">You can find different categorys here</li>
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
										<span>Add</span>
									</button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">categorys List</h6>
											<p class="text-muted card-sub-title"></p>
										</div>  
										<div class="table-responsive border">
											<table class="table text-nowrap text-md-nowrap mg-b-0">
                                                <thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														
													</tr>
												</thead>
												<thead>
													@foreach($categorys as $category)
                        <tr>
                            <th>{{$category->id }}</th>
                            <th>{{$category->name}}</th>
                           

                            <td>
                                <a class="btn btn-outline-success" href="{{ route('category.show',$category->id) }}">
                                    Détails</a>
                                <a class="btn btn-outline-success" href="{{ route('category.edit',$category->id) }}">Modifier</a>
                                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-success">Delete</button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
												</thead>
										
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
