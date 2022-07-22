@extends('admin.layouts.main')
@section('admin-page-title')
    Users
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
                            <h3 class="card-title">Users</h3>
                            <a href="{{ route('admin.users.add.new') }}" class="btn btn-success float-right text-white">Add
                                New User</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->image != null)
                                                    <img src="{{ asset('public') }}/{{ $user->image }}" width="50px"
                                                        alt="User Image">
                                                @else
                                                    <img src="{{ asset('/public/assets/backend/images/no-image.png') }}"
                                                        width="50px" alt="User Image">
                                                @endif

                                            </td>
                                            <td>
                                                @if ($user->status === 1)
                                                    <p class="badge badge-success">Active</p>
                                                @else
                                                    <p class="badge badge-danger">Inactive</p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                                    class="btn btn-info text-white">Edit</a>
                                                @if (Auth::user()->id != $user->id)
                                                    <button class="btn btn-danger delete-user"
                                                        data-user="{{ $user->id }}">Delete</button>
                                                @endif

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
                    <p class="mt-1">Are you sure to delete this user ?</p>
                    <form method="POST" action="{{ route('admin.users.delete') }}">
                        @csrf
                        <input type="hidden" id="delete-user-id" name="id">
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
         * Delete user
         * 
         * */
        $('.delete-user').on('click', function(e) {
            e.preventDefault();
            let $this = $(this);
            let id = $this.data('user');
            $("#delete-user-id").val(id);
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
