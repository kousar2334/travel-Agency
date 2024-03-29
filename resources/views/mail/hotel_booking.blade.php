@extends('mail.layouts.master')
@section('mail_title')
    Hotel Boiking Request
@stop
@section('mail_body')
    <div class="container">
        <h2 class="title">Hotel Booking Email</h2>
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
                <td>Check in</td>
                <td>{{ $data->check_in }}</td>
            </tr>
            <tr>
                <td>Check out</td>
                <td>{{ $data->check_out }}</td>
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
                <td>Rooms</td>
                <td>{{ $data->rooms }}</td>
            </tr>
        </table>
    </div>
@stop
