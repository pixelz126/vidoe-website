@extends('layouts.app')

@section('title' ,'Home Page')

@section('content')
 
  @include('frontend.homepage-sections.home-image')
  @include('frontend.homepage-sections.vidoes')
  @include('frontend.homepage-sections.statics')
  @include('frontend.homepage-sections.contact-us')
  
  
@endsection
