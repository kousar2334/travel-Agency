@extends('frontend.layouts.master')
@section('page_title')
    Login
@stop
@section('main_section')
    <div class="banner-bottom">
        <!-- container -->
        <div class="container">
            <div class="faqs-top-grids">
                <div class="book-grids">
                    <div class="col-md-6 book-left">
                        <div class="book-left-info">
                            <h3>Login</h3>
                        </div>
                        <div class="book-left-form">
                            <form action="{{ route('frontend.login.process') }}" method="POST">
                                @csrf
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
                                <div class="form-row">
                                    <input type="submit" value="Login">
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
                        <div class="book-left-bottom">
                            <div>
                                <a href="#">Register Now</a>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
@stop
