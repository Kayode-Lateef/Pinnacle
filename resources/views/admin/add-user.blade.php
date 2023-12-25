@extends('admin.layouts.master')
@section('title')
@lang('translation.Add_User')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') User Management @endslot
@slot('title') Add User @endslot
@endcomponent


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="mt-5 mt-lg-4">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Add User</h5>

                            <form>
                                <div class="row mb-4">
                                    <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="horizontal-Fullname-input" placeholder="Enter your full name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="horizontal-email-input" placeholder="Enter your email address">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="horizontal-Phone-input" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="horizontal-Phone-input" placeholder="Enter your phone number">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Profile Image</label>
                                    <div class="col-sm-9">
                                        <input name="file" type="file">
                                    </div>
                                </div>


                                <div class="row justify-content-end">
                                    <div class="col-sm-9">


                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Add</button>
                                            <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection
