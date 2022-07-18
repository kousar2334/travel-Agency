<!DOCTYPE html>
<html>

<head>
    <title>Hotel Booking Email</title>
    <style>
        .title {
            color: green
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>
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

</body>

</html>
