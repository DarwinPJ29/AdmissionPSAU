

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
                    <div class="text-uppercase mt-3 text-center fw-bold fs-3">
                        please wait for the reviewing of your submitted requirements
                    </div>
                </div>
                <div class="my-5 gap-2 d-flex justify-content-end">
                    <div class="btn btn-secondary" wire:click=""><i class="fa-solid fa-angles-left me-2"></i>Back</div>
                    <div class="btn btn-warning" wire:click="">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
                </div>
            </div>
        </div>
    </div>
@endsection
