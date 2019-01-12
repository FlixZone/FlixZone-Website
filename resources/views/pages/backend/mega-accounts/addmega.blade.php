@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">Add Mega Account </h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('viewmega')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">View Mega Accounts</button>
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
                <h4>Add New Mega Account</h4>
            </div>
            <div class="widget-body">
                <form class="form-horizontal" action="{{route('storemega')}}" method="POST">
                {{csrf_field()}}
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">File Name</label>
                        <div class="col-lg-9">
                            <input type="text" id="file_name" name="file_name" placeholder="E.g. Fast & Furious" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="email" id="email" name="email" placeholder="E.g. xyz@gmail.com" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Password</label>
                        <div class="col-lg-9">
                            <input type="text" id="password" name="password" placeholder="E.g. qwerty" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Recovery-key</label>
                        <div class="col-lg-9">
                            <input type="text" id="recovery_key" name="recovery_key" placeholder="E.g. KlurJA4rKMF_5-RNLvVuTzQ1QHpR_c0POVWi_8mTcSA" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-5 form-control-label"></label>
                        <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary ripple mr-1 mb-2">Submit Mega Account</button>
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