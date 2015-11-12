<div class="well" id="show{{$comment->id}}">
	@if(!empty($callback)&&!empty(\Auth::user())&& (\Auth::user()->isAdmin() || \Auth::user()->id==$comment->user->id))  
		{!! Form::open(['method'=>'DELETE','action' => ['ArticlesController@commentupdate',$comment->id]]) !!}
			{!! Form::hidden('callback',$callback."#comments") !!}
			<div class='form-group pull-right'>
				{!! Form::submit('Usuń',['class'=>'btn btn-primary']) !!}	        		
				<a class="btn btn-primary edit_comment" href="#edit{{$comment->id}}" id="{{$comment->id}}">Edytuj</a>
			</div>
		{!! Form::close() !!}
	@endif
	{{$comment->body}}
</div>
@if(!empty($callback)&&!empty(\Auth::user())&& (\Auth::user()->isAdmin() || \Auth::user()->id==$comment->user->id))     	
<div class="well" id="edit{{$comment->id}}" style="display:none">
	{!! Form::open(['method'=>'PUT','action' => ['ArticlesController@commentupdate',$comment->id]]) !!}
	{!! Form::hidden('callback',$callback."#show".$comment->id) !!}
	<div class='form-group'>
	    <h4>Edytuj: </h4>
		{!! Form::textarea('body',$comment->body,['rows'=>3, 'class'=>'form-control']) !!}
	</div>
	<div class='form-group'>
		{!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
		<a class="btn btn-primary edit_cancel" href="#show{{$comment->id}}" id="{{$comment->id}}">Anuluj</a>		        		
	</div>
	{!! Form::close() !!}
</div>
@endif