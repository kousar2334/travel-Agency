@extends('mail.layouts.master')
@section('mail_title')
    Package Tour Boiking Request
@stop
@section('mail_body')
    <div class="container">
        <h2 class="title">Package Tour Booking Email</h2>
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
                <td>Email</td>
                <td>{{ Auth::guard('user')->user()->email }}</td>
            </tr>
            <tr>
                <td>Destination</td>
                <td>{{ $data->destination }}</td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td>{{ $data->start_date }}</td>
            </tr>
            <tr>
                <td>End Date</td>
                <td>{{ $data->end_date }}</td>
            </tr>
        </table>
    </div>
@stop
