@extends('layouts.front')
@section('content')
<div class='col-lg-8'>
<h1>{{$article->title}}</h1>
<p class="lead">
    przez <a href="#">{{$article->user->name}}</a>
</p>
<hr>
<p><span class="glyphicon glyphicon-time"></span> Dodano {{$article->created_at}}</p>
<hr>
<img class="img-responsive" src="{{$article->image()}}" alt="">
<hr>
<article>
	{{$article->body}}
</article>
<hr>
<div id="comments">
@if($user = \Auth::user())
<div class="well">
{!! Form::open(['action' => ['ArticlesController@comment',$article->id]]) !!}
<div class='form-group'>
    <h4>Skomentuj: </h4>
    {!! Form::textarea('body',null,['rows'=>3, 'class'=>'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::submit('Skomentuj',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
</div>
@endif
@foreach($article->comments as $comment)
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="{{$comment->user->image()}}" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">{{$comment->user->name}}
            <small>{{$comment->created_at}}</small>
        </h4>
        @include('articles.comment_body',['comment'=>$comment,'callback'=>action('ArticlesController@show',$comment->article->id)])
    </div>
</div>
@endforeach
</div>
</div>
@stop
@section('scripts')
<script type="text/javascript">
    $(".edit_comment").click(function(){
        var id = this.id;
        $(this).hide();
        $("#show"+id).hide();
        $("#edit"+id).show();
    });
    $(".edit_cancel").click(function(){
        var id = this.id;
        $(".edit_comment").show();
        $("#show"+id).show();
        $("#edit"+id).hide();
    });
</script>
@endsection