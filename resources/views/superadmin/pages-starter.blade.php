@extends('layouts.master')
@section('title')
@lang('translation.Starter_Page')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Utility @endslot
@slot('title') Starter Page @endslot
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
