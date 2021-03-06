@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">Edit Poster</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('viewposters')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Cancle</button>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->
<div class="row flex-row">
    <div class="col-12">
        <!-- Form -->
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Edit Poster</h4>
            </div>
            <div class="widget-body">
                <form class="form-horizontal" method="POST" action="{{route('updateposter',['id'=>$poster->id ])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Movie Name</label>
                        <div class="col-lg-9">
                            <input type="text" id="movie_name" name="movie_name" value="{{$poster->name}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Poster</label>
                        <div class="col-lg-9">
                            <input type="file" id="poster" name="poster" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-5 form-control-label"></label>
                        <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary ripple mr-1 mb-2">Save Poster</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Form -->
    </div>
</div>
<!-- End Row -->
</div>


@endsection