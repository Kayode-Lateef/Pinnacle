@extends('layouts.master')
@section('title')
@lang('translation.Testimonials')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pinnacle @endslot
@slot('title') Testimonials @endslot
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
