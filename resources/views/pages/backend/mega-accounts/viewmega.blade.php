@extends('layouts.backend')

@section('content')
<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title  text-gradient-01">View Mega Accounts</h2>
            <div>
                <ul class="breadcrumb">
                    <a href="{{route('addmega')}}">
                        <button type="button" class="btn btn-primary ripple mr-1 mb-2">Add New Mega Account</button>
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
            <h4>View Mega Accounts</h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
            @if(count($megas)>0)
                <table id="export-table" class="table mb-0">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Recovery-key</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($megas as $mega)
                        <tr>
                            <td><span class="text-primary">{{$mega->file_name}}</span></td>
                            <td>{{$mega->email}}</td>
                            <td>{{$mega->password}}</td>
                            <td>{{$mega->recovery_key}}</td>
                            <td class="td-actions">
                                <a href="{{route('editmega',$mega->id)}}"><i class="la la-edit edit"></i></a>
                                <a href="{{route('deletemega',$mega->id)}}"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="text-center"> No Mega Accounts available</h2>
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