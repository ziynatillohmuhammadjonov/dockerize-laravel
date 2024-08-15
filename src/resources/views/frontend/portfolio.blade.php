@extends('layouts.frontend')

@section('content')
    @include('frontend.sections.breadCrumb')


    <!-- Start Gallery
		============================================= -->
    <div class="gallery-area bg de-padding pos-rel">
        <img src="assets/img/shape/gallery-shape.png" alt="no image" class="gallery-shape">
        <div class="container-fluid">
            <div class="gallery-wpr">
                <div class="swiper port-sldr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-single">
                                <div class="gallery-pic">
                                    <img src="assets/img/pictures/gallery-1.jpg" alt="no image">
                                    <div class="gallery-desc">
                                        <h3 class="heading-3">Ocean Cargo Roundtable</h3>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available There are many variationsThere are
                                        </p>
                                        <a href="project-single.html" class="gallery-btn">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            See Projects
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-single">
                                <div class="gallery-pic">
                                    <img src="assets/img/pictures/gallery-2.jpg" alt="no image">
                                    <div class="gallery-desc">
                                        <h3 class="heading-3">Ocean Cargo Roundtable</h3>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available There are many variationsThere are
                                        </p>
                                        <a href="project-single.html" class="gallery-btn">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            See Projects
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-single">
                                <div class="gallery-pic">
                                    <img src="assets/img/pictures/gallery-3.jpg" alt="no image">
                                    <div class="gallery-desc">
                                        <h3 class="heading-3">Ocean Cargo Roundtable</h3>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available There are many variationsThere are
                                        </p>
                                        <a href="project-single.html" class="gallery-btn">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            See Projects
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-single">
                                <div class="gallery-pic">
                                    <img src="assets/img/pictures/gallery-4.jpg" alt="no image">
                                    <div class="gallery-desc">
                                        <h3 class="heading-3">Ocean Cargo Roundtable</h3>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available
                                        </p>
                                        <a href="project-single.html" class="gallery-btn">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            See Projects
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
@endsection
