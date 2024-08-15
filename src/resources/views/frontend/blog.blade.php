@extends('layouts.frontend')

@section('content')

@include('frontend.sections.breadCrumb')
<!-- Start Blog
		============================================= -->
<div class="blog-area de-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8">
                <div class="blog-page-content pr-30">
                    <div class="blog-page-wpr">
                        <div class="blog-box blog-page-shadow">
                            <div class="blog-pic">
                                <img src="assets/img/pictures/blog-page-1.jpg" alt="no image">
                            </div>
                            <div class="blog-desc">
                                <a href="single.html">
                                    <h2 class="heading-2">Your supply chain focus</h2>
                                </a>
                                <p class="blog-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                </p>
                                <div class="blog-meta mb-30">
                                    <div class="blog-admin">
                                        <i class="ti-user"></i>
                                        <span>20 March, 2023</span>
                                    </div>
                                    <div class="blog-like-com">
                                        <div class="blog-like">
                                            <i class="ti-heart"></i>
                                            <span>101</span>
                                        </div>
                                        <div class="blog-com">
                                            <i class="ti-comment"></i>
                                            <span>288</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-btnb">
                                    <a href="single.html" class="btn-1 btn-md">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-box blog-page-shadow">
                            <div class="blog-pic">
                                <img src="assets/img/pictures/blog-page-2.jpg" alt="no image">
                            </div>
                            <div class="blog-desc">
                                <a href="single.html">
                                    <h2 class="heading-2">Three logistics e-commerce</h2>
                                </a>
                                <p class="blog-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                </p>
                                <div class="blog-meta mb-30">
                                    <div class="blog-admin">
                                        <i class="ti-user"></i>
                                        <span>21 March, 2023</span>
                                    </div>
                                    <div class="blog-like-com">
                                        <div class="blog-like">
                                            <i class="ti-heart"></i>
                                            <span>83</span>
                                        </div>
                                        <div class="blog-com">
                                            <i class="ti-comment"></i>
                                            <span>287</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-btnb">
                                    <a href="single.html" class="btn-1 btn-md">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-box blog-page-shadow">
                            <div class="blog-pic">
                                <img src="assets/img/pictures/blog-page-3.jpg" alt="no image">
                            </div>
                            <div class="blog-desc">
                                <a href="single.html">
                                    <h2 class="heading-2">The top logistics trends</h2>
                                </a>
                                <p class="blog-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                </p>
                                <div class="blog-meta mb-30">
                                    <div class="blog-admin">
                                        <i class="ti-user"></i>
                                        <span>20 March, 2023</span>
                                    </div>
                                    <div class="blog-like-com">
                                        <div class="blog-like">
                                            <i class="ti-heart"></i>
                                            <span>101</span>
                                        </div>
                                        <div class="blog-com">
                                            <i class="ti-comment"></i>
                                            <span>288</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-btnb">
                                    <a href="single.html" class="btn-1 btn-md">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <span class="page-value current">1</span>
                        <a class="page-value" href="#">2</a>
                        <a class="next page-value" href="#">
                            <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <aside class="sidebar">
                    <!-- Search-->
                    <div class="widget search">
                        <h5 class="work-title">Search</h5>
                        <form class="search-form">
                            <input type="text" class="input-style-2" placeholder="Search">
                            <button class="btn-sub">
                                <i class="icofont-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- Category -->
                    <div class="widget category">
                        <h5 class="work-title">Category</h5>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>Air Transportation </span>
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Sea Transportation </span>
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Warehouse</span>
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Road Transportation </span>
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Train Transportation </span>
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Recent Post -->
                    <div class="widget recent-post">
                        <h5 class="work-title">Recent Post</h5>
                        <div class="recent-post-single">
                            <div class="recent-post-pic">
                                <img src="assets/img/pictures/recent-post-1.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
										<span>
											<i class="icofont-ui-user"></i>
											12 Feb, 2023
										</span>
                                <a href="single.html">
                                    <h6>
                                        Learning transport is not difficult variety
                                    </h6>
                                </a>
                            </div>
                        </div>
                        <div class="recent-post-single">
                            <div class="recent-post-pic">
                                <img src="assets/img/pictures/recent-post-2.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
										<span>
											<i class="icofont-ui-user"></i>
											05 Jul, 2023
										</span>
                                <a href="single.html">
                                    <h6>
                                        Plane transport to the variety countries
                                    </h6>
                                </a>
                            </div>
                        </div>
                        <div class="recent-post-single">
                            <div class="recent-post-pic">
                                <img src="assets/img/pictures/recent-post-3.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
										<span>
											<i class="icofont-ui-user"></i>
											29 Aug, 2023
										</span>
                                <a href="single.html">
                                    <h6>
                                        Logistics planning from good to great
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Post -->
                    <div class="widget sidebar-tags">
                        <h5 class="work-title">Tags</h5>
                        <div class="tags">
                            <a href="#" class="tags-link">Web Development</a>
                            <a href="#" class="tags-link">wordpress</a>
                            <a href="#" class="tags-link">Mobile Apps</a>
                            <a href="#" class="tags-link">Admon Pannel</a>
                            <a href="#" class="tags-link">HTML Css</a>
                            <a href="#" class="tags-link">Laravels</a>
                        </div>
                    </div>
                    <!-- Recent Subscribe -->
                    <div class="widget subs bg-overlay hero-bg" style="background-image: url(assets/img/pictures/service-sidebar.jpg)">
                        <h5 class="work-title">Newsletter</h5>
                        <p class="subs-title">
                            Give lady of they such they sure it. Me contained explained my education.
                        </p>
                        <div class="subs-sub">
                            <div class="ipp">
                                <input type="text" placeholder="Enter Your Email">
                            </div>
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

@endsection
