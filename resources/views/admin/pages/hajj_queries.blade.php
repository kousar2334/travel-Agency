@extends('admin.layouts.main')
@section('admin-page-title')
    Hajj Queries
@stop
@section('custom_css')
    <link rel="stylesheet"
        href="{{ asset('/public/assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/public/assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@stop
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h4 class="m-0 text-dark">Dashboard</h4> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Hajj & Umrah Queries</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $key => $query)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $query->full_name }}</td>
                                        <td>{{ $query->phone }}</td>
                                        <td>{{ $query->email }}</td>
                                        <td>{{ $query->comment }}</td>
                                        <td>{{ date('d-M-Y', strtotime($query->created_at)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@stop
@section('custom_script')
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@stop
