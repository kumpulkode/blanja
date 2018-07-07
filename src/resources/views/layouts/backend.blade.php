<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Lokavor Backend</title>

	<!-- Global stylesheets -->
	<link href="{{ mix('css/backend.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
    @yield("content-css")

	<!-- Limitless JS files -->
    <script src="{{ mix('js/backend.js') }}"></script>
	<!-- /Limitless JS files -->

</head>

<body class="navbar-top">

	<!-- Main navbar -->
    @include('includes.backend.navbar')
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
    		@include('includes.backend.sidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4>
								@yield('title')
							</h4>
						</div>
					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							@yield('breadcrumb')
						</ul>
						@yield('breadcrumb-right')
					</div>
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">
    				@yield('content')
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="#">Backend Web App Kit</a> by <a href="http://lokavor.studio" target="_blank">Lokavor Studio</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	{{-- Modal Section --}}
    @yield('modal')

	{{-- end Modal --}}
	{{-- Script Section --}}
    @yield('content-js')

	{{-- end script --}}

</body>
</html>
