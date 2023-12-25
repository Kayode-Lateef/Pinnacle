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
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(source/assets/img/testimonials.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Testimonial</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Testimonial</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

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
                    <!-- Single Item -->
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
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="{{ asset('source/assets/img/profile-pic.webp') }}" alt="testimonial">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Astron Brun</h4>
                                <span>Science Student</span>
                            </div>
                        </div> -->
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="{{ asset('source/assets/img/profile-pic.webp') }}" alt="testimonial">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Paol Druva</h4>
                                <span>Development Student</span>
                            </div>
                        </div> -->
                    <!-- Single Item -->
                    <!-- Single Item -->
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
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Start Footer
    ============================================= -->
@include('frontend.layouts.footer')
<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
@include('frontend.layouts.scripts')
