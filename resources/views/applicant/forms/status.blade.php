@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <div class="my-5 border rounded bg-secondary-subtle w-75 mx-auto">
                <div class="row p-3 ">
                    <div class="text-center mt-4">
                        <i class="fa-solid fa-diagram-project size text-warning "></i>
                    </div>
                    <div class="text-center mt-3 fs-5">
                        Your status is
                     </div>
                     <div class="text-center fw-bold text-uppercase fs-3 text-success">
                        Approve
                     </div>
                </div>
            </div>

<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click=''><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click=''>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
</div>
</div>
@endsection
