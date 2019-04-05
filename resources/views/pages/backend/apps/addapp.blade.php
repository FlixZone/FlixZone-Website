@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">Add App</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('viewapps')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">View Apps</button>
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
                <h4>Add New App</h4>
            </div>
            <div class="widget-body">
                <form class="form-horizontal" action="{{route('storeapp')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Plateform</label>
                        <div class="col-lg-9">
                            <select id="plateform" name="plateform" placeholder="E.g. Android" class="form-control" require>
                                <option name="Android" value="Android">Android</option>
                                <option name="iphone" value="iphone">iPhone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Version</label>
                        <div class="col-lg-9">
                            <input type="text" id="version" name="version" placeholder="E.g. 2.0" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">App</label>
                        <div class="col-lg-9">
                            <input type="file" id="app" name="app" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-5 form-control-label"></label>
                        <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary ripple mr-1 mb-2">Submit App</button>
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