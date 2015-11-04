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
			<header class="main-header">
				<a href="index2.html" class="logo">
					<span class="logo-mini"><b>B</b>b</span>
					<span class="logo-lg"><b>Blog</b>bies</span>
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">         
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="{{\Auth::user()->image()}}" class="user-image" alt="User Image">
									<span class="hidden-xs">{{\Auth::user()->name}}</span>
								</a>
								<ul class="dropdown-menu">
									<li class="user-header">
										<img src="{{\Auth::user()->image()}}" class="img-circle" alt="User Image">
										<p>
											{{\Auth::user()->name}}
											<small>Member since {{\Auth::user()->created_at->format('m-Y')}}</small>
										</p>
									</li>
									<li class="user-footer">
										<a href="/auth/logout">logout</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar" style="height: auto;">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="{{\Auth::user()->image()}}" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>{{\Auth::user()->name}}</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li>
							<a href="/articles/admin/list">
							<i class="fa fa-fw fa-list"></i> <span>Posty</span>
							</a>
						</li>        
						<li>
							<a href="/articles/create">
							<i class="fa fa-fw fa-edit"></i> <span>Dodaj Post</span>
							</a>
						</li>
						@if(\Auth::user()->isAdmin())
							<li>
								<a href="/users/index">
								<i class="fa fa-fw fa-users"></i> <span>Użytkownicy</span>
								</a>
							</li>
						@endif
					</ul>
				</section>
			</aside>
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