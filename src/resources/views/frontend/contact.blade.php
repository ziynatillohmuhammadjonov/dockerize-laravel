@extends('layouts.frontend')

@section('content')

    @include('frontend.sections.breadCrumb')
    <!-- Start Contact us
		============================================= -->
    <div class="contact-area de-padding">
        <div class="container">
            <div class="contact-wpr">
                <div class="row g-5">
                    <div class="col-xl-4">
                        <div class="contact-sdebar">
                            <div class="contact-up-title">
                                <h2 class="heading-1">
                                    Get in Touch
                                </h2>
                                <p class="mb-0">
                                    Lorem ipsum is simply free text available dolor sit amet, consectetur notted adipisicing.
                                </p>
                            </div>
                            <div class="addr-home">
                                <div class="addr-box">
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-google-map"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>Location</h5>
                                            <p class="mb-0">
                                                22 Baker Street, London, United <br> Kingdom, W1U 3BW
                                            </p>
                                        </div>
                                    </div>
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-phone"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>Make a Call</h5>
                                            <p class="mb-0">
                                                +1-940-394-2948<br>
                                                +1-389-385-3807
                                            </p>
                                        </div>
                                    </div>
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-email"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>Our Email</h5>
                                            <p class="mb-0">
                                                info@mdjonymia649.com<br>
                                                support@logtra.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-home pl-30">
                            <form action="assets/mail/contact.php" method="post" class="contact-form contact-cnt">
                                <div class="contact-form-title mb-30">
                                    <h2 class="heading-1">
                                        Send us a message
                                    </h2>
                                    <p class="mb-0">
                                        Integer at lorem eget diam facilisis lacinia ac id massage
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" id="name" name="name" placeholder="Your Full Name*">
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control input-style-2" id="email" name="email" placeholder="Your Email Address*">
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" id="phone" name="phone" placeholder="Phone Number">
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="col-md-12">
                                            <textarea class="form-control input-style-2" id="comment" name="comments" placeholder="Your Message..."></textarea>
                                            <!-- Alert Message -->
                                            <div class="alert-notification">
                                                <div id="message" class="alert-msg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-btn d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to the <span>Terms &amp; Conditions</span>
                                        </label>
                                    </div>
                                    <div class="contact-sub-btn">
                                        <button type="submit" name="submit" id="submit" class="btn-submit">
                                            Send Message
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact us -->

    <!-- Start Google Map
		============================================= -->
    <div class="g-map-area">
        <div class="g-map--wrapper text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.133068555471!2d91.08454181482016!3d23.99107768447128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754051b50ebac3f%3A0x735c1cc426d8ebb!2sNatai%20Bodtoli%20Bazar%2C%20Natai%2C%2C%20Brahmanbaria!5e0!3m2!1sen!2sbd!4v1594548160557!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <!-- End Google Map -->
@endsection
