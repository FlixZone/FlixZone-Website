@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title text-gradient-01">Dashboard</h2>
        </div>
    </div>
</div>
<!-- End Page Header -->
                        
<div class="row flex-row">
    <!-- Begin Widget 1 -->
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
        <div class="widget widget-17 has-shadow">
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-7 d-flex flex-column justify-content-center align-items-center">
                        <div class="counter">{{$data['user']}}</div>
                        <div class="total-visitors">
                            <i class="la la-user counter"></i>User
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Widget 1 -->
    <!-- Begin Widget 2 -->
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
        <div class="widget widget-17 has-shadow">
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-7 d-flex flex-column justify-content-center align-items-center">
                        <div class="counter">{{$data['movie']}}</div>
                        <div class="total-visitors">
                            <i class="la la-film counter"></i>Movie
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Widget 2 -->
    <!-- Begin Widget 3 -->
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
        <div class="widget widget-17 has-shadow">
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-7 d-flex flex-column justify-content-center align-items-center">
                        <div class="counter">{{$data['tvshow']}}</div>
                        <div class="total-visitors">
                            <i class="la la-tv counter"></i> TVshow
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Widget 3-->
     <!-- Begin Widget 4 -->
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
        <div class="widget widget-17 has-shadow">
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-7 d-flex flex-column justify-content-center align-items-center">
                        <div class="counter">{{$data['mega']}}</div>
                        <div class="total-visitors">
                            <i class="la la-server counter"></i> Mega
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Widget 4-->
</div>

<!-- Start Profile -->                        
<div class="row flex-row">
    <div class="col-xl-12">
        <div class="widget widget-13 has-shadow">
            <div class="widget-body p-0">
                <div class="author-avatar">
                    <img src="{{url('/storage/profile_images',$profile->profile_image)}}" alt="..." class="img-fluid rounded-circle">
                </div>
                <div class="author-name">
                    {{$profile->name}}
                    @if($profile->type == 1)
                        <span>Admin</span>
                    @else
                        <span>User</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Profile -->
</div>
                        
@endsection