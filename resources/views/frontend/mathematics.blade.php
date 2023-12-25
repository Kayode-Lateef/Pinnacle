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
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(../source/assets/img/subject1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Subjects Details</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Subjects</a></li>
                    <li class="active">Mathematics</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Course Details
    ============================================= -->
<div class="course-details-area default-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="course-details-info">
                    <!-- Star Top Info -->
                    <div class="top-info">
                        <!-- Title-->
                        <div class="title">
                            <h2>Mathematics</h2>
                        </div>
                        <!-- End Title-->

                        <!-- Thumbnail -->
                        <div class="thumb">
                            <img src="{{ asset('source/assets/img/math.webp') }}" alt="Thumb">
                        </div>
                        <!-- End Thumbnail -->

                        <!-- Course Meta -->
                        <div class="course-meta">
                            <div class="item author">
                                <div class="thumb">
                                    <a href="#"><img alt="Thumb" src="{{ asset('source/assets/img/100x100.png') }}"></a>
                                </div>
                                <div class="desc">
                                    <h4>Tutor</h4>

                                    <span>
                                        @foreach ($curriculum as $curriculumItem)
                                        {{ $curriculumItem->tutor_name }}
                                        @endforeach
                                    </span>

                                </div>
                            </div>
                            <div class="item category">
                                <h4>Subject</h4>
                                <span>Mathematics</span>
                            </div>
                        </div>
                        <!-- End Course Meta -->
                    </div>
                    <!-- End Top Info -->

                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                    Curriculum
                                </a>
                            </li>


                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <h4>Subjects Description</h4>
                                    @foreach ($curriculum as $curriculumItem)
                                    <p>{{ strip_tags($curriculumItem->description) }}</p>
                                    @endforeach

                                    <h4>Learning Outcomes</h4>
                                    <ul>
                                        @foreach ($curriculum as $curriculumItem)
                                            @foreach(json_decode($curriculumItem->learning_outcomes, true) as $key => $value)
                                                <li><i class="fas fa-check-double"></i> {{ $value }}</li>
                                            @endforeach
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="info title">

                                    @foreach ($curriculum as $curriculumItem)
                                        <p>{{ strip_tags($curriculumItem->description) }}</p>
                                    @endforeach

                                    <h4>Topics Covered</h4>
                                    <!-- Start Course List -->
                                    <div class="course-list-items acd-items acd-arrow">
                                        <div class="panel-group symb" id="accordion">
                                            @foreach ($curriculum as $curriculumItem)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac-{{ $curriculumItem->id }}">
                                                           {{ $curriculumItem->unit_name }}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="ac-{{ $curriculumItem->id }}" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                                <div class=" item title">
                                                                    <h5>{{ $curriculumItem->topic_name }}</h5>
                                                                </div>
                                                            </li>
                                                            <!-- <li>

                                                                <div class="item title">
                                                                    <h5>Probability</h5>
                                                                </div>

                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- End Course List -->


                                    <!-- Start Course List -->
                                    <!-- <div class="course-list-items acd-items acd-arrow">
                                        <div class="panel-group symb" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                                            Algebra
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="ac2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                                    <div class=" item title">
                                                                        <h5>Factorisation</h5>
                                                                    </div>
                                                            </li>
                                                            <li>

                                                                <div class="item title">
                                                                    <h5>Expansion</h5>
                                                                </div>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- End Course List -->
                                </div>
                            </div>
                            <!-- End Single Tab -->




                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
            <!-- Start Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <aside>


                        <!-- Sidebar Item -->
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>Subjects</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="mathematics">Mathematics</a>
                                    </li>
                                    <li>
                                        <a href="english">English</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->

                        <!-- Sidebar Item -->

                        <!-- End Sidebar Item -->

                    </aside>
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</div>
<!-- End Course Details -->
<!-- Start Footer
    ============================================= -->
@include('frontend.layouts.footer')
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
@include('frontend.layouts.scripts')
