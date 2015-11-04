@extends('layouts.back')
@section('content')
<h1>edytuj post: {{$article->title}}</h1> 
<hr>
{!! Form::model($article, ['method'=>'PATCH','action' => ['ArticlesController@update',$article->id]]) !!}
@include('articles.form',['submitButtonText'=>'Zapisz'])
{!! Form::close() !!}

@stop