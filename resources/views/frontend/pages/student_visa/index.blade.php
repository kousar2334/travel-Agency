@extends('frontend.layouts.master')
@section('page_title')
    Student Visa
@stop
@section('main_section')
    <div class="study-banner">
        <!-- container -->
        <div class="container">
            <div class="col-md-4 banner-left">
                <section class="slider2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/student2.jpg') }}" alt=""
                                        style="max-height: 466px">
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/student1.jpg') }}" alt=""
                                        style="max-height: 466px">
                                </div>
                            </li>

                        </ul>
                    </div>
                </section>
                <!--FlexSlider-->
            </div>
            <div class="col-md-8 banner-right">
                <div class="sap_tabs">
                    <div class="booking-info about-booking-info">
                        <h2>Enroll in Study Abroad Programs</h2>
                    </div>
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <!---->
                        <div class="facts about-facts train-facts">
                            <div class="booking-form train-form">
                                <link rel="stylesheet" href="css/jquery-ui.css" />
                                <!---strat-date-piker---->
                                <script>
                                    $(function() {
                                        $("#datepicker,#datepicker1").datepicker();
                                    });
                                </script>
                                <!---/End-date-piker---->
                                <!-- Set here the key for your domain in order to hide the watermark on the web server -->

                                <div class="online_reservation">
                                    <div class="b_room">
                                        <div class="booking_room">
                                            <form method="POST" action="{{ route('frontend.visa.student.store.query') }}">
                                                @csrf
                                                <div class="reservation">
                                                    <ul>
                                                        <li class="span1_of_1 desti about-desti">
                                                            <h5>Which country are you planning to study in?</h5>
                                                            <div class="book_date">
                                                                <span class="glyphicon glyphicon-map-marker"
                                                                    aria-hidden="true"></span>
                                                                <input type="text" name="country"
                                                                    value="{{ old('country') }}" placeholder="Country Name"
                                                                    class="typeahead1 input-md form-control tt-input"
                                                                    required="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="reservation">
                                                    <ul>
                                                        <li class="span1_of_1 desti about-desti">
                                                            <h5>Which Degree do you want to pursue?</h5>
                                                            <div class="book_date">
                                                                <select name="degree" value="{{ old('degree') }}"
                                                                    class="frm-field required">
                                                                    <option value="Bachelor">Bachelor's</option>
                                                                    <option value="Master">Master's</option>
                                                                </select>
                                                            </div>
                                                        </li>

                                                        <div class="clearfix"></div>
                                                    </ul>
                                                </div>
                                                <div class="reservation">
                                                    <ul>
                                                        <li class="span1_of_3">
                                                            <div class="date_btn">
                                                                <input type="submit" value="Sumbit" />
                                                            </div>
                                                        </li>
                                                        <div class="clearfix"></div>
                                                    </ul>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
    @include('frontend.layouts.scolling')
    @include('frontend.layouts.campains')
    @include('frontend.layouts.deals')
@stop
