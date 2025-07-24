@extends('layout.applicant_layout')
@section('content')
    <div class="container">
        @include('applicant.forms.header')

        @if ($errors->any())
            <div class="alert alert-danger">
                <h5>The file is too large. It should not exceed 2MB.</h5>
            </div>
        @endif
        <div class="mt-3 d-flex justify-content-between">
            <h3 class="text-uppercase">List of Requirements</h3>
            @if ($remarks != null || $remarks != '')
                <div class="alert alert-warning alert-dismissible fade show " role="alert">
                    <div class="text-center">
                        {{ $remarks }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="border rounded border-dark m-0 p-0 overflow-y-scroll scrolled">
            <table class="table table-bordered table-striped m-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Requirement</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requirements as $key => $req)
                        <tr>
                            <td class="align-middle">
                                {{ $key + 1 }}
                            </td>
                            <td class="align-middle text-uppercase">{{ $req->title }}</td>
                            <td class="align-middle">
                                @if ($req->required == 1)
                                    <span class="badge bg-success text-light">Required</span>
                                @else
                                    <span class="badge bg-secondary text-light">Not Required</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <button class="btn btn-success btn-sm {{ $req->status ? 'd-none' : 'd-inline' }}"
                                    data-bs-target="#upload{{ $req->id }}" data-bs-toggle="modal">Upload</button>
                                <button class="btn btn-warning btn-sm {{ $req->status ? 'd-inline' : 'd-none' }}"
                                    data-bs-target="#edit{{ $req->id }}" data-bs-toggle="modal">Update</button>
                            </td>
                        </tr>
                        @include('modals.requirements_image')
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-3 gap-2 d-flex justify-content-end">
            <a href="{{ route('applicant.submit') }}" class="btn btn-warning {{ !$canSubmit ? 'disabled' : '' }}"
                aria-disabled="{{ !$canSubmit ? 'true' : 'false' }}">Submit</a>
        </div>
    </div>
@endsection
