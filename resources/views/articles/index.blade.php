@extends('layouts.front')
@section('content')
@include('articles.list',['action'=>'ArticlesController@show']);
@stop