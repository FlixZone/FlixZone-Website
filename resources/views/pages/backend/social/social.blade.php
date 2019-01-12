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

<form action="{{route('update_social_links')}}" method="POST">
{{csrf_field()}}

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
                        <input type="text" id="facebook" name="facebook" value="{{$social->facebook}}" class="form-control" require>
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
                        <input type="text"  id="twitter" name="twitter" value="{{$social->twitter}}" class="form-control" require>
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
                        <input type="text"  id="instagram" name="instagram" value="{{$social->instagram}}" class="form-control" require>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram -->

    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="align-self-center">
            <button type="submit" class="btn btn-primary ripple mr-1 mb-2">Submit</button>
        </div>
    </div>
</form>


@endsection