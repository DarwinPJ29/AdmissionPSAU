{{-- filled-up form --}}
<div class="modal fade" id="fillup{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-divledby="staticBackdropdiv" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5" id="staticBackdropdiv">Filled-up form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-div="Close"></button>
            </div>
            <div class="modal-body border shadow overflow-y-auto" style="max-height: 70vh">
                <div class="container">
                    <div class="border-bottom border-dark">Section A:</div>
                    <div class="row my-2">
                        <div class="col-md-1 col-sm-4">
                            <span class="text-center">{{ $user->prefix }}</span>
                            <div class="text text-muted text-center">Prefix</div>
                        </div>
                        <div class="col-md-3 col-sm-8">
                            <span class="text-center">{{ $user->first_name }}</span>
                            <div class="text text-muted text-center">First Name</div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <span class="text-center">{{ $user->middle_name }}</span>
                            <div class="text text-muted text-center">Middle Name</div>
                        </div>
                        <div class="col-md-3 col-sm-8">
                            <span class="text-center">{{ $user->last_name }}</span>
                            <div class="text text-muted text-center">Last Name</div>
                        </div>
                        <div class="col-md-1 col-sm-4">
                            <span class="text-center">{{ $user->suffix }}</span>
                            <div class="text text-muted text-center">Suffix</div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2 col-sm-6">
                            <span class="text-center">{{ $user->gender }}</span>
                            <div class="text text-muted text-center">Sex</div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Age</div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Place of Birth</div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="text text-muted text-center">Date of Birth</div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="text text-muted text-center">Citizenship</div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Religion</div>

                        </div>

                        <div class="col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Civil Status</div>

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2 col-sm-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Region</div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Municipality</div>

                        </div>
                        <div class="col-md-5 col-sm-12">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Barangay</div>

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6 col-sm-7">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Email Address</div>
                        </div>
                        <div class="col-md-6 col-sm-5">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Contact No.</div>
                        </div>
                    </div>
                    <div class="border-bottom border-dark mt-5">Section B:</div>
                    <div class="row my-2">
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">1st Choice</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">2nd Choice</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Preferred Date of Enrolment</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">School Year</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Semester</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Application Type</div>
                        </div>
                    </div>

                    <div class="border-bottom border-dark mt-5 mb-2">Section C:</div>
                    <div class="container overflow-x-scroll mb-3" style="min-width: 550px">
                        <div class="row border p-2 main-bg text-center">
                            <div class="col-2 text-uppercase border-end p-1">School Attended</div>
                            <div class="col-4 text-uppercase border-end p-1">Name</div>
                            <div class="col-4 text-uppercase border-end p-1">Address</div>
                            <div class="col-2 text-uppercase p-1">Inclusive Date</div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-2 border-end p-1">Elementary</div>
                            <div class="col-4 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-4 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-2 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-2 border-end p-1">Senior High</div>
                            <div class="col-4 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-4 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-2 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-2 border-end p-1">Last School Attended</div>
                            <div class="col-4 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-4 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-2 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-sm-6 col-md-6">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Type of SHS Graduated from:</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">Date of Graduation</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">SHS Average Grade:</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">LRN</div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span class="text-center"></span>
                            <div class="text text-muted text-center">First Time to Enter College:</div>
                        </div>
                    </div>

                    <div class="border-bottom border-dark mt-5 mb-2">Section D:</div>
                    <div class="container overflow-x-scroll mb-3" style="min-width: 550px">
                        <div class="row border p-2 main-bg text-center">
                            <div class="col-3 text-uppercase border-end p-1"></div>
                            <div class="col-3 text-uppercase border-end p-1">father</div>
                            <div class="col-3 text-uppercase border-end p-1">mother</div>
                            <div class="col-3 text-uppercase p-1">guardian</div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Full Name</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Date of Birth</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Highest Educational Attainment</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Occupation / Employment</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Company Name / Address</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Monthly Income</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>
                        <div class="row border text-center p-2">
                            <div class="col-3 border-end p-1">Contact No.</div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 border-end p-1">
                                <span class="text-center"></span>
                            </div>
                            <div class="col-3 p-1">
                                <span class="text-center">

                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="mt-2 mb-2">
                        <span>
                            I hereby affirm that all information supplied here is complete and accurate.
                            Withholding or giving false information will make me ineligible for admission
                            or be subjected to dismissal. I agree to abide by the policies, rules and and reulations
                            of Pampanga State Agricultural University,
                        </span>
                    </div>
                    <div class="mx-auto mt-5 mb-5">
                        <div class="text-center fw-bold">ALAWI C. CANLAS, Ed. D.</div>
                        <div class="text-center">Director, Admission and Registration Services</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


{{-- requirement_file --}}
<div class="modal fade" id="requirement_file{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-6 " id="staticBackdropLabel">Uploaded Requirements of {{ $user->name }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow overflow-y-auto" style="max-height: 70vh">
                <div class="row g-2">
                    <div class="col-sm-6">
                        @foreach ($user->requirements as $item)
                            <div class="container">
                                <div class="text-center">
                                    <img src="{{ url('/storage/applicant_requirements/' . $item['file']) }}"
                                        alt="" class="img-fluid uploaded rounded">
                                </div>
                                <div class="text-center">{{ $item['title'] }}</div>
                                <div class="text-center text-muted text">
                                    {{ $item['required'] ? 'Required' : 'Not Required' }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


{{-- schedule --}}
<div class="modal fade" id="schedule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-6 " id="staticBackdropLabel">Exam Schedule for {{ $user->name }} </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="exam_date">Exam Date</label>
                            <input type="date" name="exam_date" id="exam_date" class="form-control shadow">
                        </div>
                        <div class="col-sm-6">
                            <label for="exam_time">Exam Time</label>
                            <input type="time" name="exam_time" id="exam_time" class="form-control shadow">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
