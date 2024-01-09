@include('frontend.layouts.head')
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

        <!-- Start Header Top
    ============================================= -->
    @include('frontend.layouts.header')

    <!-- End Header -->


    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(../source/assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog standard full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('blog-single') }}"><img src="{{ asset('source/assets/img/1500x700.png') }}" alt="Thumb"></a>
                                    <div class="date">
                                        <h4><span>24</span> Nov, 2018</h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="{{ route('blog-single') }}">Objection happiness something</a>
                                    </h3>
                                    <p>
                                        Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                    </p>
                                    <a href="{{ route('blog-single') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="{{ route('blog-single') }}"><i class="fas fa-user"></i> Author</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blog-single') }}"><i class="fas fa-comments"></i> 23 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('blog-single') }}"><img src="{{ asset('source/assets/img/1500x700.png') }}" alt="Thumb"></a>
                                    <div class="date">
                                        <h4><span>12</span> Sep, 2018</h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="{{ route('blog-single') }}">So delightful up dissimilar by unreserved</a>
                                    </h3>
                                    <p>
                                        Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                    </p>
                                    <a href="{{ route('blog-single') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="{{ route('blog-single') }}"><i class="fas fa-user"></i> Author</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blog-single') }}"><i class="fas fa-comments"></i> 23 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('source/assets/img/1500x700.png') }}" alt="Thumb"></a>
                                    <div class="date">
                                        <h4><span>29</span> Dec, 2018</h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="#">Improve ashamed married expense bed her comfort</a>
                                    </h3>
                                    <p>
                                        Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                    </p>
                                    <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Author</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->


    <!-- Start Footer
    ============================================= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('frontend.layouts.scripts')
