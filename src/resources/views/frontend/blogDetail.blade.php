@extends('layouts.frontend')

@section('content')
    @include('frontend.sections.breadCrumb')


    <!-- Start Blog Single
		============================================= -->
    <div class="blog-single-area bg de-padding">
        <div class="container">
            <div class="blog-single-wpr">
                <div class="row ps g-5">
                    <div class="col-xl-8">
                        <div class="theme-single blog-single">
                            <div class="theme-pic">
                                <img src="assets/img/pictures/blog-single.jpg" class="big-pic" alt="thumb">
                            </div>
                            <div class="theme-info p-50">
                                <div class="theme-desc">
                                    <div class="theme-meta">
                                        <div class="theme-meta-left">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    20 March, 2023
                                                </li>
                                                <li>
                                                    <i class="fas fa-comments"></i>
                                                    10 comments
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h2 class="heading-2">
                                        Cheesecake sesame snaps pudding candy caramels jelly
                                    </h2>
                                    <p class="mb-30">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.
                                    </p>
                                    <blockquote class="blockqoute mb-30">
                                        Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while. little guilty because they
                                        <span>Jhon Smith</span>
                                    </blockquote>
                                    <p class="mb-30">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.
                                    </p>
                                    <div class="img-grid mb-30">
                                        <div class="imm-1">
                                            <img src="assets/img/pictures/blog-single-2.jpg" alt="no image">
                                        </div>
                                        <div class="imm-2">
                                            <img src="assets/img/pictures/blog-single-3.jpg" alt="no image">
                                        </div>
                                    </div>
                                    <p class="mb-30">
                                        Cupcake cake chupa chups lollipop toffee oat cake cotton candy apple pie. Cake tiramisu lemon drops chocolate bar cheesecake oat cake donut. Bear claw candy powder macaroon jelly beans.
                                    </p>
                                    <div class="content-tags">
                                        <h5 class="mb-0">Tags</h5>
                                        <ul>
                                            <li><a href="#" class="tags-link">Theme</a></li>
                                            <li><a href="#" class="tags-link">Business</a></li>
                                            <li><a href="#" class="tags-link">consult</a></li>
                                            <li><a href="#" class="tags-link">Organic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-comments-section blg-single">
                            <h4 class="single-content-title">Comments</h4>
                            <div class="single-commentor">
                                <ul>
                                    <li>
                                        <div class="single-commentor-user">
                                            <img src="assets/img/pictures/user-1.png" alt="thumb">
                                            <div class="single-commentor-user-bio">
                                                <div class="single-commentor-user-bio-head">
                                                    <h5> Andrew R. Huskey </h5>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
                                                </p>
                                                <a href="#" class="share d-block">
                                                    Reply<i class="icofont-reply px-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-commentor-user de-bpd">
                                            <img src="assets/img/pictures/user-3.png" alt="thumb">
                                            <div class="single-commentor-user-bio">
                                                <div class="single-commentor-user-bio-head">
                                                    <h5>George A. Liu</h5>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam
                                                </p>
                                                <a href="#" class="share d-block">
                                                    Reply<i class="icofont-reply px-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-commentor-user">
                                            <img src="assets/img/pictures/user-2.png" alt="thumb">
                                            <div class="single-commentor-user-bio">
                                                <div class="single-commentor-user-bio-head">
                                                    <h5> Martha M. Muth </h5>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
                                                </p>
                                                <a href="#" class="share d-block">
                                                    Reply<i class="icofont-reply px-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-comments-section-form mt-30">
                                <h4 class="single-content-title">Leave a Reply</h4>
                                <form>
                                    <div class="row g-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control input-style-2" placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control input-style-2" rows="5" placeholder="Your Comment*"></textarea>
                                            </div>
                                            <button type="submit" class="btn-1 btn-md mt-30">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
    </div>
    <!-- End Blog Single -->

@endsection
