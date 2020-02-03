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
    <!-- Table start -->
    @component('back-end.share.table', ['pageTitle' => $pageTitle , 'pageDesc' => $pageDesc])
            @slot('addButton')
                <div class="col-md-4">
                     <a href="{{route($routeName.'.create')}}" class="pull-right btn btn-success">
                        <i class="fa fa-plus"></i>
                         Add {{$sModuleName}}
                    </a>
                </div>
            @endslot
            <table id="example2" class="table table-bordered table-hover dataTable" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Control {{$moduleName}}</th>

                            </tr>
                            </thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($rows as $row)
                                <tr class="odd">
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                        
                                    <td class="col-md-2">
                                        <div class="row">
                                            @include('back-end.share.buttons.edit')
                                            @include('back-end.share.buttons.delete')
                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $rows->links() }}
        @endcomponent
    <!-- Table start -->
@endsection
