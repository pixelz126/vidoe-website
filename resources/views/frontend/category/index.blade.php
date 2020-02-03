@extends('layouts.app')

@section('title' , $cat->name)

@section('meta_desc' , $cat->meta_desc)
@section('meta_keywords' , $cat->meta_keywords)


@section('content')

    <div class="section section-buttons">
      <div class="container">
            <div class="title">
              <h1>{{$cat->name}}</h1>
            </div><br>
            @include('frontend.share.video-row')
        </div>
    </div>    

@endsection
