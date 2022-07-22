@extends('admin.layouts.main')
@section('admin-page-title')
    Email Settings
@stop
@section('custom_css')
@stop
@section('admin_content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Email Settings</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.setting.email.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Host<span class="text-danger">*</span></label>
                                            <input type="text" name="host" value="{{ env('MAIL_HOST') }}"
                                                class="form-control" placeholder="Enter Site Name">
                                            @if ($errors->has('host'))
                                                <small class="text text-danger">{{ $errors->first('host') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Port<span class="text-danger">*</span></label>
                                            <input type="text" name="port" value="{{ env('MAIL_PORT') }}"
                                                class="form-control" placeholder="Enter Site Name">
                                            @if ($errors->has('port'))
                                                <small class="text text-danger">{{ $errors->first('port') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" name="username" value="{{ env('MAIL_USERNAME') }}"
                                                class="form-control" placeholder="Enter username">
                                            @if ($errors->has('username'))
                                                <small class="text text-danger">{{ $errors->first('username') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" value="{{ env('MAIL_PASSWORD') }}"
                                                class="form-control" placeholder="Enter password">
                                            @if ($errors->has('password'))
                                                <small class="text text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Mail Encryption</label>
                                            <input type="text" name="encryption" value="{{ env('MAIL_ENCRYPTION') }}"
                                                class="form-control" placeholder="Enter encryption">
                                            @if ($errors->has('encryption'))
                                                <small class="text text-danger">{{ $errors->first('encryption') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Mail From</label>
                                            <input type="email" name="mail_form" value="{{ env('MAIL_FROM_ADDRESS') }}"
                                                class="form-control" placeholder="Enter Email">
                                            @if ($errors->has('mail_form'))
                                                <small class="text text-danger">{{ $errors->first('mail_form') }}</small>
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
                <div class="col-lg-4 mx-auto col-sm-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Test Mail</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.setting.email.test') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Mail To<span class="text-danger">*</span></label>
                                            <input type="text" name="mail_to" value="{{ old('mail_to') }}"
                                                class="form-control" placeholder="Enter Email">
                                            @if ($errors->has('mail_to'))
                                                <small class="text text-danger">{{ $errors->first('mail_to') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Subject<span class="text-danger">*</span></label>
                                            <input type="text" name="subject" value="{{ old('subject') }}"
                                                class="form-control" placeholder="Enter Mail Subject">
                                            @if ($errors->has('subject'))
                                                <small class="text text-danger">{{ $errors->first('subject') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Mail Body</label>
                                            <textarea class="form-control" name="mail_body" rows="4" placeholder="Mail Body"></textarea>
                                            @if ($errors->has('mail_body'))
                                                <small class="text text-danger">{{ $errors->first('mail_body') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mt-2">
                                    <input type="submit" class="btn btn-success" value="Send Test Mail" />
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
