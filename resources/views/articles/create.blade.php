@extends('layouts.back')
@section('content')
<h1>nowy post:</h1>
<hr>
{!! Form::open(['url'=>'articles']) !!}
<div class='form-group'>
	{!! Form::label('title',"Tytuł:") !!}
	{!! Form::text('title') !!}
</div>
<div class='form-group'>
	{!! Form::label('body',"Treść:") !!}
	{!! Form::textarea('body') !!}
</div>
<div class='form-group'>
	{!! Form::submit('Dodaj post',['class'=>'btn btp-primary']) !!}
</div>
{!! Form::close() !!}
@stop