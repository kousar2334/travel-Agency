@extends('frontend.layouts.master')
@section('page_title')
    Signup
@stop
@section('main_section')
    <div class="banner-bottom">
        <!-- container -->
        <div class="container">
            <div class="faqs-top-grids">
                <div class="book-grids">
                    <div class="col-md-6 book-left">
                        <div class="book-left-info">
                            <h3>Create Your Account</h3>
                        </div>
                        <div class="book-left-form">
                            <form action="{{ route('frontend.signup.completed') }}" method="POST">
                                @csrf
                                <div class="form-row mb-20">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    @if ($errors->has('name'))
                                        <small class="text text-danger">{{ $errors->first('name') }}</small>
                                    @endif
                                </div>
                                <div class="form-row mb-20">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    @if ($errors->has('phone'))
                                        <small class="text text-danger">{{ $errors->first('phone') }}</small>
                                    @endif
                                </div>

                                <div class="form-row mb-20">
                                    <label>Email Address</label>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    @if ($errors->has('email'))
                                        <small class="text text-danger">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="form-row mb-20">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                    @if ($errors->has('password'))
                                        <small class="text text-danger">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                                <div class="form-row mb-20">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation">
                                </div>
                                <div class="form-row">
                                    <input type="submit" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 book-left book-right">
                        <div class="book-left-info">
                            <h3>Recommended</h3>
                        </div>
                        <ul>
                            <li>Access booking history with upcoming trips</li>
                            <li>Print tickets and invoices</li>
                            <li>Make checkouts simpler</li>
                            <li>Enter your contact details only once</li>
                            <li>Get alerts for low fares</li>
                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
@stop
