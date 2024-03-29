@extends('admin.layouts.main')
@section('admin-page-title')
    Edit User
@stop
@section('custom_css')
@stop
@section('admin_content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Basic Information</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.users.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Name<span class="text-danger">*</span></label>
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $user->name }}" placeholder=" Enter Name">
                                            @if ($errors->has('name'))
                                                <small class="text text-danger">{{ $errors->first('name') }}</small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $user->email }}" placeholder=" Enter Email">
                                            @if ($errors->has('email'))
                                                <small class="text text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                            @if ($errors->has('image'))
                                                <small class="text text-danger">{{ $errors->first('image') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option {{ $user->status == '1' ? 'selected' : '' }} value="1">
                                                    Active
                                                </option>
                                                <option {{ $user->status == '0' ? 'selected' : '' }} value="0">
                                                    Inactive
                                                </option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <small class="text text-danger">{{ $errors->first('status') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" class="btn btn-success btn-flat" value="Update" />
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Password</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.users.update.password') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="hidden" name="id" value="{{ $user->id }}" readonly>
                                            <input type="password" name="password" class="form-control"
                                                value="{{ old('password') }}" placeholder=" Enter Password">
                                            @if ($errors->has('password'))
                                                <small class="text text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Conform Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" class="btn  btn-success btn-flat" value="Update Password" />
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
