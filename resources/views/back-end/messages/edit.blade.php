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

            @include('back-end.'.$folderName.'.form')
     
     @endcomponent
@endsection
