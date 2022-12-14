@extends('layouts.app')

@section('styles')

@endsection

@section('content')

		@section('switcher-icon1')

		<div class="page main-signin-wrapper bg-primary construction">
		@endsection
				
			<div class="container ">
				<div class="construction1 text-center details text-white">
					<div class="">
						<img src="{{asset('build/assets/img/brand/logo-light.png')}}" class="my-4" alt="logo">
						<h4 class="text-center text-white tx-30">We are Working on this Site.</h4>
						<p class="tx-white-7 tx-15">We're making the system more awesome.we'll be back shortly.</p>
						<div id="launch_date"></div>
					</div>
					<div class="text-center mb-5">Copyright © 2022  <a href="https://www.spruko.com/" class="tx-white-7">Spruko</a> All rights reserved.</div>
				</div>
			</div>
@endsection

@section('scripts')

        <!-- INTERNAL JQUERY.COUNTDOWN JS -->
        <script src="{{asset('build/assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jquery-countdown/countdown.js')}}"></script>

@endsection
