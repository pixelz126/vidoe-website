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
         <form action="{{route($routeName.'.update' , ['id' => $row])}}" method="POST">
            {{method_field('put')}}
            @include('back-end.'.$folderName.'.form')
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update {{$moduleName}}</button>
            </div>
        </form>

        @slot('md4')
        @endslot
        
     @endcomponent
@endsection
