@extends('layouts.backend')

@section('content')
<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">View Movies</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('addmovie')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Add New Movie</button>
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
            <h4>View Movies</h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
                @if(count($movies)>0)
                <table id="export-table" class="table mb-0">
                    <thead>
                        <tr>
                            <th>The Movie DB Id</th>
                            <th>Movie Name</th>
                            <th>Mega Link</th>
                            <th>Mega Key</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr>
                            <td><span class="text-primary">{{$movie->the_movie_db_id}}</span></td>
                            <td>{{$movie->name}}</td>
                            <td>{{$movie->mega_link}}</td>
                            <td>{{$movie->mega_key}}</td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="#"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="text-center"> No Movies availabal</h2>
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