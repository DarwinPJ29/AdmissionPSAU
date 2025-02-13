@extends('layout.layout')
@section('page-title', 'Admission')
@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-none" id="newModalBtn" data-bs-toggle="modal" data-bs-target="#newModal">
    </button>
    <!-- Modal -->

    {{-- ETO UNG MODAL PARA SA DATA PRIVACY --}}
    <div class="modal fade" id="newModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Kindly Read Thoroughly.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="text-justify ps-3">
                        When you fill-out through this online application form, the data you provide will be used solely to
                        process your application for admission to Pampanga State Agricultural University (PSAU), in
                        accordance with our data privacy policy. This includes verifying your information, assessing your
                        eligibility, and communicating with you about your application status. We will only collect the
                        information necessary for this purpose and will protect your data according to all applicable laws
                        and regulations. Your data will be treated confidentially and securely. We will not share your
                        information with third parties without your consent, except where required by law. By submitting
                        this application, you acknowledge and agree to these terms. For more details on our data privacy
                        policy,
                    </label>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('index') }}" class="btn btn-secondary">Close</a>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Agree</button>
                </div>
            </div>
        </div>
    </div>
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
                        <div class="col-sm-12 col-md-1">
                            <label for="prefix">Prefix</label>
                            <input type="text" name="prefix" id="prefix" class="form-control shadow"
                                placeholder="Prefix:" value="{{ old('prefix') }}">
                            @error('prefix')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="firstname">First Name<span class="text-danger">*</span></label>
                            <input type="text" name="firstname" id="firstname" class="form-control shadow"
                                placeholder="Enter First Name:" value="{{ old('firstname') }}" required>
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label for="middlename">Middle Name</label>
                            <input type="text" name="middlename" id="middlename" class="form-control shadow"
                                placeholder="Enter Middle Name:" value="{{ old('middlename') }}">
                            @error('middlename')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label for="lastname">Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="lastname" id="lastname" class="form-control shadow"
                                placeholder="Enter Last Name:" value="{{ old('lastname') }}" required> @error('lastname')
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
                        <div class="col-md-6">
                            <label for="validationCustomUsername" class="form-label">Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="fa-solid fa-mobile-retro me-1"></i> +63 </span>
                                <input type="text" class="form-control" id="number" name="number"
                                    placeholder="Ex. 9678329782" value="{{ old('number') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address<span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend">
                                    <i class="fa-regular fa-envelope text-warning"></i> </span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="sample@gmail.com" value="{{ old('email') }}" required>
                            </div>
                        </div>

                    </div>

                    <hr class="border border-1 border-dark opacity-75">
                    <div class="d-flex justify-content-center gap-1">
                        <a href="{{ route('index') }}" class="na-link">
                            <div class="btn btn-secondary shadow"></i>Cancel</div>
                        </a>
                        <button type="submit" class="btn btn-warning shadow">Submit</button>
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
