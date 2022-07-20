@php
$campains = activeCampains();
@endphp

<div class="popular-grids">
    <!-- container -->
    <div class="container">
        <!-- slider -->
        <div class="slider">
            <div class="arrival-grids">
                <ul id="flexiselDemo1">
                    @foreach ($campains as $key => $campain)
                        <li>
                            <a href="products.html"><img src="{{ asset('public/') }}/{{ $campain->banner }}"
                                    alt="{{ $campain->title }}" class="campain-banner" />
                            </a>
                        </li>
                    @endforeach
                </ul>
                <script type="text/javascript">
                    $(window).load(function() {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });
                    });
                </script>
                <script type="text/javascript" src="{{ asset('public/assets/frontend/js/jquery.flexisel.js') }}"></script>
            </div>
        </div>
        <!-- //slider -->
    </div>
    <!-- //container -->
</div>
