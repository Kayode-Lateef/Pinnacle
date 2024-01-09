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
                    <h1>Privacy and Policy</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Privacy and Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Coming Soon
    ============================================= -->
    <div class="error-page-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center content">
                    <h1>Coming Soon</h1>
                    <h2>This page is coming soon!</h2>
                    <p>
                        The page you are looking is not available. Try going to Home Page by using the button below.
                    </p>
                    <a class="btn btn-dark effect btn-md" href="{{ route('home') }}">Back To Home</a>
                    <a class="btn btn-dark border btn-md" href="{{ route('contact') }}">Contact Us</a>
                    <ul>
                        <li class="facebook">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="pinterest">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Coming Soon-->

       <!-- Start Footer
    ============================================= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('frontend.layouts.scripts')
