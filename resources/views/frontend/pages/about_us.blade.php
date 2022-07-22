@php
$about_us = siteInfo()->about_us;
@endphp
@extends('frontend.layouts.master')
@section('page_title')
    About us
@stop
@section('main_section')
    <div class="banner-bottom">
        <!-- container -->
        <div class="container">
            <div class="about-info">
                <h2>About Us</h2>
            </div>
            <div class="faqs-top-grids">
                <div>
                    {!! $about_us !!}

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
@stop
