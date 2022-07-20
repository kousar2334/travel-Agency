@extends('admin.layouts.main')
@section('admin-page-title')
    New Campain
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
                            <h3 class="card-title">New Campain</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.promotion.campain.new.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title<span class="text-danger">*</span></label>
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                class="form-control" placeholder="Title" required>
                                            @if ($errors->has('title'))
                                                <small class="text text-danger">{{ $errors->first('title') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Banner<span class="text-danger">*</span></label>
                                            <input type="file" name="banner" class="form-control" required>
                                            @if ($errors->has('banner'))
                                                <small class="text text-danger">{{ $errors->first('banner') }}</small>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                                <div class="form-group text-right mt-2">
                                    <input type="submit" class="btn btn-success" value="Submit" />
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
