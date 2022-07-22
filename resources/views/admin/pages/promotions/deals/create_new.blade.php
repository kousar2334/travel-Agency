@extends('admin.layouts.main')
@section('admin-page-title')
    Create New Deal
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
                            <h3 class="card-title">New Deal</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.promotion.deals.store.new') }}" method="POST"
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

                                        <div class="form-group">
                                            <label>Start date<span class="text-danger">*</span></label>
                                            <input type="date" name="start_date" class="form-control" required>
                                            @if ($errors->has('start_date'))
                                                <small class="text text-danger">{{ $errors->first('start_date') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>End Date<span class="text-danger">*</span></label>
                                            <input type="date" name="end_date" class="form-control" required>
                                            @if ($errors->has('end_date'))
                                                <small class="text text-danger">{{ $errors->first('end_date') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Description<span class="text-danger">*</span></label>
                                            <textarea name="description" class="form-control"></textarea>
                                            @if ($errors->has('descrition'))
                                                <small class="text text-danger">{{ $errors->first('descrition') }}</small>
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
