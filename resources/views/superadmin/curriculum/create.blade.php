@extends('superadmin.layouts.master')
@section('title')
@lang('translation.Curriculum')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Add Curriculum @endslot
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

                    <div class="col-lg-12">
                        <div class="mt-5 mt-lg-4">

                            <form class="repeater" action="{{ route('siteadmin.curriculum.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="col-sm-3 col-form-label">Select Subject</label>
                                            <select name="subject" class="form-select" required>
                                                <option value="" disabled selected>Select Subject</option>
                                                <option value="mathematics">Mathematics</option>
                                                <option value="english">English</option>
                                                @error('tutor_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tutor_name" class="col-sm-3 col-form-label">Tutor Name</label>
                                            <input type="text" id="tutor_name" name="tutor_name" class="form-control @error('tutor_name') is-invalid @enderror" placeholder="Tutor Name" required>
                                            @error('tutor_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="unit_name" class="col-sm-3 col-form-label">Unit Name</label>
                                            <input type="text" id="unit_name" name="unit_name" class="form-control @error('unit_name') is-invalid @enderror" placeholder="Unit Name" required>
                                            @error('unit_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="topic_name" class="col-sm-3 col-form-label">Topic Name</label>
                                            <input type="text" id="topic_name" name="topic_name" class="form-control @error('topic_name') is-invalid @enderror" placeholder="Topic Name" required>
                                            @error('topic_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>


                                <div class="mb-3">
                                    <label for="description" class="col-sm-3 col-form-label">Subject Description</label>
                                    <div id="classic-editor"></div>
                                    <textarea name="description" id="description" style="display:none;"></textarea>

                                </div>

                                <div class="mb-3">
                                    <label for="learning_outcomes" class="col-sm-3 col-form-label">Learning Outcomes</label>
                                    <div data-repeater-list="learning_outcomes">
                                        <div data-repeater-item class="mb-3 row">
                                            <div class="col-md-10 col-8">
                                                <input type="text" name="learning_outcomes" class="inner form-control @error('learning_outcomes') is-invalid @enderror" placeholder="Learning Outcomes" />
                                                    @error('learning_outcomes')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                            <div class="col-md-2 col-4 align-self-center">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-primary" value="Delete" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input data-repeater-create type="button" class="mt-2 btn btn-success inner" value="Add Learning Outcomes" />
                                </div>

                                <div class="mb-3">
                                    <label for="tutor_image" class="col-sm-3 col-form-label">Tutor Image</label>
                                    <input type="file" class="form-control @error('tutor_image') is-invalid @enderror" name="tutor_image">
                                    @error('tutor_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="row">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Add Curriculum</button>

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



<!-- Plugins js -->
<!-- <script src="{{ URL::asset('/assets/libs/jquery/jquery.min.js') }}"></script> -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/ckeditor/ckeditor.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-editor.init.js') }}"></script>


<script>
    ClassicEditor
        .create(document.querySelector('#classic-editor'))
        .then(editor => {
            window.editor = editor;
            editor.model.document.on('change:data', () => {
                document.querySelector('textarea[name="description"]').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>



@endsection
