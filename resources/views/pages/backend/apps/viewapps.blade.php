@extends('layouts.backend')

@section('content')
<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">View Apps</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('addapp')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Add New App</button>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->
<div class="row">
    <div class="col-xl-12">
        <!-- Export -->
        <div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>View Apps</h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
            @if(count($apps)>0)
                <table id="export-table" class="table mb-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Plateform</th>
                            <th>Version</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($apps as $app)
                        <tr>
                            <td><span class="text-primary">{{$app->id}}</span></td>
                            <td>{{$app->plateform}}</td>
                            <td>{{$app->version}}</td>
                            <td>{{$app->path}}</td>
                            <td class="td-actions">
                                <a href="{{route('editapp',$app->id)}}"><i class="la la-edit edit"></i></a>
                                <a href="{{route('deleteapp',$app->id)}}"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="text-center"> No Apps available</h2>
                @endif
            </div>
        </div>
    </div>
    <!-- End Export -->
    </div>
</div>
<!-- End Row -->
</div>
@endsection