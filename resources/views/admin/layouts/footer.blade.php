@php
$siteInfo = siteInfo();
@endphp
<footer class="main-footer">
    <div class="row">
        <div class="col-md-6">
            @if ($siteInfo->logo != null)
                <img src="{{ asset('/public') }}/{{ $siteInfo->logo }}" alt="Logo" class="brand-image">
            @else
                <span class="brand-text"> {{ $siteInfo->site_name }}</span>
            @endif

            <div>
                Copyright © 2022. Source files include multiple proprietary assets
                which have been licensed for use in this software.Do not redistribute.
            </div>


        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        {{-- <div class="col-md-2">
            <ul>
                <li><a href="#">Developed By Kousar Rahman</a></li>
            </ul>
        </div> --}}
    </div>
</footer>
