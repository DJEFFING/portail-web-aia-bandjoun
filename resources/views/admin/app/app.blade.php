<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('asset_admin/vendors/images/apple-touch-icon.png') }} ">
	<link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('asset_admin/vendors/images/favicon-32x32.png') }} ">
	<link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('asset_admin/vendors/images/favicon-16x16.png') }} ">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/core.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/icon-font.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/src/plugins/datatables/css/responsive.bootstrap4.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/style.css') }} ">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
    <!-- loader -->
	{{-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{ asset('asset_admin/vendors/images/deskapp-logo.svg') }} " alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> --}}
    <!--END loader -->

    <!-- header -->
	@include('admin.app.layout.header')
    <!--END header -->

    <!-- right-sidebar -->
	@include('admin.app.layout.right-siderbar')
    <!--END right-sidebar -->

    <!-- left-side-bar -->
	@include('admin.app.layout.left-siderbar')
    <!--END left-side-bar -->

	<div class="mobile-menu-overlay"></div>

	@yield('content')
	<!-- js -->
	<script src="{{ asset('asset_admin/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('asset_admin/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('asset_admin/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('asset_admin/vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('asset_admin/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('asset_admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('asset_admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('asset_admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('asset_admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('asset_admin/vendors/scripts/dashboard.js') }}"></script>
</body>
</html>
