@extends('frontend.layouts.master')
@section('page_title')
    Hajj & Umrah
@stop
@section('main_section')
    <div class="hajj-banner">
        <!-- container -->
        <div class="container">
            <div class="col-md-4 banner-left">
                <section class="slider2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/hajj2.jpg') }}" alt=""
                                        style="max-height: 466px">
                                </div>
                            </li>
                            <li>
                                <div class="slider-info">
                                    <img src="{{ asset('public/assets/frontend/images/hajj3.jpeg') }}" alt=""
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
                        <h2>Looking for Umrah Hajj Packages?</h2>
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
                                            <div class="reservation">
                                                <ul>
                                                    <li class="span1_of_1 desti about-desti">
                                                        <h5>Full Name</h5>
                                                        <div class="book_date">
                                                            <form>

                                                                <input type="text" placeholder="Full Name"
                                                                    class="typeahead1 input-md form-control tt-input"
                                                                    required="">
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reservation">
                                                <ul>
                                                    <li class="span1_of_1 desti about-desti">
                                                        <h5>Phone</h5>
                                                        <div class="book_date">
                                                            <form>

                                                                <input type="text" placeholder="Phone"
                                                                    class="typeahead1 input-md form-control tt-input"
                                                                    required="">
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reservation">
                                                <ul>
                                                    <li class="span1_of_1 desti about-desti">
                                                        <h5>Email</h5>
                                                        <div class="book_date">
                                                            <form>

                                                                <input type="text" placeholder="Email"
                                                                    class="typeahead1 input-md form-control tt-input"
                                                                    required="">
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reservation">
                                                <ul>
                                                    <li class="span1_of_1 desti about-desti">
                                                        <h5>Comment</h5>
                                                        <div class="book_date">
                                                            <form>

                                                                <textarea class="typeahead1 input-md form-control tt-input" required=""></textarea>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reservation">
                                                <ul>
                                                    <li class="span1_of_3">
                                                        <div class="date_btn">
                                                            <form>
                                                                <input type="submit" value="Sumbit" />
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
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
    @include('frontend.layouts.scolling')
    @include('frontend.layouts.campains')
    @include('frontend.layouts.deals')
@stop
