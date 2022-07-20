@extends('admin.layouts.main')
@section('admin-page-title')
    Campains
@stop
@section('custom_css')
    <link rel="stylesheet"
        href="{{ asset('/public/assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/public/assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@stop
@section('admin_content')
    <div class="content">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h4 class="m-0 text-dark">Dashboard</h4> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Campains</h3>
                            <a href="{{ route('admin.promotion.campain.new') }}"
                                class="btn btn-success float-right text-white">Add New Campain</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Banner</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($campains as $key => $campain)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $campain->title }}</td>
                                            <td>
                                                <img src="{{ asset('/public') }}/{{ $campain->banner }}" width="100px">
                                            </td>
                                            <td>
                                                @if ($campain->status === 1)
                                                    <p class="badge badge-success">Active</p>
                                                @else
                                                    <p class="badge badge-danger">Inactive</p>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-danger delete-campain"
                                                    data-campain="{{ $campain->id }}">Delete</button>
                                            </td>
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
    <!--Delete Modal-->
    <div id="delete-modal" class="delete-modal modal fade show" aria-modal="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">Delete Confirmation</h4>
                </div>
                <div class="modal-body text-center">
                    <p class="mt-1">Are you sure to delete this camapin ?</p>
                    <form method="POST" action="{{ route('admin.promotion.campain.delete') }}">
                        @csrf
                        <input type="hidden" id="delete-campain-id" name="id">
                        <button type="button" class="btn  m-2 btn-info" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Delete Modal-->
@stop
@section('custom_script')
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="{{ asset('/public/assets') }}/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script>
        /**
         * 
         * Delete campain
         * 
         * */
        $('.delete-campain').on('click', function(e) {
            e.preventDefault();
            let $this = $(this);
            let id = $this.data('campain');
            $("#delete-campain-id").val(id);
            $('#delete-modal').modal('show');
        });
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop
