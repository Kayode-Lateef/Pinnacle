@extends('admin.layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-md-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="mt-2">
                   <h2>Welcome back 👋 {{ Str::ucfirst(Auth::user()->name) }}</h2>
                </div>
                <div>
                    <p class="text-muted mb-0">We are glad to have you back!</p>
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
