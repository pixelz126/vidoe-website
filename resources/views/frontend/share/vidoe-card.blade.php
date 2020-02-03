<div class="card" style="width: 20rem;">
	<a href="{{route('frontend.video' , ['id' => $video->id ])}}" title="{{$video->name}}">
    <img class="card-img-top" style="max-height: 180px;" src="{{url('uploads/'.$video->image)}}" alt="{{$video->name}}">
    </a>
    <div class="card-body">
     	<p class="card-text">
    		<a href="{{route('frontend.video' , ['id' => $video->id ])}}"> 
     		{{$video->name}}
     		</a>
     	</p>
     	<small>{{$video->created_at}}</small>
    </div>
</div>
