@extends('superadmin.layouts.master')
@section('title')
@lang('translation.Learning_Outcome')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Subject @endslot
@slot('title') Learning Outcome @endslot
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

                <a href="{{ route('siteadmin.learning_outcomes.create') }}" class="mb-2 btn btn-success waves-effect waves-light btn-sm"><i class="mdi mdi-plus"></i>Add Learning Outcomes</a>

                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead class="table-light">

                                <tr>
                                    <th>S/No</th>
                                    <th>Subject Name</th>
                                    <th>Learning Outcomes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($learning_outcomes as $key => $learning_outcome)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $learning_outcome->subject->name ?? 'N/A'}}</td>
                                    <td>{{ strip_tags($learning_outcome->description) }}</td>
                                    <td>
                                        <a href="{{ route('siteadmin.learning_outcomes.edit', $learning_outcome->id) }}" class="mb-2 btn btn-outline-info waves-effect waves-light btn-sm"><i class="mdi mdi-pencil"></i></a>

                                        <!-- Delete Button/Form -->
                                        <form action="{{ route('siteadmin.learning_outcomes.destroy', $learning_outcome->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger waves-effect waves-light btn-sm" onclick="return confirm('Are you sure you want to delete this Learning Outcome ?');"><i class="mdi mdi-delete"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div> <!-- end col -->
    </div>
    <!-- end row -->



@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
