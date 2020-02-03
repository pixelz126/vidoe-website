@if(auth()->user())      
<form action="{{route('front.commentStore', ['id' => $video->id])}}" method="POST">
 {{csrf_field()}}
 <div class="form-group">
   <label>Add Comment :</label>     
   <textarea name="comment" class="form-control" rows="3"></textarea>
 </div>
 <button type="submit" class=" btn btn-primary pull-right">Add Comment</button>
</form>
@endif   