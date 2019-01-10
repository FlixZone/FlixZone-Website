@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title text-gradient-01">Manage Social Links</h2>
        </div>
    </div>
</div>
<!-- End Page Header -->

<div class="row flex-row">
    <!-- Begin Facebook -->
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="widget widget-12 has-shadow">
            <div class="widget-body">
                <div class="media">
                    <div class="align-self-center ml-5 mr-5">
                        <i class="ion-social-facebook text-facebook"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <input type="text" placeholder="www.facebook.com" class="form-control">
                    </div>
                    <div class="align-self-center ml-2 mr-2">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Facebook -->
    <!-- Begin Twitter -->
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="widget widget-12 has-shadow">
            <div class="widget-body">
                <div class="media">
                    <div class="align-self-center ml-5 mr-5">
                        <i class="ion-social-twitter text-twitter"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <input type="text" placeholder="www.twitter.com" class="form-control">
                    </div>
                    <div class="align-self-center ml-2 mr-2">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Twitter -->
    <!-- Begin Instagram -->
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="widget widget-12 has-shadow">
            <div class="widget-body">
                <div class="media">
                    <div class="align-self-center ml-5 mr-5">
                        <i class="ion-social-instagram-outline text-instagram"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <input type="text" placeholder="www.instagram.com" class="form-control">
                    </div>
                    <div class="align-self-center ml-2 mr-2">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram -->
</div>



@endsection