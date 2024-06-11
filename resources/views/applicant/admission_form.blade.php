@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <livewire:admission-form />
        </div>
    </div>
@endsection
