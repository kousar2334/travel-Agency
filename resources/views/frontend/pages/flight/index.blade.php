@extends('frontend.layouts.master')
@section('page_title')
    Flights
@stop
@section('custom_css')
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
@stop
@section('main_section')
    <div class="banner">
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
                    <div class="booking-info">
                        <h2>Book Domestic & International Flight Tickets</h2>
                    </div>
                    <form method="post" action="{{ route('frontend.flight.booking.request') }}">
                        @csrf
                        <div class="booking-form">
                            <div class="online_reservation">
                                <div class="b_room">
                                    <div class="booking_room">
                                        <div class="reservation">
                                            <ul>
                                                <li class="span1_of_1 desti">
                                                    <h5>Flying from</h5>
                                                    <div class="book_date">
                                                        <span class="glyphicon glyphicon-map-marker"
                                                            aria-hidden="true"></span>
                                                        <input type="text" name="from"
                                                            placeholder="Type Departure City"
                                                            class="typeahead1 input-md form-control tt-input"
                                                            required="">
                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left desti">
                                                    <h5>Flying to</h5>
                                                    <div class="book_date">
                                                        <span class="glyphicon glyphicon-map-marker"
                                                            aria-hidden="true"></span>
                                                        <input type="text" name="destination"
                                                            placeholder="Type Destination City"
                                                            class="typeahead1 input-md form-control tt-input"
                                                            required="">
                                                    </div>
                                                </li>
                                                <div class="clearfix"></div>
                                            </ul>
                                        </div>
                                        <div class="reservation">
                                            <ul>
                                                <li class="span1_of_1">
                                                    <h5>Departure</h5>
                                                    <div class="book_date">
                                                        <span class="glyphicon glyphicon-calendar"
                                                            aria-hidden="true"></span>
                                                        <input type="date" name="departure" value="Select date"
                                                            onfocus="this.value = '';"
                                                            onblur="if (this.value == '') {this.value = 'Select date';}"
                                                            required>
                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left">
                                                    <h5>Return</h5>
                                                    <div class="book_date">
                                                        <span class="glyphicon glyphicon-calendar"
                                                            aria-hidden="true"></span>
                                                        <input type="date" name="return" value="Select date"
                                                            onfocus="this.value = '';"
                                                            onblur="if (this.value == '') {this.value = 'Select date';}">
                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left adult">
                                                    <h5>Adults (18+)</h5>
                                                    <!----------start section_room----------->
                                                    <div class="section_room">
                                                        <select name="adults" class="frm-field required">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left children">
                                                    <h5>Children (0-17)</h5>
                                                    <div class="section_room">
                                                        <select name="childrens" class="frm-field required">
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
                                                <li class="span1_of_1 economy">
                                                    <h5>Class</h5>
                                                    <div class="section_room">
                                                        <select name="class" class="frm-field required">
                                                            <option value="Economy">Economy</option>
                                                            <option value="Business">Business</option>
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
                                                        <input type="submit" value="Submit" />
                                                    </div>
                                                </li>
                                                <div class="clearfix"></div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //container -->
    </div>
    @include('frontend.layouts.scolling')
    @include('frontend.layouts.popular_place')
    @include('frontend.layouts.widgets')
@stop
