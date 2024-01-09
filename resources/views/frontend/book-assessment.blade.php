@include('frontend.layouts.head')
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    @include('frontend.layouts.header')

    <!-- End Header -->

 <!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="#" id="register-form" class="white-popup-block">

                        <div class="col-md-12 login-custom">
                            <h4>Book your child's Skills Assessment </h4>
                            <p>
                                Please fill in your details below and your nearest centre will be in touch.
                            </p>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Your Name*" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone Number*" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject*" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Grade*" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

     <!-- Start Footer
    ============================================= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('frontend.layouts.scripts')
