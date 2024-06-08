@extends('layout.layout')
@section('page-title', 'Admission')
@section('content')

    <div class="container-fluid ">
        <div class="container rounded mt-3 border border-warning mb-5">
            <div class="p-1">
                <div class="accordion" id="instructionParent">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button text-uppercase fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#instruction" aria-expanded="true" aria-controls="collapseOne">
                                Instructions:
                            </button>
                        </h2>
                        <div id="instruction" class="accordion-collapse collapse show p-2"
                            data-bs-parent="#instructionParent">
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
            <div class="container bg-secondary-subtle pt-3 pb-5 rounded shadow">
                <div class="mt-1 mx auto text-center">
                    <span class="fs-5">Apply Now</span>
                </div>
                <form action="" method="post">
                    <div class="row g-2 mt-3 mb-2">
                        <div class="col-sm-12 col-md-4">
                            <label for="application_name">First Name<span class="text-danger">*</span></label>
                            <input type="text" name="application_name" id="application_name" class="form-control shadow">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="application_middlename">Middle Name</label>
                            <input type="text" name="application_middlename" id="application_middlename" class="form-control shadow">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="application_lastname">Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="application_lastname" id="application_lastname" class="form-control shadow">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="application_email">Email Address<span class="text-danger">*</span></label>
                        <input type="email" name="application_email" id="application_email" class="form-control shadow">
                    </div>

                    <div class="row g-2 mb-5">
                        <div class="col-6">
                            <label for="">1st Course Choice<span class="text-danger">*</span></label>
                            <select class="form-select" name="choice1" id="choice1">
                                <option selected>Select</option>
                                <option value="1">Undergraduate</option>
                                <option value="2">Graduate</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="">2nd Course Choice<span class="text-danger">*</span></label>
                            <select class="form-select" name="choice2" id="choice2">
                                <option selected>Select</option>
                                <option value="1">Undergraduate</option>
                                <option value="2">Graduate</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    </div>
                    <hr class="border border-1 border-dark opacity-75">
                    <div class="d-flex justify-content-center gap-1">
                        <div class="btn btn-secondary shadow"></i>Cancel</div>
                        <div class="btn btn-warning shadow">Submit</i></div>
                    </div>
                </form>
            </div>


            <div class="p-1 mt-3">
                <div class="accordion" id="noteParent">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button text-uppercase fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#note" aria-expanded="true" aria-controls="collapseOne">
                                Instructions:
                            </button>
                        </h2>
                        <div id="note" class="accordion-collapse collapse show p-2" data-bs-parent="#noteParent">
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
