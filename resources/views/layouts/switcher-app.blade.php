<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashplex - Laravel Admin Panel Dashboard Template">
	    <meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel"/>

        <!-- FAVICON -->
		<link rel="icon" href="{{asset('build/assets/img/brand/favicon.ico')}}" type="image/x-icon" />
   
		<!-- TITLE -->
		<title> Dashplex - Laravel Bootstrap5 Premium Dashboard Template</title>

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        
        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/web-fonts/icons.css')}}" rel="stylesheet"/>
        <link href="{{asset('build/assets/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('build/assets/web-fonts/plugin.css')}}" rel="stylesheet"/>
       
        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' , 'resources/css/app.css'])

        @yield('styles')

        
	</head>

	<body class="main-body leftmenu ltr light-theme dark-menu">

		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="{{asset('build/assets/img/loader.svg')}}" class="loader-img" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->
		<div class="page">

            <!-- MAIN-HEADER -->
            @include('layouts.components.main-header')
            <!-- END MAIN-HEADER -->

            <!-- MAIN-SIDEBAR -->
            @include('layouts.components.main-sidebar')
            <!-- END MAIN-SIDEBAR -->

            <!-- MAIN-CONTENT -->
            <div class="main-content side-content pt-0">
                <div class="main-container container-fluid">
                    <div class="inner-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN-CONTENT -->

            <!-- MAIN-FOOTER -->
            @include('layouts.components.main-footer')
            <!-- END MAIN-FOOTER -->

            <!-- RIGHT-SIDEBAR -->
            @include('layouts.components.right-sidebar')
           <!-- END RIGHT-SIDEBAR -->

            <!-- COUNTRY SELECTOR MODAL  -->
			@include('layouts.components.modal')
            <!-- END COUNTRY SELECTOR MODAL  -->
            @yield('modals')

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        @include('layouts.components.scripts')
        <!-- STICKY JS-->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS -->
		@vite('resources/js/app.js')


        <!-- SWITCHER JS -->
        @vite('resources/assets/switcher/js/switcher.js')

        
        <!-- END SCRIPTS -->

	</body>
</html>
