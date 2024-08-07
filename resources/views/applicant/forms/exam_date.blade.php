@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')

            <div class="my-5 border rounded">
                <div class="row text-uppercase">
                    <div class="col-md-6 d-flex flex-column justify-content-center pb-5 ">
                        <div class="text-center mt-5">
                            Your Exam date was on
                        </div>
                        <div class="text-center text-warning fw-bold">
                            {{ $sched->date }}<br>
                            {{ $sched->hour }}<br>
                            <span class="text-muted text-center fw-bold">@</span><br>
                            {{ $sched->room }}
                        </div>
                        <div class="text-center">
                            Be ready and Goodluck to your examinations!
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none">
                        <div class="d-flex flex-column justify-content-center">
                            <img src="{{ asset('images/side.jpg') }}" alt="" class="img-fluid "
                                style="max-width: 80%">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
