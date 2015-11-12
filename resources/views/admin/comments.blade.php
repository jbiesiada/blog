@extends('layouts.back')
@section('header')
<h1>Towoje komentarze w artykule: {{$article->name}}</h1>
@stop
@section('content')
@include('admin.comment_element',['comments'=>$article->comments,'callback'=>action('ArticlesController@comments',$article->id)])
@stop
@section('footer')
@stop
