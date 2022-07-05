<div class="popular-grids">
    <!-- container -->
    <div class="container">
        {{-- <div class="popular-info">
            <h3>Popular Places</h3>
        </div> --}}
        <!-- slider -->
        <div class="slider">
            <div class="arrival-grids">
                <ul id="flexiselDemo1">
                    <li>
                        <a href="products.html"><img src="{{ asset('public/assets/frontend/images/a3.jpg') }}"
                                alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="products.html"><img src="{{ asset('public/assets/frontend/images/a2.jpg') }}"
                                alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="products.html"><img src="{{ asset('public/assets/frontend/images/a4.jpg') }}"
                                alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="products.html"><img src="{{ asset('public/assets/frontend/images/a1.jpg') }}"
                                alt="" />
                        </a>
                    </li>
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
