@extends('layouts.back')
@section('header')
<h1>edytuj post: {{$article->title}}</h1> 
<h1><a class="btn btn-primary" href="{{action('ArticlesController@comments',$article->id)}}">edytuj komentarze</a></h1> 
@stop
@section('content')
{!! Form::model($article, ['method'=>'PATCH','action' => ['ArticlesController@update',$article->id],'files' => true]) !!}
@include('articles.form',['submitButtonText'=>'Zapisz'])
{!! Form::close() !!}
<div class="col-md-2">
<img class="media-object" src="{{$article->thumb('500x')}}" alt="">
</div>
@stop