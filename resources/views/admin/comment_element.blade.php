@forelse($comments as $comment)
<p>
Artykuł: <a href="{{action('ArticlesController@show',$comment->article->id)}}#show{{$comment->id}}">{{$comment->article->title}}</a>:
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="{{$comment->user->image()}}" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">{{$comment->user->name}}
            <small>{{$comment->created_at}}</small>
        </h4>
		@include('articles.comment_body',['comment'=>$comment,'callback'=>$callback])
    </div>
</div>
</p>
@empty
brak
@endforelse
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