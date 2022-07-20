@php
$site_info = siteInfo();
@endphp
<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('page_title')
        | {{ $site_info->site_name }}
    </title>
    <link rel="shortcut icon" href="{{ asset('/public') }}/{{ $site_info->favicon }}">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Custom Theme files -->
    <link href="{{ asset('public/assets/frontend/css/bootstrap.css') }}" type="text/css" rel="stylesheet"
        media="all">
    <link href="{{ asset('public/assets/frontend/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/flexslider.css') }}" type="text/css"
        media="screen" />
    <link type="text/css" rel="stylesheet" href="{{ asset('public/assets/frontend/css/JFFormStyle-1.css') }}" />
    <!-- js -->
    <script src="{{ asset('public/assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/modernizr.custom.js') }}"></script>
    <!-- //js -->
    <!-- fonts -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!-- //fonts -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
    <!--pop-up-->
    <script src="{{ asset('public/assets/frontend/js/menu_jquery.js') }}"></script>
    <!--//pop-up-->
    @yield('custom_css')
</head>

<body>
    @include('frontend.layouts.header')
    @yield('main_section')
    @include('frontend.layouts.footer')
    <script defer src="{{ asset('public/assets/frontend/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/frontend/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/frontend/js/script.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script type="text/javascript">
        $(function() {
            SyntaxHighlighter.all();
        });
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    @yield('custom_script')
</body>

</html>
