@extends('superadmin.layouts.master')
@section('title')
@lang('translation.Subject')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Edit Subject @endslot
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

                        <form action="{{ route('siteadmin.topics.update', $topic->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-sm-3 col-form-label">Select Subject</label>
                                        <select name="subject_id" class="form-select" required>
                                            <option value="" disabled>Select Subject</option>
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}" {{ $topic->subject_id == $subject->id ? 'selected' : '' }}>
                                                    {{ $subject->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('subject_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="topic_name" class="col-sm-3 col-form-label">Topic Name</label>
                                        <input type="text" id="topic_name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Topic Name" value="{{ $topic->name }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            <!-- <div class="mb-3">
                                <label for="description" class="col-sm-3 col-form-label">Topic Description</label>
                                <div id="classic-editor"></div>
                                <textarea name="description" id="description" style="display:none;">{{ $topic->description }}</textarea>
                            </div> -->

                            <div class="row">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Update Topic</button>
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

            // Set the editor content to the value of the 'description' field
            editor.setData(`{{ strip_tags($subject->description) }}`);

            // Listen for data changes in the editor and update the 'description' field
            editor.model.document.on('change:data', () => {
                document.querySelector('textarea[name="description"]').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>



@endsection
