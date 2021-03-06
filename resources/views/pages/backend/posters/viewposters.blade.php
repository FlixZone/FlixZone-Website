@extends('layouts.backend')

@section('content')
<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">View Posters</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('addposter')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Add New Poster</button>
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
            <h4>View Posters</h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
                @if(count($posters)>0)
                <table id="export-table" class="table mb-0">
                    <thead>
                        <tr>
                            <th>Poster</th>
                            <th>Movie Name</th>
                            <th>Poster Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posters as $poster)
                        <tr>
                            <td><span class="text-primary"><img hight="200px" width="200px" src="{{url('/storage/poster_files',$poster->poster)}}"/></span></td>
                            <td>{{$poster->name}}</td>
                            <td>{{$poster->poster}}</td>
                            <td class="td-actions">
                                <a href="{{route('editposter',$poster->id)}}"><i class="la la-edit edit"></i></a>
                                <a href="{{route('deleteposter',$poster->id)}}"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="text-center"> No Posters available</h2>
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