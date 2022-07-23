@extends('mail.layouts.master')
@section('mail_title')
    Air Ticket Boiking Request
@stop
@section('mail_body')
    <div class="container">
        <h2 class="title">Air Ticket Booking Email</h2>
        <table>
            <tr>
                <td>Name</td>
                <td>{{ Auth::guard('user')->user()->name }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{ Auth::guard('user')->user()->phone }}</td>
            </tr>
            <tr>
                <td>Destination</td>
                <td>{{ $data->destination }}</td>
            </tr>
            <tr>
                <td>Form Where</td>
                <td>{{ $data->pickup_point }}</td>
            </tr>
            <tr>
                <td>Departure</td>
                <td>{{ $data->departure }}</td>
            </tr>
            <tr>
                <td>Return Date</td>
                <td>{{ $data->return_date }}</td>
            </tr>
            <tr>
                <td>Adults</td>
                <td>{{ $data->adults }}</td>
            </tr>
            <tr>
                <td>Children</td>
                <td>{{ $data->Children }}</td>
            </tr>
            <tr>
                <td>Class</td>
                <td>{{ $data->class }}</td>
            </tr>
        </table>
    </div>
@stop
