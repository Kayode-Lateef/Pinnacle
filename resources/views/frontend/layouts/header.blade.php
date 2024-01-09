<div class="top-bar-area address-two-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <span><i class="fas fa-map"></i> Address</span>Your Address Here
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open"></i> Email</span>pinnacle@gmail.com
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i> Contact</span>+123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <a  class="" href="{{ route('book-assessment') }}">
                        <i class="fas fa-book"></i> Book Assessment
                    </a>
                </div>
            </div>
        </div>
    </div>

     <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('source/assets/img/logo-2.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                        <li><a class="active" href="{{ route('home') }}">Home</a></li>
                        <li><a class="" href="{{ route('about') }}">About</a></li>
                        <li><a class="" href="{{ route('subjects') }}">Subjects</a></li>
                        <li><a class="" href="{{ route('testimonial') }}">Testimonials</a></li>
                        <li><a class="" href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('book-assessment') }}">Book Assessment</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>



        </nav>
        <!-- End Navigation -->

    </header>
