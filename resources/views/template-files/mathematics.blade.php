@extends('layouts.master')
@section('title')
@lang('translation.Mathematics')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Manage Subject @endslot
@slot('title') Mathematics @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>
</div>

@endsection
