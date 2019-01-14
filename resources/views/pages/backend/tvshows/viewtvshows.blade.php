@extends('layouts.backend')

@section('content')
<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">View TV Shows</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('addtvshow')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Add New TV Show</button>
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
            <h4>View TV Shows</h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
                @if(count($tvshows)>0)
                <table id="export-table" class="table mb-0">
                    <thead>
                        <tr>
                            <th>The Movie DB Id</th>
                            <th>TV Show Name</th>
                            <th>TV Show Season</th>
                            <th>TV Show Episode</th>
                            <th>Mega Link</th>
                            <th>Mega Key</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tvshows as $tvshow)
                        <tr>
                            <td><span class="text-primary">{{$tvshow->the_movie_db_id}}</span></td>
                            <td>{{$tvshow->name}}</td>
                            <td>{{$tvshow->season}}</td>
                            <td>{{$tvshow->episode}}</td>
                            <td>{{$tvshow->mega_link}}</td>
                            <td>{{$tvshow->mega_key}}</td>
                            <td class="td-actions">
                                <a href="{{route('edittvshow',$tvshow->id)}}"><i class="la la-edit edit"></i></a>
                                <a href="{{route('deletetvshow',$tvshow->id)}}"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="text-center"> No TV Shows available</h2>
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