@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <div class="my-5">
                {{-- @if () --}}
                {{-- passed --}}

                <div class="row border rounded shadow">
                    <div class="col-md-6 d-flex flex-column justify-content-center pb-5 bg-secondary-subtle fs-3">
                        <div class="text-center mt-4">
                            <i class="fa-regular fa-face-smile-beam size text-warning"></i>
                        </div>
                        <div class="text-center mt-3">
                           Greate job! you are passed
                        </div>

                    </div>
                    <div class="col-md-6 d-md-block d-none justify-content-center">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('images/aside3.jpg') }}" alt="" class="img-fluid" style="max-width: 80%">
                        </div>
                    </div>

                </div>
                <div class="justify-content-end d-flex my-3">
                    <div class="btn btn-warning shadow"> <i class="fa-solid fa-print"></i> Print form</div>
                </div>
                {{-- @else     --}}
                {{-- not passed --}}
                <div class="row  border rounded shadow">
                    <div class="col-md-6 d-flex flex-column justify-content-center pb-5 bg-secondary-subtle fs-3">
                        <div class="text-center mt-4">
                            <i class="fa-regular fa-face-frown-open size text-warning"></i>
                        </div>
                        <div class="text-center mt-3">
                           Sorry please try another Program / Course
                        </div>

                    </div>
                    <div class="col-md-6 d-md-block d-none justify-content-center">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('images/sad.webp') }}" alt="" class="img-fluid" style="max-width: 80%">
                        </div>
                    </div>

                </div>

                {{-- @endif --}}
            </div>

<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click=''><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click=''>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
</div>
</div>
@endsection
