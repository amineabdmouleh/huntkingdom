@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

		@section('switcher-icon1')

		<div class="page main-signin-wrapper bg-primary construction">
		@endsection
			
			<div class="container ">
				<div class="construction1 text-center details text-white">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<h1 class="text-white display-1">404<span class="tx-20">error</span></h1>
						</div>
						<div class="col-lg-12 ">
							<h2 class="">Oops.The Page you are looking  for doesn't exist..</h2>
							<h6 class="tx-15 mt-3 mb-4 tx-white-7 tx-normal">You may have mistyped the address or the page may have moved. Try searching below.</h6>
							<a class="btn ripple btn-success text-center" href="{{url('index')}}">Back to Home</a>
						</div>
					</div>
				</div>
			</div>
@endsection

@section('scripts')

@endsection
