<div class="move-text">
    <div class="marquee">
        Register your hotel with us free of cost.<a href="{{ route('frontend.signup') }}">Here</a> |
        Login your hotel with us free of cost.<a href="{{ route('frontend.signup') }}">Here</a>
    </div>
    <script type="text/javascript" src="{{ asset('public/assets/frontend/js/jquery.marquee.min.js') }}"></script>
    <script>
        $('.marquee').marquee({
            pauseOnHover: true
        });
    </script>
</div>
