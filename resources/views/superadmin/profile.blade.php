@extends('superadmin.layouts.master')
@section('title')
@lang('translation.Profile')
@endsection

@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Profile @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card card-body">
                            <div class="mt-4 mb-4 mt-md-4">
                                <!-- <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="{{URL::asset('assets/images/users/avatar-3.jpg')}}" data-holder-rendered="true"> -->
                                <img class="img-thumbnail rounded-circle avatar-xl" src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : URL::asset('/assets/images/users/avatar-3.jpg') }}" alt="Profile image" data-holder-rendered="true">
                            </div>
                            <h3 class="card-title">About</h3>
                            <p class="card-text">
                                {{ $user->bio }}
                            </p>
                            <div class="mt-3">
                                <i class="mdi mdi-account-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Full Name:</span>
                                <span>{{ $user->name }}</span>
                            </div>

                            <div class="mt-3">
                                <i class="mdi mdi-account-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Username:</span>
                                <span>{{ $user->username }}</span>
                            </div>

                            <div class="mt-3">
                                <i class="mdi mdi-email-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Email:</span>
                                <span>{{ $user->email }}</span>
                            </div>

                            <div class="mt-3">
                                <i class="mdi mdi-phone-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Phone Number:</span>
                                <span>{{ $user->phone }}</span>
                            </div>

                            <div class="mt-3">
                                <i class="mdi mdi-google-maps mdi-24px"></i>
                                <span class="fw-medium mx-2">Address:</span>
                                <span>{{ $user->address }}</span>
                            </div>

                        </div><!-- end card -->

                    </div>

                    <div class="col-md-5">
                        <div class="card card-body">
                            <h4 class="card-title mb-4">Social</h4>
                            <div class="mt-3">
                                <i class="mdi mdi-facebook mdi-24px"></i>
                                <span></span>
                            </div>
                            <div class="mt-3">
                                <i class="mdi mdi-twitter mdi-24px"></i>
                                <span></span>
                            </div>
                            <div class="mt-3">
                                <i class="mdi mdi-instagram mdi-24px"></i>
                                <span></span>
                            </div>

                        </div><!-- end card -->

                    </div>

                </div>
                <!-- end row -->

            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- Plugins js -->
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
@endsection
