@extends('frontend.layouts.master')
@section('page_title')
    Flights
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
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Return</span>
                            </li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>One way</span>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                        <!---->
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="facts">
                                    <div class="booking-form">
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
                                                    <div class="reservation">
                                                        <ul>
                                                            <li class="span1_of_1 desti">
                                                                <h5>Flying from</h5>
                                                                <div class="book_date">
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-map-marker"
                                                                            aria-hidden="true"></span>
                                                                        <input type="text"
                                                                            placeholder="Type Departure City"
                                                                            class="typeahead1 input-md form-control tt-input"
                                                                            required="">
                                                                    </form>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left desti">
                                                                <h5>Flying to</h5>
                                                                <div class="book_date">
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-map-marker"
                                                                            aria-hidden="true"></span>
                                                                        <input type="text"
                                                                            placeholder="Type Destination City"
                                                                            class="typeahead1 input-md form-control tt-input"
                                                                            required="">
                                                                    </form>
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
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-calendar"
                                                                            aria-hidden="true"></span>
                                                                        <input type="date" value="Select date"
                                                                            onfocus="this.value = '';"
                                                                            onblur="if (this.value == '') {this.value = 'Select date';}">
                                                                    </form>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left">
                                                                <h5>Return</h5>
                                                                <div class="book_date">
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-calendar"
                                                                            aria-hidden="true"></span>
                                                                        <input type="date" value="Select date"
                                                                            onfocus="this.value = '';"
                                                                            onblur="if (this.value == '') {this.value = 'Select date';}">
                                                                    </form>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left adult">
                                                                <h5>Adults (18+)</h5>
                                                                <!----------start section_room----------->
                                                                <div class="section_room">
                                                                    <select id="country"
                                                                        onchange="change_country(this.value)"
                                                                        class="frm-field required">
                                                                        <option value="null">1</option>
                                                                        <option value="null">2</option>
                                                                        <option value="AX">3</option>
                                                                        <option value="AX">4</option>
                                                                        <option value="AX">5</option>
                                                                        <option value="AX">6</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left children">
                                                                <h5>Children (0-17)</h5>
                                                                <!----------start section_room----------->
                                                                <div class="section_room">
                                                                    <select id="country"
                                                                        onchange="change_country(this.value)"
                                                                        class="frm-field required">
                                                                        <option value="null">1</option>
                                                                        <option value="null">2</option>
                                                                        <option value="AX">3</option>
                                                                        <option value="AX">4</option>
                                                                        <option value="AX">5</option>
                                                                        <option value="AX">6</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 economy">
                                                                <h5>Class</h5>
                                                                <!----------start section_room----------->
                                                                <div class="section_room">
                                                                    <select id="country"
                                                                        onchange="change_country(this.value)"
                                                                        class="frm-field required">
                                                                        <option value="null">Economy</option>
                                                                        <option value="null">Business</option>
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
                                                                    <form>
                                                                        <input type="submit" value="Search" />
                                                                    </form>
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
                                </div>
                            </div>
                            <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <div class="booking-form">
                                        <!---strat-date-piker---->
                                        <link rel="stylesheet"
                                            href="{{ asset('public/assets/frontend/css/jquery-ui.css') }}" />
                                        <script src="{{ asset('public/assets/frontend/js/jquery-ui.js') }}"></script>
                                        <script>
                                            $(function() {
                                                $("#datepicker,#datepicker1").datepicker();
                                            });
                                        </script>

                                        <!---/End-date-piker---->
                                        <div class="online_reservation">
                                            <div class="b_room">
                                                <div class="booking_room">
                                                    <div class="reservation">
                                                        <ul>
                                                            <li class="span1_of_1 desti">
                                                                <h5>Flying from</h5>
                                                                <div class="book_date">
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-map-marker"
                                                                            aria-hidden="true"></span>
                                                                        <input type="text"
                                                                            placeholder="Type Departure City"
                                                                            class="typeahead1 input-md form-control tt-input"
                                                                            required="">
                                                                    </form>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left desti">
                                                                <h5>Flying to</h5>
                                                                <div class="book_date">
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-map-marker"
                                                                            aria-hidden="true"></span>
                                                                        <input type="text"
                                                                            placeholder="Type Destination City"
                                                                            class="typeahead1 input-md form-control tt-input"
                                                                            required="">
                                                                    </form>
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
                                                                    <form>
                                                                        <span class="glyphicon glyphicon-calendar"
                                                                            aria-hidden="true"></span>
                                                                        <input type="date" value="Select date"
                                                                            onfocus="this.value = '';"
                                                                            onblur="if (this.value == '') {this.value = 'Select date';}">
                                                                    </form>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left">
                                                                <h5>Adults (18+)</h5>
                                                                <!----------start section_room----------->
                                                                <div class="section_room">
                                                                    <select id="country"
                                                                        onchange="change_country(this.value)"
                                                                        class="frm-field required">
                                                                        <option value="null">1</option>
                                                                        <option value="null">2</option>
                                                                        <option value="AX">3</option>
                                                                        <option value="AX">4</option>
                                                                        <option value="AX">5</option>
                                                                        <option value="AX">6</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 left tab-children">
                                                                <h5>Children (0-17)</h5>
                                                                <!----------start section_room----------->
                                                                <div class="section_room">
                                                                    <select id="country"
                                                                        onchange="change_country(this.value)"
                                                                        class="frm-field required">
                                                                        <option value="null">1</option>
                                                                        <option value="null">2</option>
                                                                        <option value="AX">3</option>
                                                                        <option value="AX">4</option>
                                                                        <option value="AX">5</option>
                                                                        <option value="AX">6</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li class="span1_of_1 economy">
                                                                <h5>Class</h5>
                                                                <!----------start section_room----------->
                                                                <div class="section_room">
                                                                    <select id="country"
                                                                        onchange="change_country(this.value)"
                                                                        class="frm-field required">
                                                                        <option value="null">Economy</option>
                                                                        <option value="null">Business</option>
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
                                                                    <form>
                                                                        <input type="submit" value="Search" />
                                                                    </form>
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
                                </div>
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
    @include('frontend.layouts.popular_place')
    @include('frontend.layouts.widgets')
@stop
