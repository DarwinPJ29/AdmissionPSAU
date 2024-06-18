@extends('layout.applicant_layout')
@section('content')
    <div class="container">
        @include('applicant.forms.header')

        <div class="text-uppercase mt-4">List of Requirements</div>
        <div class="border rounded border-dark m-0 p-0">
            <ul class="mt-3">
                <li class="p-2">
                    <div class="d-flex">
                        <div class="col-7">Requirements Name</div>
                        <div class="col-5">
                            <input type="file" name="" id="" class="shadow form-controls" required>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="my-3 gap-2 d-flex justify-content-end">
            <div class="btn btn-warning" wire:click=''>Submit</div>
        </div>
    </div>
@endsection
