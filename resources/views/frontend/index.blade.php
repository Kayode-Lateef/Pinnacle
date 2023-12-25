@include('frontend.layouts.head')

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
    ============================================= -->
@include('frontend.layouts.header')


<!-- End Header -->

<!-- Start Banner
    ============================================= -->
<div class="banner-area content-top-heading text-light text-center less-paragraph text-normal">
    <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="box-table bg-fixed shadow dark" style="background-image: url(source/assets/img/AdobeStock_75125099.jpeg);">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="content">
                                        <h3 data-animation="animated slideInDown">Reach you career</h3>
                                        <h1 data-animation="animated slideInUp">We develop unique skills and boost confidence through specialized math and English tutoring.</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="book-assessment">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box-table bg-fixed shadow dark" style="background-image: url(source/assets/img/AdobeStock_215203568.jpeg);">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="content">
                                        <h3 data-animation="animated slideInDown">Book a free assessment for your child, </h3>
                                        <h1 data-animation="animated slideInUp">where you’ll gain valuable insights into their current learning level</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="book-assessment">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box-table bg-fixed shadow dark" style="background-image: url(source/assets/img/AdobeStock_277898781.jpeg);">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="content">
                                        <h3 data-animation="animated slideInDown">The goal of education</h3>
                                        <h1 data-animation="animated slideInUp">Join the bigest community of Pinnacle</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{ route('book-assessment') }}">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!-- End Banner -->

<!-- Start Why Chose Us
    ============================================= -->
<div class="wcs-area default-padding bg-light content-default">
    <div class="container">
        <div class="row">
            <div class="col-md-6 thumb">
                <img src="{{ asset('source/assets/img/subject.jpg') }}" alt="Thumb">
            </div>
            <div class="col-md-6 content">
                <div class="site-heading text-left">
                    <h2>About Us</h2>
                    <p>
                        Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                    </p>

                    <div class="about-btn text-center">
                        <a class="" href="{{ route('about') }}">
                            <i class="fas fa-arrow-right"></i> Read More
                        </a>
                    </div>
                </div>



                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="flaticon-trending"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Mission</a>
                        </h4>
                        <p>
                            Absolute required of reserved in offering no. How sense found our those gay again taken Had mrs outweigh
                        </p>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="flaticon-books"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Vision</a>
                        </h4>
                        <p>
                            Absolute required of reserved in offering no. How sense found our those gay again taken Had mrs outweigh
                        </p>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="flaticon-professor"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Values</a>
                        </h4>
                        <p>
                            Absolute required of reserved in offering no. How sense found our those gay again taken Had mrs outweigh
                        </p>
                    </div>
                </div>
                <!-- item -->

            </div>
        </div>
    </div>
</div>
<!-- End Why Chose Us -->



<!-- Start Testimonials
    ============================================= -->
<div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Testimonials</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="clients-review-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="col-md-5 thumb">
                            @if($testimonial->author_image)
                            <img src="{{ Storage::url($testimonial->author_image) }}" alt="{{ $testimonial->author }}">
                            @endif

                        </div>
                        <div class="col-md-7 info">
                            <p>
                                {{ $testimonial->content }}
                            </p>
                            <h4>{{ $testimonial->author }}</h4>
                            <span>{{ $testimonial->position }}</span>
                        </div>
                    </div>
                    @endforeach

                    <!-- <div class="item">
                        <div class="col-md-5 thumb">
                            <img src="{{ asset('source/assets/img/profile-pic.webp') }}" alt="testimonial">
                        </div>
                        <div class="col-md-7 info">
                            <p>
                                Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                            </p>
                            <h4>Druna Patia</h4>
                            <span>Biology Student</span>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->



<!-- Start Services
    ============================================= -->
<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Services</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="our-features">
                <div class="col-md-6 col-sm-6">
                    <div class="item mariner">
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div class="info">
                            <h4>Mathematics</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="item java">
                        <div class="icon">
                            <!-- <i class="flaticon-book-2"></i> -->
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="info">
                            <h4>English</h4>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- End Services -->


<!-- Start Footer
    ============================================= -->
@include('frontend.layouts.footer')
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
@include('frontend.layouts.scripts')
