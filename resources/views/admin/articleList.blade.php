@extends('layouts.back')
@section('content')
@include('articles.list',['action'=>'ArticlesController@edit']);
@stop