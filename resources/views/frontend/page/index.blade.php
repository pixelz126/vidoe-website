@extends('layouts.app')

@section('title' , $page->name)

@section('meta_desc' , $page->meta_desc)
@section('meta_keywords' , $page->meta_keywords)


@section('content')

    <div class="section section-buttons" style="min-height: 600px;">
      <div class="container">
            <div class="title">
              <h1>{{$page->name}}</h1>
            </div><br>
           <p>
           	{!!$page->desc!!}
           </p>
        </div>
    </div>    

@endsection
