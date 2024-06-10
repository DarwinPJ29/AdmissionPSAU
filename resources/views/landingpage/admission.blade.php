@extends('layout.layout')
@section('page-title', 'Admission')
@section('content')

    <div class="container-fluid ">
        <div class="container rounded mt-3 border border-warning mb-5">
            <div class="p-1 mt-2">
                <div class="accordion shadow-sm" id="instructionParent">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-uppercase fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#instruction" aria-expanded="false"
                                aria-controls="instruction">
                                Instructions:
                            </button>
                        </h2>
                        <div id="instruction" class="accordion-collapse collapse" data-bs-parent="#instructionParent">
                            <div class="accordion-body">
                                <div class="row g-3">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>Enter a valid email address in order to receive notifications about your
                                                application for admission</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>An email will be sent to you once you submit your application</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>Confirm your application by following the instructions presented in the
                                                email</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>Enter a valid email address in order to receive notifications about your
                                                application for admission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container bg-secondary-subtle mt-3 pb-5 rounded shadow">
                <div class="pt-2 mx auto text-center">
                    <span class="fs-5">Apply Now</span>
                </div>
                <form action="{{ route('ApplyNow') }}" method="post">
                    @csrf
                    <div class="row g-2 mt-3 mb-2">
                        <div class="col-sm-12 col-md-4">
                            <label for="firstname">First Name<span class="text-danger">*</span></label>
                            <input type="text" name="firstname" id="firstname" class="form-control shadow"
                                placeholder="Enter First Name:" value="{{ old('firstname') }}"> @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label for="middlename">Middle Name</label>
                            <input type="text" name="middlename" id="middlename" class="form-control shadow"
                                placeholder="Enter Middle Name:" value="{{ old('middlename') }}"> @error('middlename')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label for="lastname">Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="lastname" id="lastname" class="form-control shadow"
                                placeholder="Enter Last Name:" value="{{ old('lastname') }}"> @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-1">
                            <label for="prefix">Prefix</label>
                            <input type="text" name="prefix" id="prefix" class="form-control shadow"
                                placeholder="Prefix:" value="{{ old('prefix') }}">
                            @error('prefix')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-1">
                            <label for="suffix">Suffix</label>
                            <input type="text" name="suffix" id="suffix" class="form-control shadow"
                                placeholder="Suffix:" value="{{ old('suffix') }}">
                            @error('suffix')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <label for="validationCustomUsername" class="form-label">Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="fa-solid fa-mobile-retro"></i> +63 </span>
                                <input type="text" class="form-control" id="number" name="number"
                                    placeholder="Ex. 9678329782" value="{{ old('number') }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email">Email Address<span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control shadow">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <hr class="border border-1 border-dark opacity-75">
                    <div class="d-flex justify-content-center gap-1">
                        <div class="btn btn-secondary shadow"></i>Cancel</div>
                        <button type="submit">submit</button>
                        </a>
                    </div>
                </form>
            </div>

            <div class="p-1 pt-5 mb-3">
                <div class="accordion shadow-sm" id="noteParent">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-uppercase fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#note" aria-expanded="false"
                                aria-controls="note">
                                Important Note:
                            </button>
                        </h2>
                        <div id="note" class="accordion-collapse collapse" data-bs-parent="#noteParent">
                            <div class="accordion-body">
                                <div class="row g-3">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>* is required fields</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>fields cannot be edited once the Registration is submitted</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>Only confirmed and completed applications will be submmited to our
                                                admission department for proccessing</span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex  flex-column justify-content-center">
                                                <i class="fa-regular fa-circle-dot"></i>
                                            </div>
                                            <span>You can read our Privacy Notice <a href=""><u>here</u></a></a>
                                            </span>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
