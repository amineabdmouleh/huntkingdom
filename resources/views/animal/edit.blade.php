@extends('layouts.app')

@section('styles')

@endsection

@section('content')




	<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Update Animal</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <div class="row">
        <div class="card-content">
            <div class="content">
                 <form action="{{ route('animal.update',$animal) }}" method="POST">
                       @csrf
                    @method('PATCH')
                    <div class="form-group">
                       
                        <input type="texte" class="form-control" id="name"placeholder="Animal Name" name="name" value="{{ old('name', $animal->name) }}">

                    </div>
                    
                    <div class="form-group">
                       
                        <textarea class="form-control" id="description" rows="3" name="description" name="description">{{$animal->description}} placeholder="You can write your description here"></textarea>

                    </div>

                    <div class="form-group">
                      
                        <input type="texte" class="form-control" id="zone" name="zone" value="{{ old('zone', $animal->zone) }}" placeholder="Animal Zone HERE">

                    </div>

                 
                    
                 
              
                <div class="form-group mt-8" >
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


@endsection