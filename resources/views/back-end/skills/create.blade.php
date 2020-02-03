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

      @component('back-end.share.create',['pageDesc' => $pageDesc])
        <form action="{{route($routeName.'.store')}}" method="POST">
            @include('back-end.'.$folderName.'.form')
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add {{$moduleName}}</button>
            </div>
            </form>
    @endcomponent
    
@endsection
