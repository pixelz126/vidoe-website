<div class="row">
    @foreach($videos as $video)
        <div class="col-md-4">
        @include('frontend.share.vidoe-card')
        </div> 
     @endforeach
</div>
<div class="row">
        <div class="col-md-12">
        {{ $videos->links() }}
        </div>
</div>