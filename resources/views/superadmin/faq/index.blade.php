@extends('superadmin.layouts.master')
@section('title')
@lang('translation.FAQs')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') FAQS @endslot
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


                <div class="row mt-5">
                    <div class="col-xl-3 col-sm-5 mx-auto">
                        <div>
                            <img src="{{URL::asset('assets/images/faqs-img.png')}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div id="faqs-accordion" class="custom-accordion mt-5 mt-xl-0">
                            @foreach ($faqs as $faq)
                            <div class="card border shadow-none">
                                <a href="#faqs-gen-ques-collapse-{{ $faq->id }}" class="text-dark" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="true" aria-controls="faqs-gen-ques-collapse">
                                    <div class="bg-light p-3">

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle font-size-22">
                                                        <i class="uil uil-question-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">{{ $faq->question }}</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div id="faqs-gen-ques-collapse-{{ $faq->id }}" class="collapse show" data-bs-parent="#faqs-accordion">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>


                                                    <div class="d-flex align-items-start mt-4">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary font-size-22">
                                                                    <i class="uil-comment-message"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <p class="text-muted">{{ $faq->answer }}</p>
                                                        </div>
                                                        <a href="{{ route('siteadmin.faq.edit', $faq->id) }}" class="me-2 btn btn-outline-info waves-effect waves-light btn-sm"><i class="mdi mdi-pencil"></i></a>

                                                        <!-- Delete Button/Form -->
                                                        <form action="{{ route('siteadmin.faq.delete', $faq->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger waves-effect waves-light btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?');"><i class="mdi mdi-delete"></i></button>
                                                        </form>

                                                    </div>



                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection
