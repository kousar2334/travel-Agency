<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('mail_title')
    </title>
    <link rel="stylesheet"
        href="{{ asset('/public/assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/public/assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
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

        .header {
            background-color: #4eaf4b;
            width: 100%;
            height: 70px;

        }

        .footer {
            background-color: #dddddd;
            width: 100%;
            height: 50px;
            margin-top: 30px;
        }

        .site-title {
            padding-top: 17px;
            color: white
        }

        .copy-right {
            padding-top: 16px;
        }
    </style>
</head>

<body>
    <header class="header">
        <center>
            <h1 class="site-title">{{ siteInfo()->site_name }}</h1>
        </center>
    </header>
    @yield('mail_body')
    <footer class="footer">
        <center>
            <p class="copy-right"> Copyrights © 2022 {{ siteInfo()->site_name }}</p>
        </center>
    </footer>
    <script
        src="{{ asset('/public/assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
</body>

</html>
