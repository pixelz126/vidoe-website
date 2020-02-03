@foreach($comments as $comment)
<div class="box-body">
	<table class="table table-bordered table-hover dataTable" id="comments">
		<tbody>
			<tr>
				<td>
					<div class="row">
						<div class="col-md-9">
							By : <span>{{ $comment->user->name }}</span><br>
							<p>{{ $comment->comment }}</p>
							<small>{{ $comment->created_at }}</small> &nbsp;
							
						</div>
						<div class="">
							<button onclick="$(this).closest('tr').next('tr').slideToggle()" class="btn btn-primary btn-sm">
								<i class="fa fa-edit"></i>
								Edit
							</button>

	                    	<a href="{{route('comment.delete', ['id' => $comment->id]) }}" type="submit" class="btn btn-danger btn-sm">
								 <i class="fa fa-trash"></i> 
								 Delete 
							</a>						
						</div>
					</div>
				</td>	
			</tr>
			<tr style="display: none;">
				<td>
					<form action="{{route('comment.update' , ['id' => $comment->id ])}}" method="POST">
						{{csrf_field()}}
						@include('back-end.comments.form', ['row' => $comment])
						<input type="hidden" value="{{ $row->id }}" name="video_id">
						<button type="submit" class="btn btn-primary">Update Comment</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endforeach
