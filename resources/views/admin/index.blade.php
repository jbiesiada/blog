@extends('layouts.back')
@section('header')
<h1>Towoje komentarze:</h1>
@stop
@section('content')
<div class="col-md-4">
@include('admin.comment_element',['comments'=>\Auth::user()->comments,'callback'=>action('AdminController@index')])
</div>
@stop
@section('footer')
@stop

