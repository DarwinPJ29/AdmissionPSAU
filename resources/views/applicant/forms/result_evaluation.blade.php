@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <div class="my-5">
                @if ($result->passed)
                    {{-- passed --}}
                    <div class="row border rounded shadow">
                        <div class="col-md-6 d-flex flex-column justify-content-center pb-5 bg-secondary-subtle fs-3">
                            <div class="text-center mt-4">
                                <i class="fa-regular fa-face-smile-beam size text-warning"></i>
                            </div>
                            <div class="text-center mt-3">
                                Greate job! you are passed in : <br>
                                @foreach ($labelCourse as $course)
                                    <li> {{ $course }}</li>
                                @endforeach
                            </div>

                        </div>
                        <div class="col-md-6 d-md-block d-none justify-content-center">
                            <div class="d-flex justify-content-center ">
                                <img src="{{ asset('images/aside3.jpg') }}" alt="" class="img-fluid"
                                    style="max-width: 80%">
                            </div>
                        </div>

                    </div>
                    <div class="justify-content-end d-flex my-3">
                        <div class="btn btn-warning shadow"> <i class="fa-solid fa-print"></i> Print form</div>
                    </div>
                @else
                    {{-- not passed --}}
                    <div class="row  border rounded shadow">
                        <div class="col-md-6 d-flex flex-column justify-content-center pb-5 bg-secondary-subtle fs-3">
                            <div class="text-center mt-4">
                                <i class="fa-regular fa-face-frown-open size text-warning"></i>
                            </div>
                            <div class="text-center mt-3">
                                Sorry, your application has been denied!
                            </div>

                        </div>
                        <div class="col-md-6 d-md-block d-none justify-content-center">
                            <div class="d-flex justify-content-center ">
                                <img src="{{ asset('images/sad.webp') }}" alt="" class="img-fluid"
                                    style="max-width: 80%">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
