@extends('layouts.back')
@section('header')
<h1>{{\Auth::user()->name}}</h1>
@stop
@section('content')
<div class="box box-widget widget-user">
<div class="widget-user-header bg-aqua-active">
  <h3 class="widget-user-username">{{\Auth::user()->name}}</h3>
  <h5 class="widget-user-desc">{{\Auth::user()->level==0?'Czytelnik':(\Auth::user()->level==1?'Bloger':'Admin')}}</h5>
</div>
<div class="widget-user-image">
  <img class="img-circle" src="{{\Auth::user()->image()}}" alt="User Avatar">
</div>
<div class="box-footer">
  <div class="row">
    <div class="col-sm-6 border-right">
      <div class="description-block">
        <h5 class="description-header">{{count(\Auth::user()->articles)}}</h5>
        <span class="description-text">Posty</span>
      </div>
    </div>
    <div class="col-sm-6 border-right">
      <div class="description-block">
        <h5 class="description-header">{{count(\Auth::user()->comments)}}</h5>
        <span class="description-text">Komentarze</span>
      </div>
    </div>
  </div>
</div>
</div>
@stop
@section('footer')
@stop