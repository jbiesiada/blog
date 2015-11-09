@extends('layouts.back')
@section('header')
<h1>Towoje komentarze:</h1>
@stop
@section('content')
@forelse(\Auth::user()->comments as $comment)
<p>
	<div>{{$comment->body}}</div> 
	w artykule
	<p>{{$comment->article->title}}</p>
</p>
@empty
brak
@endforelse
@stop
@section('footer')
@stop