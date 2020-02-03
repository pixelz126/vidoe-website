@extends('back-end.layout.app')


@section('title')
    {{$pageTitle}}
@endsection
@section('content')
    @component('back-end.layout.header')
        @slot('nav_title')
            {{$pageTitle}}
        @endslot
    @endcomponent
    <br>
     <!-- form start -->
     @component('back-end.share.edit',['pageDesc' => $pageDesc])
         <form action="{{route($routeName.'.update' , ['id' => $row])}}" method="POST" enctype="multipart/form-data">
            {{method_field('put')}}
            @include('back-end.'.$folderName.'.form')
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update {{$moduleName}}</button>
            </div>
        </form>
        @slot('md4')
         @php $url = getYoutubeId($row->youtube); @endphp
         @if($url)
            <iframe style="margin-bottom: 30px;" width="314" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allowfullscreen></iframe>
            @endif
            
            <img src="{{ url('uploads/'.$row->image) }}" width="314">
            @endslot
     @endcomponent

     @component('back-end.share.edit',['pageDesc' => 'Here We Can Control Comments'])

         @include('back-end.comments.index')

         @slot('md4')
           @include('back-end.comments.create')
         @endslot

     @endcomponent
     
@endsection
