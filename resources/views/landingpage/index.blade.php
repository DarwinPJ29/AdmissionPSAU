@extends('layout.layout')
@section('page-title', 'Home')
@section('content')

<div class="container-fluid ">
    <div class="container d-flex flex-column justify-content-center mt">
        <span class="text-center">Welcome to</span>
        <span class="text-center fs-1">
            <span class="fw-bold">P</span>ampanga
            <span class="fw-bold">S</span>tate
            <span class="fw-bold">A</span>gricultural
            <span class="fw-bold">U</span>niversity
        </span>
        <div class="rounded main-bg mx-auto w-50 py-2 justify-content-center ">
            <div class="fs-semibold text-center">
                Application for Admission for
            </div>
            <div class="fs-semibold text-center">
                2023-2024(1st Semester)
            </div>
            <div class="fs-semibold text-center">
                is now open!
            </div>
        </div>
        <div class="mt-3  mx-auto">
            <a href="{{ route('admission') }}">
                <div class="btn btn-success text-dark rounded">Apply now!</div>
            </a>
        </div>
    </div>
</div>
@endsection
