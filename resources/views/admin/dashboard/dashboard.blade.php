@extends('admin.layouts.main')
@section('admin-page-title')
    Dashboard
@stop
@section('custom_css')
    <style>
        .img-size-32 {
            height: 32px;
        }
    </style>
@stop
@section('admin_content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $total_hotel_bookings }}<sup style="font-size: 20px"></sup></h3>
                            <p class="">Hotel Booking</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $total_flight_bookings }}<sup style="font-size: 20px"></sup></h3>

                            <p class="">Air Tickets</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-plane"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $total_tour_bookings }}<sup style="font-size: 20px"></sup></h3>

                            <p class="">Package Tour</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-suitcase-rolling"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $total_hajj_bookings }}<sup style="font-size: 20px"></sup></h3>
                            <p class="">Hajj & Umrah</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-mosque"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $total_student_visa }}<sup style="font-size: 20px"></sup></h3>
                            <p class="">Student Visa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $total_tourist_visa }}<sup style="font-size: 20px"></sup></h3>
                            <p class="">Tourist Visa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-plane-departure"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mt-3 card">
                        <div class="card-header py-3">
                            <h3 class="card-title ">Latest Hotel Bookings</h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Destination</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_hotel_bookings as $key => $booking)
                                        <tr>
                                            <td>{{ date('d-M-Y', strtotime($booking->created_at)) }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->user->phone }}</td>
                                            <td>{{ $booking->destination }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mt-3">
                        <div class="card-header py-3">
                            <h3 class="card-title ">Latest Air Ticket Bookings</h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Destination</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_flight_bookings as $key => $booking)
                                        <tr>
                                            <td>{{ date('d-M-Y', strtotime($booking->created_at)) }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->user->phone }}</td>
                                            <td>{{ $booking->destination }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card mt-3">
                        <div class="card-header py-3">
                            <h3 class="card-title ">Latest Student Visa Queries</h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Degree</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_student_visa as $key => $visa)
                                        <tr>
                                            <td>{{ date('d-M-Y', strtotime($visa->created_at)) }}</td>
                                            <td>{{ $visa->user->name }}</td>
                                            <td>{{ $visa->user->phone }}</td>
                                            <td>{{ $visa->country }}</td>
                                            <td>{{ $visa->degree }}'s</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mt-3">
                        <div class="card-header py-3">
                            <h3 class="card-title ">Latest Tourist Visa Queries</h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_tourist_visa as $key => $visa)
                                        <tr>
                                            <td>{{ date('d-M-Y', strtotime($visa->created_at)) }}</td>
                                            <td>{{ $visa->user->name }}</td>
                                            <td>{{ $visa->user->phone }}</td>
                                            <td>{{ $visa->country }}</td>
                                            <td>{{ $visa->comment }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card mt-3">
                        <div class="card-header py-3">
                            <h3 class="card-title ">Latest Hajj Bookings</h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_hajj_bookings as $key => $booking)
                                        <tr>
                                            <td>{{ date('d-M-Y', strtotime($booking->created_at)) }}</td>
                                            <td>{{ $booking->full_name }}</td>
                                            <td>{{ $booking->phone }}</td>
                                            <td>{{ $booking->comment }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mt-3 ">
                        <div class="card-header py-3">
                            <h3 class="card-title ">Latest Package Tour Bookings</h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Destination</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_tour_bookings as $key => $booking)
                                        <tr>
                                            <td>{{ date('d-M-Y', strtotime($booking->created_at)) }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->user->phone }}</td>
                                            <td>{{ $booking->destination }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@stop
@section('custom_script')
    <script src="{{ asset('/public/assets') }}/backend/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/dist/js/demo.js"></script>
    <script src="{{ asset('/public/assets') }}/backend/dist/js/pages/dashboard3.js"></script>
@stop
