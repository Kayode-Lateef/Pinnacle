@extends('layouts.master')
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
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="mt-4 mb-4 mt-md-4">
                                <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="{{URL::asset('assets/images/users/avatar-3.jpg')}}" data-holder-rendered="true">
                            </div>
                            <h3 class="card-title">About</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="mt-3">
                                <i class="mdi mdi-account-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Full Name:</span>
                                <span>Nikky Pinnacle</span>
                            </div>


                            <div class="mt-3">
                                <i class="mdi mdi-email-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Email:</span>
                                <span>Pinnacle@gmail.com</span>
                            </div>


                            <div class="mt-3">
                                <i class="mdi mdi-phone-outline mdi-24px"></i>
                                <span class="fw-medium mx-2">Phone Number:</span>
                                <span>123456789</span>
                            </div>

                        </div><!-- end card -->
                    </div>
                    <div class="col-md-8">
                        <div class="card card-body">
                            <h4 class="card-title mb-4">General Information</h4>


                            <form class="custom-validation" action="#">

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" required placeholder="Full Name" />
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div>
                                        <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <div>
                                        <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter Phone number" />
                                    </div>
                                </div>

                                <div class="mb-3 dropzone">
                                <label class="form-label">Profile Image</label>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                        </div>

                                        <h4>Drop files here or click to upload.</h4>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>


                        </div><!-- end card -->

                        <div class="card card-body">
                            <h4 class="card-title mb-4">Social</h4>


                            <form class="custom-validation" action="#">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">LinkedIn</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div>
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>


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
