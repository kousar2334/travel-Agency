@extends('admin.layouts.main')
@section('admin-page-title')
    Dashboard
@stop
@section('custom_css')
    <style>
        .img-size-32 {
            height: 32px;
        }
    </style>
@stop
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h4 class="m-0 text-dark">Dashboard</h4> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <h1>Dashboard</h1>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@stop
@section('custom_script')
    <script src="{{ asset('/public/assets') }}/backend/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/dist/js/demo.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/dist/js/pages/dashboard3.js"></script>
@stop
