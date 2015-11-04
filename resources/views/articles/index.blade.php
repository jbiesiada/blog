@extends('layouts.front')
@section('content')
@foreach($articles as $article)
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="{{$article->thumb()}}" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">
        <span class="lead">
        <a href="{{url('articles',[$article->id])}}">
			{{$article->title}}
		</a>
		    by <a href="#">{{$article->user->name}}</a>
		</span>
            <small>{{$article->created_at}}</small>
        </h4>
        <p>{{$article->shortbody()}}</p>
    </div>
</div>
@endforeach
@stop