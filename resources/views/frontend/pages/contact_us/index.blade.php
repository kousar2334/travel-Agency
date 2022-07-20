@extends('frontend.layouts.master')
@section('page_title')
    Contact us
@stop
@section('main_section')
    <div class="banner-bottom">
        <!-- container -->
        <div class="container">
            <div class="about-info">
                <h2>Contact Us</h2>
            </div>
            <div class="faqs-top-grids">
                <div class="contact-grids">
                    <div class="col-md-7 contact-para">
                        <h5>Contact Form</h5>
                        <form method="POST" action="{{ route('frontend.contact.us.store') }}">
                            @csrf
                            <div class="grid-contact">
                                <div class="col-md-6 contact-grid">
                                    <p>First Name</p>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 contact-grid">
                                    <p>Last Name</p>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="grid-contact">
                                <div class="col-md-6 contact-grid">
                                    <p>Email</p>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"
                                        placeholder="Email" required>
                                </div>
                                <div class="col-md-6 contact-grid">
                                    <p>Phone</p>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"
                                        placeholder="Phone" required>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p class="your-para">Message</p>
                            <textarea cols="77" name="message" rows="6" value="{{ old('message') }}" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value = '';}">Message</textarea>
                            <div class="send">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 contact-map">
                        <h5>Loaction</h5>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.15093169657!2d90.34928583260914!3d23.78062065336316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1658331002341!5m2!1sen!2sbd"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
@stop
