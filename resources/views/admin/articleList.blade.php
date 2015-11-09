@extends('layouts.back')
@section('header')
@if(!empty($selected_user))
<h1>
Posty użytkownika: {{$selected_user->name}}
</h1>
@endif
@stop
@section('content')
@include('articles.list',['action'=>'ArticlesController@edit','admin'=>true])
@stop