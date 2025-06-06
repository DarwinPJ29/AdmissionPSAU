@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <div class="my-5  rounded">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center pb-5 bg-secondary-subtle fs-3">
                        <div class="text-center">
                            <i class="fa-solid fa-box-open text-warning size "></i>
                        </div>
                        <div class="text-center mt-3">
                            Your Exam result was
                        </div>
                        <div class="text-center text-semibold text-warning">
                            {{ $result->score }} <span class="text-dark"> out of</span> {{ $result->total }}
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/side2.avif') }}" alt="" class="img-fluid "
                                style="max-width: 80%">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="">
                            <i class="fa-solid fa-arrows-spin rotate text-center p-4 text-warning fs-3"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-center text-success fw-semibold"> Please wait 10-15
                            days for the evaluation of your application</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
