@extends('superadmin.layouts.master')
@section('title')
@lang('translation.Edit_User')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') User Management @endslot
@slot('title') Edit User @endslot
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

                    <div class="col-lg-6">
                        <div class="mt-5 mt-lg-4">

                            <form action="{{ route('siteadmin.updateUser', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row mb-4">
                                    <label for="fullname" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" id="fullname" required placeholder="Enter full name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" id="email" required placeholder="Enter email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="role" class="col-sm-3 col-form-label">User Role</label>
                                    <div class="col-sm-9">
                                        <select name="role" id="role" class="form-select">
                                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Update User</button>
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

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
