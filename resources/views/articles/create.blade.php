@extends('layouts.back')
@section('header')
<h1>nowy post:</h1>
@stop
@section('content')
{!! Form::open(['url'=>'articles','files' => true]) !!}
@include('articles.form',['submitButtonText'=>'dodaj'])
{!! Form::close() !!}
@stop