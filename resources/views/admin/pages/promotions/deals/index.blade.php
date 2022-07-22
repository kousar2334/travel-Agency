@extends('admin.layouts.main')
@section('admin-page-title')
    Deals
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
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Deals</h3>
                            <a href="{{ route('admin.promotion.deals.add.new') }}"
                                class="btn btn-success float-right text-white">Add New Deal</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Banner</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deals as $key => $deal)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $deal->title }}</td>
                                            <td>
                                                <img src="{{ asset('/public') }}/{{ $deal->banner }}" width="100px">
                                            </td>
                                            <td>{{ $deal->description }}</td>
                                            <td>{{ $deal->start_date }}</td>
                                            <td>{{ $deal->end_date }}</td>
                                            <td>
                                                @if ($deal->status === 1)
                                                    <p class="badge badge-success">Active</p>
                                                @else
                                                    <p class="badge badge-danger">Inactive</p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.promotion.deals.edit', $deal->id) }}"
                                                    class="btn btn-info text-white"
                                                    data-deal="{{ $deal->id }}">Edit</a>
                                                <button class="btn btn-danger delete-deal"
                                                    data-deal="{{ $deal->id }}">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <p class="mt-1">Are you sure to delete this deal ?</p>
                    <form method="POST" action="{{ route('admin.promotion.deals.delete') }}">
                        @csrf
                        <input type="hidden" id="delete-deal-id" name="id">
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
         * Delete deal
         * 
         * */
        $('.delete-deal').on('click', function(e) {
            e.preventDefault();
            let $this = $(this);
            let id = $this.data('deal');
            $("#delete-deal-id").val(id);
            $('#delete-modal').modal('show');
        });
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });

        });
    </script>
@stop
