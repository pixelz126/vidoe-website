@extends('layouts.app')

@section('title' , $user->name)


@section('content')

<div class="section profile-content" style="margin-top: 190px;">
    <div class="container">
      <div class="owner">
        <div class="avatar">
          <img src="../../frontend/img/faces/user2-160x160.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
        </div>
        <div class="name">
          <h4 class="title">{{$user->name}}
            <br>
          </h4>
          <h6 class="description">{{$user->email}}</h6>
        </div>
      </div>
      @if(auth()->user() && $user->id == auth()->user()->id)
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <p>An artist of considerable range, Jane Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
          <br>
          <btn onclick="$(this).closest('div.row').next('form').slideToggle(1000)" class="btn btn-outline-default btn-round">
            <i class="fa fa-cog"></i>Update profile
          </btn>
        </div>
      </div>
     @include('frontend.profile.edit')
     @endif
    </div>
  </div>
@endsection
