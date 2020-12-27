<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Travel | @yield('title')</title>
	@include('admin.layouts.head')
</head>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">

	<!-- BEGIN HEADER -->
	@include('admin.layouts.header')
	<!-- END HEADER -->

	<!-- BEGIN HEADER & CONTENT DIVIDER -->
	<div class="clearfix"> </div>
	<!-- END HEADER & CONTENT DIVIDER -->
	
	<!-- BEGIN CONTAINER -->
	<div class="page-container">

		<!-- BEGIN SIDEBAR -->
		@include('admin.layouts.sidebar')
		<!-- END SIDEBAR -->

		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			@yield('content')
		</div>
		<!-- END CONTENT -->

		<!-- BEGIN QUICK SIDEBAR -->
		@include('admin.layouts.quick-sidebar')
		<!-- END QUICK SIDEBAR -->
		
	</div>
	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->
	@include('admin.layouts.footer')
	<!-- END FOOTER -->

	<!-- BEGIN QUICK NAV -->
	<div class="quick-nav-overlay"></div>
	<!-- END QUICK NAV -->

	@include('admin.layouts.scripts')
</body>
</html>