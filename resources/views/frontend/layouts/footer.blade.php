@php
$siteInfo = siteInfo();
@endphp
<div class="footer">
    <!-- container -->
    <div class="container">
        <div class="footer-bottom-top-grids">
            <div class="col-md-3 footer-grid">
                <h3><a href="{{ route('home') }}">{{ $siteInfo->site_name }}</a></h3>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faqs.html">Contact us</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Important Links</h4>
                <ul>
                    <li><a href="index.html">Flight Schedule</a></li>
                    <li><a href="flights-hotels.html">City Airline Routes</a></li>
                    <li><a href="holidays.html">Holidays Packages</a></li>
                    <li><a href="weekend.html">Weekend Getaways</a></li>

                </ul>
            </div>

            <div class="col-md-3 footer-grid">
                <h4>Need Help ?</h4>
                <p data-v-87798bcc="" class="text-small-regular">
                    We are Always here for you! Knock us
                    on Messenger anytime or Call our Hotline (10AM - 10PM).
                </p>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Follow Us</h4>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="facebook twitter"> </a></li>
                        <li><a href="#" class="facebook chrome"> </a></li>
                        <li><a href="#" class="facebook dribbble"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="copyright">
                <p>Copyrights © 2022 {{ $siteInfo->site_name }}</p>
            </div>
        </div>
    </div>
</div>
