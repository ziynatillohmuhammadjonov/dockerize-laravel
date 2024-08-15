@extends('layouts.frontend')

@section('content')
    @include('frontend.sections.breadCrumb')
    <!-- Start Service
		============================================= -->
    <div class="service-area-2 bg-2 de-padding pos-rel">
        <img src="assets/img/shape/service-shape.png" class="service-shape-2" alt="no image">
        <div class="container">
            <div class="service-wpr-2 grid-3">
                <div class="service-box-2">
                    <div class="service-pic-2">
                        <img src="assets/img/pictures/service-1.jpg" alt="no image">
                        <div class="service-desc-2">
                            <div class="service-icon-title">
                                <div class="service-icon-2">
                                    <i>
                                        <img src="assets/img/icon/cargo-ship.png" alt="no image">
                                    </i>
                                </div>
                                <div class="service-title-2">
                                    <h5 class="heading-5 mb-0">
                                        Sea Freight Transportation
                                    </h5>
                                </div>
                            </div>
                            <div class="service-text">
                                <p>
                                    Lorem Ipsum available, but the majority have suffered sed
                                </p>
                                <a href="service-single.html" class="service-btn-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-box-2">
                    <div class="service-pic-2">
                        <img src="assets/img/pictures/service-2.jpg" alt="no image">
                        <div class="service-desc-2">
                            <div class="service-icon-title">
                                <div class="service-icon-2">
                                    <i>
                                        <img src="assets/img/icon/Icon-plane.png" alt="no image">
                                    </i>
                                </div>
                                <div class="service-title-2">
                                    <h5 class="heading-5 mb-0">
                                        Air Freight Transportation
                                    </h5>
                                </div>
                            </div>
                            <div class="service-text">
                                <p>
                                    Lorem Ipsum available, but the majority have suffered sed
                                </p>
                                <a href="service-single.html" class="service-btn-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-box-2">
                    <div class="service-pic-2">
                        <img src="assets/img/pictures/service-3.jpg" alt="no image">
                        <div class="service-desc-2">
                            <div class="service-icon-title">
                                <div class="service-icon-2">
                                    <i>
                                        <img src="assets/img/icon/Icon-home.png" alt="no image">
                                    </i>
                                </div>
                                <div class="service-title-2">
                                    <h5 class="heading-5 mb-0">
                                        Warehousing Transportation
                                    </h5>
                                </div>
                            </div>
                            <div class="service-text">
                                <p>
                                    Lorem Ipsum available, but the majority have suffered sed
                                </p>
                                <a href="service-single.html" class="service-btn-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service -->
    @include('frontend.sections.homeStep')
    <!-- Start Counter
		============================================= -->
    <div class="counter-area de-padding pos-rel hero-bg" style="background-image: url(assets/img/bg/bg-counter.jpg)">
        <div class="container">
            <div class="counter-wpr">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="counter-title">
								<span class="hero-sub-title mb-20">
									<span class="hero-line"></span>
									Number Talks
								</span>
                            <h2 class="heading-2 mb-30">
                                Providing assistance since 1959
                            </h2>
                            <a href="about.html" class="service-btn-2">Get Our Story</a>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="counter-1 grid-3">
                            <div class="fun-fact">
                                <div class="counter-icon">
                                    <i><img src="assets/img/icon/counter-1.png" alt="no image"></i>
                                </div>
                                <div class="counter">
                                    <div class="timer" data-to="98" data-speed="2000"></div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Business Hike</span>
                            </div>
                            <div class="fun-fact">
                                <div class="counter-icon">
                                    <i><img src="assets/img/icon/counter-2.png" alt="no image"></i>
                                </div>
                                <div class="counter">
                                    <div class="timer" data-to="788" data-speed="2000"></div>
                                    <div class="operator">K</div>
                                </div>
                                <span class="medium">Sales of our Products</span>
                            </div>
                            <div class="fun-fact">
                                <div class="counter-icon">
                                    <i><img src="assets/img/icon/counter-3.png" alt="no image"></i>
                                </div>
                                <div class="counter">
                                    <div class="timer" data-to="150" data-speed="2000"></div>
                                    <div class="operator">M</div>
                                </div>
                                <span class="medium">Happy clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter -->
    @include('frontend.sections.homeReviews')
@endsection
