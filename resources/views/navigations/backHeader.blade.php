<header class="main-header">
	<a href="/" class="logo">
		<span class="logo-mini"><b>B</b>b</span>
		<span class="logo-lg"><b>Blog</b>bies</span>
	</a>
	<nav class="navbar navbar-static-top" role="navigation">
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">         
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{$user->image()}}" class="user-image" alt="User Image">
						<span class="hidden-xs">{{$user->name}}</span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="{{$user->image()}}" class="img-circle" alt="User Image">
							<p>
								{{$user->name}}
								<small>Member since {{$user->created_at->format('m-Y')}}</small>
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