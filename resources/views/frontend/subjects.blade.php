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
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(source/assets/img/subject1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Subjects</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Subjects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses default-padding bottom-less without-carousel">
        <div class="container">
            <div class="row">
                <div class="popular-courses-items bottom-price">
                    <!-- Single Item -->
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('mathematics') }}">
                                    <img src="{{ asset('source/assets/img/math.webp') }}" alt="Thumb">
                                </a>

                            </div>
                            <div class="info">

                                <h4><a href="{{ route('mathematics') }}">Mathematics</a></h4>

                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('english') }}">
                                    <img src="{{ asset('source/assets/img/english.jpg') }}" alt="Thumb">
                                </a>

                            </div>
                            <div class="info">

                                <h4><a href="{{ route('english') }}">English</a></h4>

                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">

                            <div class="book-assesment">
                                <a  class="" href="{{ route('book-assessment') }}">
                                    <i class="fas fa-book"></i> Book Assessment
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Footer
    ============================================= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
============================================= -->
@include('frontend.layouts.scripts')
