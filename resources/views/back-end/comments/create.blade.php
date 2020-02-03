<div class="box-body">
	<form action="{{route('comment.store')}}" method="POST">
		{{csrf_field()}}
		@include('back-end.comments.form')
		<input type="hidden" value="{{ $row->id }}" name="video_id">
	    <button type="submit" class="btn btn-primary">Add Comment</button>
	</form>
</div>