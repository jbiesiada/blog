@extends('layouts.back')
@section('content-header')
<h1>edytuj post: {{$article->title}}</h1> 
@stop
@section('content')
{!! Form::model($article, ['method'=>'PATCH','action' => ['ArticlesController@update',$article->id],'files' => true]) !!}
@include('articles.form',['submitButtonText'=>'Zapisz'])
{!! Form::close() !!}
<div class="col-md-2">
<img class="media-object" src="{{$article->thumb('500x')}}" alt="">
</div>
@stop