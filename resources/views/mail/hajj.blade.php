@extends('mail.layouts.master')
@section('mail_title')
    Hajj Boiking Request
@stop
@section('mail_body')
    <div class="container">
        <h2 class="title">Hajj & Umrah Booking Email</h2>
        <table>
            <tr>
                <td>Name</td>
                <td>{{ $data->full_name }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{ $data->phone }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $data->email }}</td>
            </tr>
            <tr>
                <td>Comment</td>
                <td>{{ $data->comment }}</td>
            </tr>
        </table>
    </div>
@stop
