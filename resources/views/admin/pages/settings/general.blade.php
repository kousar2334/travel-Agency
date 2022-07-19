@extends('admin.layouts.main')
@section('admin-page-title')
    General Settings
@stop
@section('custom_css')
@stop
@section('admin_content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto col-sm-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">General Settings</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.setting.general.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Site Name<span class="text-danger">*</span></label>
                                            <input type="hidden" name="id" value="{{ $settings->id }}">
                                            <input type="text" name="site_name" value="{{ $settings->site_name }}"
                                                class="form-control" placeholder="Enter Site Name">
                                            @if ($errors->has('site_name'))
                                                <small class="text text-danger">{{ $errors->first('site_name') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <div class="row mb-2 ml-2">
                                                @if ($settings->logo)
                                                    <div class="logo">
                                                        <img src="{{ asset('/public') }}/{{ $settings->logo }}"
                                                            height="70px">
                                                    </div>
                                                @endif
                                            </div>
                                            <input type="file" name="logo" class="form-control">
                                            @if ($errors->has('logo'))
                                                <small class="text text-danger">{{ $errors->first('logo') }}</small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Favicon</label>
                                            <input type="file" name="favicon" class="form-control">
                                            @if ($errors->has('favicon'))
                                                <small class="text text-danger">{{ $errors->first('favicon') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ $settings->phone }}"
                                                class="form-control" placeholder="Enter Phone">
                                            @if ($errors->has('phone'))
                                                <small class="text text-danger">{{ $errors->first('phone') }}</small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{ $settings->email }}"
                                                class="form-control" placeholder="Enter Email">
                                            @if ($errors->has('email'))
                                                <small class="text text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" rows="3" placeholder="Enter Address">{{ $settings->address }}</textarea>
                                            @if ($errors->has('address'))
                                                <small class="text text-danger">{{ $errors->first('address') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mt-2">
                                    <input type="submit" class="btn btn-success" value="Update Settings" />
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
