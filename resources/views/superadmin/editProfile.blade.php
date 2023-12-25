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


@if(session('success'))
<div class="d-flex justify-content-between alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button> -->
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="d-flex justify-content-between alert alert-danger">
    {{ session('error') }}
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button> -->
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">


                    <div class="col-md-8">
                        <div class="card card-body">
                            <h4 class="card-title mb-4">General Information</h4>


                            <form class="custom-validation" action="{{ route('siteadmin.updateProfile') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input id="fullName" type="text" name="name" value="{{ $user->name }}" class="form-control" required placeholder="Full Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userName" class="form-label">Username</label>
                                            <input id="userName" type="text" name="username" value="{{ $user->username }}" class="form-control" required placeholder="Username" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <div>
                                                <input id="email" type="email" name="email" value="{{ $user->email }}" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phoneNumber" class="form-label">Phone Number</label>
                                            <div>
                                                <input id="phoneNumber" data-parsley-type="number" type="text" name="phone" value="{{ $user->phone }}" class="form-control" required placeholder="Enter Phone number" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 dropzone">
                                    <label for="image" class="form-label">Profile Image</label>
                                    <div class="fallback">
                                        <input id="image" name="photo" type="file">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                        </div>

                                        <h4>Drop files here or click to upload.</h4>
                                    </div>

                                    <div class="mt-4 mb-4 mt-md-4">
                                        <img id="showImage" class="img-thumbnail rounded-circle avatar-xl" src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : URL::asset('/assets/images/users/avatar-3.jpg') }}" alt="Profile image" data-holder-rendered="true">
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input id="address" type="text" name="address" value="{{ $user->address }}" class="form-control" required placeholder="Enter Address" />
                                </div>

                                <div class="mb-3">
                                    <label for="bio" class="form-label">Bio</label>
                                    <div>
                                        <textarea id="bio" required class="form-control" name="bio" rows="5">{{ $user->bio }}</textarea>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Update
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


                            <form class="custom-validation" action="{{ route('siteadmin.updateProfile') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="https://facebook.com/profile" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">LinkedIn</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="https://linkedin.com/profile" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="https://twitter.com/profile" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control" required placeholder="https://instagram.com/profile" />
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

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Change Password</h4>


                                <form class="custom-validation" action="{{ route('siteadmin.password.update') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="old_password" class="form-label">Old Password</label>
                                        <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" required placeholder="old password" />
                                        @error('old_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <div>
                                            <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" required placeholder="new password" />
                                            @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mt-2">
                                        <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                            <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror" required data-parsley-equalto="#new_password" placeholder="confirm new password" />
                                            @error('new_password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Update Password
                                            </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->


                </div>
                <!-- end row -->

            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/pages/bootstrap-toasts.init.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader;
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    })
</script>
@endsection
