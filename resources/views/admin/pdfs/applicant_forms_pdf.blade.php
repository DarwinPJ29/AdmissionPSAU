<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    @include('layout.link')
</head>
<body>

<div class="container-fluid">
    <div class="container ">
        <div class="d-flex mt-3">
            <div class="">
                <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
                    style="max-height: 130px">
            </div>
            <div class="w-100 d-flex flex-column justify-content-center">
                <div class="text-uppercase fs-3 ms-3 fs-style">pampanga state agricultural university</div>
                <div class="ms-3">To be a Responsive Premier Agricultural State University for Humane and Blissful Development</div>
                <hr class="border border-dark border-1 opacity-75 w-100">
            </div>
        </div>

        <div class="container">
            <div class="border-bottom border-dark">Section A:</div>
            <div class="row my-2">
                <div class="col-md-1 col-sm-4">
                    <div class="text-center text-uppercase border-bottom">
                        {{-- @if ($user->prefix != null)
                            {{ $user->prefix }}
                        @else
                            n/a
                        @endif --}}
                    </div>
                    <div class="text text-muted text-center text-uppercase">Prefix</div>
                </div>
                <div class="col-md-3 col-sm-8">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">First Name</div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Middle Name</div>
                </div>
                <div class="col-md-3 col-sm-8">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Last Name</div>
                </div>
                <div class="col-md-1 col-sm-4">
                    <div class="text-center text-uppercase border-bottom">
                        {{-- @if ($user->suffix != null)
                            {{ $user->suffix }}
                        @else
                            n/a
                        @endif --}}
                    </div>
                    <div class="text text-muted text-center text-uppercase">Suffix</div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2 col-sm-6">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Sex</div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Age</div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Place of Birth</div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Date of Birth</div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Citizenship</div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Religion</div>

                </div>

                <div class="col-md-4">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Civil Status</div>

                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Province</div>
                </div>
                <div class="col-md-4">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Municipality</div>

                </div>
                <div class="col-md-4">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Barangay</div>

                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 col-sm-7">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Email Address</div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="text-center text-uppercase border-bottom"></div>
                    <div class="text text-muted text-center text-uppercase">Contact No.</div>
                </div>
            </div>
            <div class="border-bottom border-dark mt-5">Section B:</div>
            <div class="row my-2">
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">1st Choice</div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">2nd Choice</div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">School Year</div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">Semester</div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">Application Type</div>
                </div>
            </div>

            <div class="border-bottom border-dark mt-5 mb-2">Section C:</div>
            <div class="container overflow-x-scroll mb-3" style="min-width: 550px">
                <div class="row border p-2 main-bg text-center text-uppercase">
                    <div class="col-2 text-uppercase border-end p-1">School Attended</div>
                    <div class="col-4 text-uppercase border-end p-1">Name</div>
                    <div class="col-4 text-uppercase border-end p-1">Address</div>
                    <div class="col-2 text-uppercase p-1">Inclusive Date</div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-2 border-end p-1">Elementary</div>
                    <div class="col-4 border-end p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                    <div class="col-4 border-end p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                    <div class="col-2 p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-2 border-end p-1">Senior High</div>
                    <div class="col-4 border-end p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                    <div class="col-4 border-end p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                    <div class="col-2 p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-2 border-end p-1">Last School Attended</div>
                    <div class="col-4 border-end p-1">
                        <div class="text-center text-uppercase text-dark"></div>
                    </div>
                    <div class="col-4 border-end p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                    <div class="col-2 p-1">
                        <div class="text-center text-uppercase"></div>
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-3">
                <div class="col-sm-6 col-md-6">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">Type of SHS Graduated from:</div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">Date of Graduation</div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">SHS Average Grade:</div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">LRN</div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="text-center text-uppercase"></div>
                    <div class="text text-muted text-center text-uppercase">First Time to Enter College:</div>
                </div>
            </div>

            {{-- <div class="border-bottom border-dark mt-5 mb-2">Section D:</div>
            <div class="container overflow-x-scroll mb-3" style="min-width: 550px">
                <div class="row border p-2 main-bg text-center text-uppercase">
                    <div class="col-3 text-uppercase border-end p-1"></div>
                    <div class="col-3 text-uppercase border-end p-1">father</div>
                    <div class="col-3 text-uppercase border-end p-1">mother</div>
                    <div class="col-3 text-uppercase p-1">guardian</div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Full Name</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_name }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_name }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_name }}</div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Date of Birth</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_birth }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_birth }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_birth }}</div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Highest Educational Attainment</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_attainment }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_attainment }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_attainment }}</div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Occupation / Employment</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_occupation }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_occupation }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_occupation }}</div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Company Name / Address</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_address }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_address }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_address }}</div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Monthly Income</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_income }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_income }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_income }}</div>
                    </div>
                </div>
                <div class="row border text-center text-uppercase p-2">
                    <div class="col-3 border-end p-1">Contact No.</div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->f_contact }}</div>
                    </div>
                    <div class="col-3 border-end p-1">
                        <div class="text-center text-uppercase">{{ $user->m_contact }}</div>
                    </div>
                    <div class="col-3 p-1">
                        <div class="text-center text-uppercase">{{ $user->g_contact }}</div>
                    </div>
                </div>

            </div>
            <div class="mt-2 mb-2">
                <div>
                    I hereby affirm that all information supplied here is complete and accurate.
                    Withholding or giving false information will make me ineligible for admission
                    or be subjected to dismissal. I agree to abide by the policies, rules and and reulations
                    of Pampanga State Agricultural University,
                </div>
            </div>
            <div class="mx-auto mt-5 mb-5">
                <div class="text-center text-uppercase fw-bold">ALAWI C. CANLAS, Ed. D.</div>
                <div class="text-center text-uppercase">Director, Admission and Registration Services</div>
            </div> --}}
        </div>


    </div>
</div>

</body>
</html>
