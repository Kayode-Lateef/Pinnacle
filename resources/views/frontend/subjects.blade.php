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
                                @if($mathematics && $mathematics->cover_image)
                                    <img src="{{ asset('storage/'.$mathematics->cover_image) }}" alt="Mathematics Cover Image">
                                @endif
                                    <!-- <img src="{{ asset('source/assets/img/math.webp') }}" alt="Thumb"> -->
                                </a>

                            </div>
                            <div class="info">

                                <h4><a href="{{ route('mathematics') }}">
                                    {{ $mathematics ? $mathematics->name : 'Subject not available' }}
                                </a></h4>

                                <p>
                                    {{ strip_tags($mathematics ? $mathematics->description : 'Description not available') }}
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
                                @if($english && $english->cover_image)
                                    <img src="{{ asset('storage/'.$english->cover_image) }}" alt="English Cover Image">
                                @endif

                            </a>

                            </div>
                            <div class="info">

                                <h4><a href="{{ route('english') }}">
                                    {{ $english ? $english->name : 'Subject not available' }}
                                </a></h4>

                                <p>
                                    {{ strip_tags($english ? $english->description : 'Description not available') }}
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
