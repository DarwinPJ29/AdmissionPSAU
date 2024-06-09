@extends('layout.layout')
@section('page-title', 'Admission')
@section('content')

    <div class="container-fluid ">
        <div class="container rounded mt-3 border border-warning mb-5">
            <div class="p-1 mt-2">
                <div class="accordion shadow-sm" id="instructionParent">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-uppercase fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#instruction" aria-expanded="false" aria-controls="instruction">
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
                <form action="" method="post">
                    <div class="row g-2 mt-3 mb-2">
                        <div class="col-sm-12 col-md-4">
                            <label for="application_name">First Name<span class="text-danger">*</span></label>
                            <input type="text" name="application_name" id="application_name" class="form-control shadow"
                            placeholder="Enter First Name:" value="{{ old('application_name') }}"> @error('application_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label for="application_middlename">Middle Name</label>
                            <input type="text" name="application_middlename" id="application_middlename"
                                class="form-control shadow"
                                placeholder="Enter Middle Name:" value="{{ old('application_middlename') }}"> @error('application_middlename')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label for="application_lastname">Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="application_lastname" id="application_lastname"
                                class="form-control shadow"
                                placeholder="Enter Last Name:" value="{{ old('application_lastname') }}"> @error('application_lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-sm-12 col-md-1">
                            <label for="application_prefix">Prefix</label>
                            <input type="text" name="application_prefix" id="application_prefix"
                                class="form-control shadow"
                                placeholder="Prefix:" value="{{ old('application_prefix') }}"> @error('application_prefix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-sm-12 col-md-1">
                            <label for="application_suffix">Suffix</label>
                            <input type="text" name="application_suffix" id="application_suffix"
                                class="form-control shadow"
                                placeholder="Suffix:" value="{{ old('application_suffix') }}"> @error('application_suffix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>


                    <div class="row g-2 mb-2">
                        <div class="col-6">
                            <label for="choice1">1st Course Choice<span class="text-danger">*</span></label>
                            <select class="form-select" name="choice1" id="choice1">
                                <option selected hidden>Select</option>
                                <option value="sample">sample</option>

                            </select>
                        </div>
                        <div class="col-6">
                            <label for="choice2">2nd Course Choice<span class="text-danger">*</span></label>
                            <select class="form-select" name="choice2" id="choice2">
                                <option selected hidden>Select</option>
                                <option value="sample">sample</option>

                            </select>
                        </div>

                    </div>
                    <div class="mb-2">
                        <label for="application_type" class="m-1">Application Type <span class="text-danger">*</span></label>
                        <select name="application_type" id="application_type" class="form-select shadow @error('application_type') is-invalid @enderror"
                            value="{{ old('application_type') }}">
                            <option value="" selected hidden>Select Application Type:</option>
                            <option value="Masteral Level" @selected(old('application_type') == 'Masteral Level')>Masteral Level</option>
                            <option value="Doctoral Level" @selected(old('application_type') == 'Doctoral Level')>Doctoral Level</option>
                            <option value="New Student"@selected(old('application_type') == 'New Student')>New Student</option>
                            <option value="Transferee"@selected(old('application_type') == 'Transferee')>Transferee</option>
                            <option value="Second Courser"@selected(old('application_type') == 'Second Courser')>Second Courser</option>
                        </select>
                        @error('application_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="application_school" class="m-1">School Year/Sem <span class="text-danger">*</span></label>
                        <select name="application_school" id="application_school" class="form-select shadow @error('application_school') is-invalid @enderror"
                            value="{{ old('application_school') }}">
                            <option value="" selected hidden>Select Desired:</option>
                            <option value="2024(1st Sem)" @selected(old('application_school') == '2024(1st Sem)')>2024(1st Sem)</option>
                        </select>
                        @error('application_school')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <label for="application_number">Contact #<span class="text-danger">*</span></label>
                            <input type="number" name="application_number" id="application_number" minlength="11" maxlength="11" min="0" class="form-control shadow">
                        </div>
                        <div class="col-md-7">
                            <label for="application_number">Location<span class="text-danger">*</span></label>
                            <input type="text" name="application_number" id="application_number" class="form-control shadow">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="application_email">Email Address<span class="text-danger">*</span></label>
                        <input type="email" name="application_email" id="application_email" class="form-control shadow">
                    </div>
                    <hr class="border border-1 border-dark opacity-75">
                    <div class="d-flex justify-content-center gap-1">
                        <div class="btn btn-secondary shadow"></i>Cancel</div>
                        <a href="{{ route('notif') }}">
                            <div class="btn btn-warning shadow">Submit</i></div>
                        </a>
                    </div>
                </form>
            </div>

            <div class="p-1 pt-5 mb-3">
                <div class="accordion shadow-sm" id="noteParent">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-uppercase fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#note" aria-expanded="false" aria-controls="note">
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
