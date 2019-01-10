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
                    <a href="/addmega">
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
                        <tr>
                            <td><span class="text-primary">Fast & Furious</span></td>
                            <td>xyz@gmail.com</td>
                            <td>qwerty</td>
                            <td>KlurJA4rKMF_5-RNLvVuTzQ1QHpR_c0POVWi_8mTcSA</td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="#"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Export -->
    </div>
</div>
<!-- End Row -->
</div>
@endsection