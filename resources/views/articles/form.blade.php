<div class="col-md-5">
	<div class='form-group'>
		{!! Form::label('title',"Tytuł:") !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!}
	</div>
	<div class='form-group'>
		{!! Form::label('title',"Obraz:") !!}
		{!! Form::file('image', null, ['class'=>'form-control']) !!}
	</div>
	<div class='form-group'>
		{!! Form::label('body',"Treść:") !!}
		{!! Form::textarea('body', null, ['rows'=>7, 'class'=>'form-control','id' => 'articlebody']) !!}
	</div>
	<div class='form-group'>
		{!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
	</div>
</div>
@section('scripts')
<script type="text/javascript">
	$('#articlebody').wysihtml5();
</script>
@stop