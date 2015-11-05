<aside class="main-sidebar">
	<section class="sidebar" style="height: auto;">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{\Auth::user()->image()}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{$user->name}}</p>
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
			@if($user->isAdmin())
				<li>
					<a href="/users/index">
					<i class="fa fa-fw fa-users"></i> <span>Użytkownicy</span>
					</a>
				</li>
			@endif
		</ul>
	</section>
</aside>