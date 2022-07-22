@extends('frontend.layouts.master')
@section('page_title')
    Hotel Booking
@stop
@section('main_section')
    <div class="hotel-banner">
        <!-- container -->
        <div class="container">
            <div class="col-md-4 banner-left">
                <section class="slider2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/1.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/2.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/3.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/4.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/2.jpg') }}" alt="">
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
                        <h2>Book Domestic & International Hotels</h2>
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
                                    <form method="post" action="{{ route('frontend.hotels.booking') }}">
                                        @csrf
                                        <div class="b_room">
                                            <div class="booking_room">
                                                <div class="reservation">
                                                    <ul>
                                                        <li class="span1_of_1 desti about-desti">
                                                            <h5>Going to</h5>
                                                            <div class="book_date">
                                                                <form>
                                                                    <span class="glyphicon glyphicon-map-marker"
                                                                        aria-hidden="true"></span>
                                                                    <input type="text" name="destination"
                                                                        placeholder="City, Area or Hotel Name"
                                                                        class="typeahead1 input-md form-control tt-input"
                                                                        required="">
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="reservation">
                                                    <ul>
                                                        <li class="span1_of_1">
                                                            <h5>Check in</h5>
                                                            <div class="book_date">

                                                                <span class="glyphicon glyphicon-calendar"
                                                                    aria-hidden="true"></span>
                                                                <input type="date" required name="check_in"
                                                                    value="Select date" onfocus="this.value = '';"
                                                                    onblur="if (this.value == '') {this.value = 'Select date';}">

                                                            </div>
                                                        </li>
                                                        <li class="span1_of_1 left">
                                                            <h5>Check out</h5>
                                                            <div class="book_date">
                                                                <span class="glyphicon glyphicon-calendar"
                                                                    aria-hidden="true"></span>
                                                                <input type="date" required name="check_out"
                                                                    value="Select date" onfocus="this.value = '';"
                                                                    onblur="if (this.value == '') {this.value = 'Select date';}">
                                                            </div>
                                                        </li>
                                                        <li class="span1_of_1 left adult">
                                                            <h5>Adults (18+)</h5>
                                                            <!----------start section_room----------->
                                                            <div class="section_room">
                                                                <select class="frm-field required" name="adults">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li class="span1_of_1 left h-child">
                                                            <h5>Children (0-17)</h5>
                                                            <!----------start section_room----------->
                                                            <div class="section_room">
                                                                <select class="frm-field required" name="Children">
                                                                    <option value="No">No</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li class="span1_of_1 h-rooms">
                                                            <h5>Rooms</h5>
                                                            <!----------start section_room----------->
                                                            <div class="section_room">
                                                                <select class="frm-field required" name="rooms">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <div class="clearfix"></div>
                                                    </ul>
                                                </div>
                                                <div class="reservation">
                                                    <ul>

                                                        <div class="clearfix"></div>
                                                    </ul>
                                                </div>
                                                <div class="reservation">
                                                    <ul>
                                                        <li class="span1_of_3">
                                                            <div class="date_btn">
                                                                <input type="submit" value="Submit" />
                                                            </div>
                                                        </li>
                                                        <div class="clearfix"></div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
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
