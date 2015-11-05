<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	</head>
	<body class='skin-blue sidebar-mini'>
		<div class='wrapper'>
			
			@include('navigations.backHeader')
			@include('navigations.backSidebar')
			<div class='content-wrapper' style="min-height: 921px;">
				<section class="content-header">
					@yield('header')
				</section>
				<section class="content">
					@yield('content')
				</section>
				<section class="content-footer">
					@yield('footer')
				</section>
			</div>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/fastclick/fastclick.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/plugins/chartjs/Chart.min.js"></script>
		<script async="" src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/pages/dashboard2.js"></script>
		</div>
	</body>
</html>