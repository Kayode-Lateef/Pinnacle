@extends('admin.layouts.master')
@section('title')
@lang('translation.Add_FAQs')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Add FAQs @endslot
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

                            <form action="{{ route('admin.faq.store') }}" method="POST">
                                @csrf

                                <div class="row mb-4">
                                    <label for="question" class="col-sm-3 col-form-label">Question</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="question" name="question" class="form-control @error('question') is-invalid @enderror" placeholder="FAQ Question" required>
                                        @error('question')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="answer" class="col-sm-3 col-form-label">Answer</label>
                                    <div class="col-sm-9">
                                        <textarea name="answer" id="answer" class="form-control @error('answer') is-invalid @enderror" placeholder="FAQ Answer" required></textarea>
                                        @error('answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Add FAQ</button>
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
