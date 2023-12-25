@extends('superadmin.layouts.master')
@section('title')
@lang('translation.Curriculum')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Curriculum @endslot
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
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <a href="{{ route('siteadmin.curriculum.create') }}" class="mb-2 btn btn-success waves-effect waves-light btn-sm"><i class="mdi mdi-plus"></i>Add Curriculum</a>



                <table id="datatable" class="table table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>S/No</th>
                            <th>Tutor Name</th>
                            <th>Unit Name</th>
                            <th>Topic</th>
                            <th>Learning Outcomes</th>
                            <th>Tutor Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($curriculum as $key => $curriculum)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $curriculum->tutor_name }}</td>
                            <td>{{ $curriculum->unit_name }}</td>
                            <td>{{ $curriculum->topic_name }}</td>
                            <td>
                                @foreach(json_decode($curriculum->learning_outcomes, true) as $key => $value)
                                    {{ $value }} <br>
                                @endforeach
                            </td>

                            <td>
                                <img class="img-thumbnail rounded-circle avatar-sm" src="{{ Storage::url($curriculum->tutor_image) }}" alt="Tutor Image" width="50" height="50">
                            </td>
                            <td>
                                <a href="{{ route('siteadmin.curriculum.edit', $curriculum->id) }}" class="mb-2 btn btn-outline-info waves-effect waves-light btn-sm"><i class="mdi mdi-pencil"></i></a>

                                <!-- Delete Button/Form -->
                                <form action="{{ route('siteadmin.curriculum.delete', $curriculum->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger waves-effect waves-light btn-sm" onclick="return confirm('Are you sure you want to delete this Curriculum?');"><i class="mdi mdi-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
