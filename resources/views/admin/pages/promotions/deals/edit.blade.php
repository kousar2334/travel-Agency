@extends('admin.layouts.main')
@section('admin-page-title')
    Edit Deal
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
                            <h3 class="card-title">Edit Deal</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.promotion.deals.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title<span class="text-danger">*</span></label>
                                            <input type="text" name="title" value="{{ $deal->title }}"
                                                class="form-control" placeholder="Title" required>
                                            @if ($errors->has('title'))
                                                <small class="text text-danger">{{ $errors->first('title') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Banner<span class="text-danger">*</span></label>
                                            <input type="file" name="banner" class="form-control">
                                            @if ($errors->has('banner'))
                                                <small class="text text-danger">{{ $errors->first('banner') }}</small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Start date<span class="text-danger">*</span></label>
                                            <input type="date" name="start_date" class="form-control"
                                                value="{{ $deal->start_date }}" required>
                                            @if ($errors->has('start_date'))
                                                <small class="text text-danger">{{ $errors->first('start_date') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>End Date<span class="text-danger">*</span></label>
                                            <input type="date" name="end_date" class="form-control"
                                                value="{{ $deal->end_date }}" required>
                                            @if ($errors->has('end_date'))
                                                <small class="text text-danger">{{ $errors->first('end_date') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="hidden" name="id" value="{{ $deal->id }}">
                                            <textarea name="description" class="form-control">{{ $deal->description }}</textarea>
                                            @if ($errors->has('descrition'))
                                                <small class="text text-danger">{{ $errors->first('descrition') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ $deal->status == '1' ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="0" {{ $deal->status == '0' ? 'selected' : '' }}>
                                                    Inactive</option>
                                            </select>
                                            @if ($errors->has('descrition'))
                                                <small class="text text-danger">{{ $errors->first('descrition') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mt-2">
                                    <input type="submit" class="btn btn-success" value="Update" />
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
