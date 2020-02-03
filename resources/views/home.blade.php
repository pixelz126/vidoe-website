@extends('layouts.app')

@section('content')

    <div class="section section-buttons">
      <div class="container">
            <div class="title">
              <h2>Latest Videos</h2>
              @if (request()->has('search') && request()->get('search') != '')
              	You are Searching On <b>{{ request()->get('search') }}</b> ||
              	<a href="{{route('home')}}">Reset</a>
              @endif
            </div><br>
            @include('frontend.share.video-row')
        </div>
    </div>    

@endsection
