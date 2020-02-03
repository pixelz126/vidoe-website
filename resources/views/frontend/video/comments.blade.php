<div class="row" id="comment">
 <div class="card text-left col-md-12">
   <div class="card-header card-header-rose">
     <ul class="nav nav-tabs">
       <li class="nav-item">
        @php $comments = $video->comments @endphp
        <h5>Comments ({{count($comments)}})</h5>
      </li>
    </div>
    <div class="card-body">
     @foreach($comments as $comment)
     <div class="row">
      <div class="col-md-8">
        <a href="{{route('front.profile' , ['id' => $comment->user->id, 'slug' => slug($comment->user->name) ])}}">
          <p>
            {{$comment->user->name}}
          </p>
        </a>
      </div>
      <div class="col-md-4 text-right">
        <i class="nc-icon nc-calendar-60"></i> &nbsp;
        <span>{{$comment->created_at}}</span>
        
      </div>
    </div>
    
    <p>
      <i class="nc-icon nc-chat-33"></i> <b>{{$comment->comment}}</p>
      @if(auth()->user())        
      @if((auth()->user()->group == 'admin') || auth()->user()->id == $comment->user->id)
      <a href="" onclick="$(this).next('div').slideToggle(300);return false;"> Edit</a>
      <div style="display: none;">
        <form action="{{route('front.commentUpdate', ['id' => $comment->id])}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <textarea name="comment" class="form-control" rows="4">{{$comment->comment}}</textarea>
          </div>
          <button type="submit" class=" btn btn-info pull-right">Edit</button>
        </form> 
      </div>
      @endif
      @endif
    </span>
    @if(!$loop->last)
    <hr>
    @endif
    @endforeach
  </div>
</div>