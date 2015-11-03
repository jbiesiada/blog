@extends('layouts.front')
@section('content')
<h3>Posty:</h3>
@foreach($articles as $article)
<div>
	<a href="{{url('articles',[$article->id])}}">
	{{$article->title}}	
	</a>
	<p>{{$article->body}}</p>
</div>
@endforeach
@stop