<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('superadmin.layouts.title-meta')
    @include('superadmin.layouts.head')
</head>

@section('body')

    <body>
    @show

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('superadmin.layouts.topbar')
        @include('superadmin.layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('superadmin.layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('superadmin.layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('superadmin.layouts.vendor-scripts')
</body>

</html>
