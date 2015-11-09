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
		<link rel="stylesheet" href="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.css">
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
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/fastclick/fastclick.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/chartjs/Chart.min.js"></script>
		<script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/pages/dashboard2.js"></script>
		<script src="https://cdn.jsdelivr.net/bootstrap.wysihtml5/0.0.2/bootstrap-wysihtml5-0.0.2.min.js"></script>
		<script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
		@yield('scripts')
		</div>
	</body>
</html>