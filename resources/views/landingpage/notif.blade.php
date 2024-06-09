@extends('layout.layout')
@section('page-title', 'Check Email')
@section('content')

<div class="container-fluid ">
    <div class="d-flex flex-column justify-content-center">

        <div class="card mx-auto p-3 px-5 mt-5 shadow">
            <div class="d-flex justify-content-center"><i class="fa-solid fa-envelope fs-1 text-warning shadow"></i></div>
            <div class="fw-semibold text-center">Your Application was submitted <br> check your Email Address</div>

            <div class="mt-5 text-end">
                <a href="{{ route('index') }}">
                    <div class="btn btn-warning text-dark btn-sm"><i class="fa-solid fa-angles-left me-2"></i>Back</div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
