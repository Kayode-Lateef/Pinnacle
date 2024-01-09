@extends('admin.layouts.master')
@section('title')
@lang('translation.Edit_Testimonial')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Edit Testimonials @endslot
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
                            <!-- <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Add Testimonial</h5> -->

                            <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-4">
                                    <label for="authorname" class="col-sm-3 col-form-label">Author Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="author" value="{{ $testimonial->author }}" class="form-control @error('author') is-invalid @enderror" placeholder="Author Name" required>
                                        @error('author')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="author" class="col-sm-3 col-form-label">Author Position</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="position" value="{{ $testimonial->position }}" class="form-control @error('position') is-invalid @enderror" placeholder="Author Position">
                                        @error('position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="testimonial" class="col-sm-3 col-form-label">Testimonial</label>
                                    <div class="col-sm-9">
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Testimonial Content" min="50" required>{{ $testimonial->content }}</textarea>
                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="image" class="col-sm-3 col-form-label">Author Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control @error('author_image') is-invalid @enderror" name="author_image">
                                        @error('author_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Update Testimonial</button>
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

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection
