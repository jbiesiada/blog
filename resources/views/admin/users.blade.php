@extends('layouts.back')
@section('header')
<h1>
Użytkownicy
</h1>
@stop
@section('content')
@foreach ($users as $user)
<div class="col-md-6 col-lg-4">
	<div class="box box-widget widget-user-2">
		<div class="widget-user-header bg-{{$user->isWriter()?'green':'gray'}}">
			<a href="{{action('UsersController@destroy',['user'=>$user->id])}}">
			<span class="badge bg-red pull-right"><i class='fa fa-fw fa-trash'></i></span>
			</a>
			<div class="widget-user-image">
				<img class="img-circle" src="{{$user->image()}}" alt="User Avatar">
			</div>
			<h3 class="widget-user-username">{{$user->name}}</h3>
			@if($user->isWriter())
				<h5 class="widget-user-desc">Bloger				
					<a href="{{url('/users/unsetwriter',['user'=>$user->id])}}">
						<span class="badge bg-blue"><i class="fa fa-fw fa-remove"></i></span>
					</a>
				</h5>
			@else
				<h5 class="widget-user-desc">Czytelnik
					<a href="{{url('/users/setwriter',['user'=>$user->id])}}">
						<span class="badge bg-blue"><i class="fa fa-fw fa-pencil"></i></span>
					</a>
				</h5>
			@endif

		</div>
		<div class="box-footer no-padding">
			<ul class="nav nav-stacked">
				<li>
					<a href="{{url('/articles/admin/list',['user'=>$user->id])}}">
						Posty: <span class="pull-right badge bg-blue">{{count($user->articles)}}</span>
					</a>
				</li>
				<li>
					<a href="#">
						Komentarze: <span class="pull-right badge bg-aqua">{{count($user->comments)}}</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
@endforeach
@stop
@section('footer')
@stop