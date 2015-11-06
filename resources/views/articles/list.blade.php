<div class="col-md-6">
@foreach($articles as $article)
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="{{$article->thumb('64x64')}}" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">
        <span class="lead">
        <a href="{{action($action,[$article->id])}}">
			{{$article->title}}
		</a>
		    by <a href="#">{{$article->user->name}}</a>
		</span>
            <small>{{$article->created_at}}</small>
            @if(!empty($admin) && \Auth::user()->id == $article->user->id)
            <span class="pull-right">
            {!! Form::model($article, ['method'=>'DELETE','action' => ['ArticlesController@destroy',$article->id]]) !!}
            <button type="button" class="btn btn-danger"><i class='fa fa-fw fa-trash'></i></button>
            {!! Form::close() !!}
            </span>
            @endif
        </h4>
        <p>{{$article->shortbody()}}</p>
    </div>
</div>
@endforeach
</div>