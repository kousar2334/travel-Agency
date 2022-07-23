@extends('mail.layouts.master')
@section('mail_title')
    Contact us Mail
@stop
@section('mail_body')
    <div class="container">
        <h2 class="title">Contact us Email</h2>
        <table>
            <tr>
                <td>Name</td>
                <td>{{ $data->first_name }} {{ $data->last_name }}</td>
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
                <td>Message</td>
                <td>{{ $data->message }}</td>
            </tr>
        </table>
    </div>
@stop
