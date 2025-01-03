@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')

            <div class="mt-5 d-flex flex-column justify-content-center">
                <div class=" border rounded shadow mx-auto px-5 pb-2 w-75 bg-secondary-subtle">
                    <div class="text-center">
                        <i class="fa-solid fa-hourglass-start fs-1 rotate text-warning text-center p-4"></i>
                    </div>
                    <div class=" mt-3 text-center fw-bold fs-3">
                        Please wait until {{ $review_date }} for the reviewing of your application.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
