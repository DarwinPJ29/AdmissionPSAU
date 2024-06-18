@extends('layout.applicant_layout')
@section('content')
    <div class="container">
        @include('applicant.forms.header')

        <div class="text-uppercase mt-5">List of Requirements</div>
        <div class="border rounded border-dark m-0 p-0">
            <ul class="mt-3">
                <li class="p-2">
                    <div class="d-flex justify-content-between">
                        <div class="">Requirements Name</div>
                        <div class="">
                                <div class="btn btn-success btn-sm" data-bs-target="#upload" data-bs-toggle="modal">Upload</div>
                            <div class="btn btn-warning btn-sm" data-bs-target="#edit" data-bs-toggle="modal">Edit</div>
                        </div>
                    </div>
                </li>
                @include('modals.requirements_image')
            </ul>
        </div>
        <div class="my-3 gap-2 d-flex justify-content-end">
            <div class="btn btn-warning" wire:click=''>Submit</div>
        </div>
    </div>
@endsection
