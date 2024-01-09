@extends('superadmin.layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="mt-2">
                   <h2>Welcome back 👋 {{ Str::ucfirst(Auth::user()->username) }}</h2>
                </div>
                <div>
                    <p class="text-muted mb-0">We are glad to have you back!</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->


</div> <!-- end row-->


<div class="row">


    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup"> {{ $totalsubjects }}</span></h4>
                    <p class="text-muted mb-0">Subjects</p>
                </div>
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $totalUsers }}</span></h4>
                    <p class="text-muted mb-0">Users</p>
                </div>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup"> {{ $totaltopics }}</span></h4>
                    <p class="text-muted mb-0">Topics</p>
                </div>
            </div>
        </div>
    </div> <!-- end col-->


</div> <!-- end row-->








@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
