@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">Edit TV Show</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('viewtvshows')}}">
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
                <h4>Edit TV Show</h4>
            </div>
            <div class="widget-body">
                <form class="form-horizontal" method="POST" action="{{route('updatetvshow',['id'=>$tvshow->id ])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">The Movie DB Id</label>
                        <div class="col-lg-9">
                            <input type="number" id="the_movie_db_id" name="the_movie_db_id" value="{{$tvshow->the_movie_db_id}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">TV Show Name</label>
                        <div class="col-lg-9">
                            <input type="text" id="tv_show_name" name="tv_show_name" value="{{$tvshow->name}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">TV Show Season</label>
                        <div class="col-lg-9">
                            <input type="text" id="season" name="season" value="{{$tvshow->season}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">TV Show Episode</label>
                        <div class="col-lg-9">
                            <input type="text" id="episode" name="episode" value="{{$tvshow->episode}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Mega-link</label>
                        <div class="col-lg-9">
                            <input type="text" id="mega_link" name="mega_link" value="{{$tvshow->mega_link}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Mega-key</label>
                        <div class="col-lg-9">
                            <input type="text" id=mega_key"" name="mega_key" value="{{$tvshow->mega_key}}" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Torrent File</label>
                        <div class="col-lg-9">
                            <input type="file" id="torrent_file" name="torrent_file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-5 form-control-label"></label>
                        <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary ripple mr-1 mb-2">Save TV Show</button>
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