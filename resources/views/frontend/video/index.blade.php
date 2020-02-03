@extends('layouts.app')

@section('title' , $video->name)

@section('meta_desc' , $video->meta_desc)
@section('meta_keywords' , $video->meta_keywords)


@section('content')

<div class="section section-buttons">
  <div class="container">
    <div class="title">
      <h1>{{$video->name}}</h1>
    </div><br>
    <div class="row">
     <div class="col-md-12">
       @php $url = getYoutubeId($video->youtube); @endphp
       @if($url)
       <iframe style="margin-bottom: 30px;" width="100%" height="500" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allowfullscreen></iframe>
       @endif
     </div>
   </div>

   <div class="row"> 
     <div class="col-md-6">

      <span class="col-md-4">
       <i class="nc-icon nc-user-run"></i> &nbsp;
       {{$video->user->name}}
     </span>
     <span class="col-md-4">
       <i class="nc-icon nc-calendar-60"></i> &nbsp;
       {{$video->created_at}}
     </span>

     <span class="col-md-4">
       <i class="nc-icon nc-tag-content"></i> &nbsp;
       <a href="{{route('front.category', ['id' => $video->cat->id])}}">{{$video->cat->name}}
       </a>
     </span>
   </div>
   <div class="col-md-6">
    <span class="col-md-4">
     @foreach($video->tags as $tag)
     <a href="{{route('front.tags', ['id' => $tag->id])}}">
      <span class="badge badge-primary">{{$tag->name}}</span>
    </a>	
    @endforeach
  </span>

  <span class="col-md-4">
   @foreach($video->skills as $skill)
   <a href="{{route('front.skill', ['id' => $skill->id])}}">
    <span class="badge badge-warning">{{$skill->name}}</span>
  </a>	
  @endforeach
</span>
</div>
</div>	<hr>
<span>{{$video->desc}}</span><hr>
@include('frontend.video.comments')

</div>
@include('frontend.video.create-comment ')

</div>
</div>

</div>    

@endsection

