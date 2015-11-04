<div class='form-group'>
	{!! Form::label('title',"Tytuł:") !!}
	{!! Form::text('title') !!}
</div>
<div class='form-group'>
	{!! Form::label('body',"Treść:") !!}
	{!! Form::textarea('body') !!}
</div>
<div class='form-group'>
	{!! Form::submit($submitButtonText,['class'=>'btn btp-primary']) !!}
</div>