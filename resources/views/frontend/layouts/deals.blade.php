 @php
     $deals = activeDeals();
 @endphp
 <!-- banner-bottom -->
 <div class="banner-bottom">
     <!-- container -->
     <div class="container">
         <div class="banner-bottom-info">
             <h3>Top Deals</h3>
         </div>
         <div class="banner-bottom-grids row">
             @foreach ($deals as $deal)
                 <div class="col-md-4 banner-bottom-grid mb-20">
                     <div class="banner-bottom-middle">
                         <a href="{{ route('frontend.contact.us', ['message' => $deal->title]) }}">
                             <img src="{{ asset('public/') }}/{{ $deal->banner }}"" alt="" />
                             <div class="destinations-grid-info tours">
                                 <h5>{{ $deal->title }}</h5>
                                 <p>{{ $deal->description }}</p>
                                 <p class="b-period">Book Period: {{ date('d-M-Y', strtotime($deal->start_date)) }} -
                                     {{ date('d-M-Y', strtotime($deal->end_date)) }}</p>
                             </div>
                         </a>
                     </div>
                 </div>
             @endforeach
             <div class="clearfix"> </div>
         </div>
     </div>
     <!-- //container -->
 </div>
 <!-- //banner-bottom -->
