@extends('mail.layouts.master')
@section('mail_title')
    Student Visa Query
@stop
@section('mail_body')
    <div class="container">
        <h2 class="title">Student Visa Query</h2>
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
                <td>Country</td>
                <td>{{ $data->country }}</td>
            </tr>
            <tr>
                <td>Degree</td>
                <td>{{ $data->degree }}'s</td>
            </tr>
        </table>
    </div>
@stop
