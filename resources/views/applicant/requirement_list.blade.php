@extends('layout.applicant_layout')
@section('content')
    <div class="container">
        @include('applicant.forms.header')

        <div class="text-uppercase mt-5">List of Requirements</div>
        <div class="border rounded border-dark m-0 p-0 overflow-y-scroll scrolled">
            <ul class="list-style-none m-0 p-2">
                @foreach ($requirements as $req)
                    <li class="border shadow rounded p-2 m-0 mb-1">

                        <div class="d-flex justify-content-between">
                            <div class="d-flex gap-1">
                                <div class="d-flex  flex-column justify-content-center">
                                    <i class="fa-regular fa-circle-dot text-success"></i>
                                </div>
                                <span class="d-flex  flex-column justify-content-center">{{ $req->title }}</span>
                            </div>

                            <div class="">
                                @if ($req->required == 1)
                                    <span>Required</span>
                                @else
                                <span>Not-Required</span>
                                @endif
                            </div>
                            <div class="">
                                <div class="btn btn-success btn-sm {{ $req->status ? 'd-none' : 'd-block' }}"
                                    data-bs-target="#upload{{ $req->id }}" data-bs-toggle="modal">Upload
                                </div>
                                <div class="btn btn-warning btn-sm {{ $req->status ? 'd-block' : 'd-none' }}"
                                    data-bs-target="#edit{{ $req->id }}" data-bs-toggle="modal">Edit</div>
                            </div>
                        </div>
                    </li>
                    @include('modals.requirements_image')
                @endforeach
            </ul>
        </div>
        <div class="my-3 gap-2 d-flex justify-content-end">
            <a href="{{ route('applicant.submit') }}" class="btn btn-warning {{ !$canSubmit ? 'disabled' : '' }}"
                aria-disabled="{{ !$canSubmit ? 'true' : 'false' }}">Submit</a>
        </div>
    </div>
@endsection
