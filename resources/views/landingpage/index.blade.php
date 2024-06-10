@extends('layout.layout')
@section('page-title', 'Home')
@section('content')

<div class="container-fluid" id="hero" style=" background-image:url({{ asset('images/hero.jpg') }}) ">
    <div class="container d-flex flex-column justify-content-center cont">
    <div class="container d-flex flex-column justify-content-center  msg p-2">
        <span class="text-center mt-3 text-white  txt fs-5">Welcome to</span>
        <span class="text-center fs-1 text-white txt ">
            <span class="fw-bold">P</span>ampanga
            <span class="fw-bold">S</span>tate
            <span class="fw-bold">A</span>gricultural
            <span class="fw-bold">U</span>niversity
        </span>
        <div class="rounded main-bg mx-auto w-50 py-2 justify-content-center ">
            <div class="fs-semibold text-center">
                Application for Admission for
            </div>
            <div class="fs-semibold text-center">
                2023-2024(1st Semester)
            </div>
            <div class="fs-semibold text-center">
                is now open!
            </div>
        </div>
        <div class="mt-3  mx-auto">
            <a href="{{ route('landing_admission') }}">
                <div class="btn btn-success text-dark rounded text-white">Apply now!</div>
            </a>
        </div>
    </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="my-5 text-center fs-3 text-uppercase"> admission requirements</div>
        <div class="d-flex fs-5 mb-3">
            <span class="fw-bold me-2 text-warning">|</span>
            <span>Requirements for GRADUATE LEVEL</span>
        </div>

        <div class="row g-2 mb-5">
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <label class="text-uppercase text-warning mb-2">doctoral level</label>
                    <ul>
                        <li>Transcript of Records of Bachelor's Degree</li>
                        <li>Certificate of Employment (if applicable)</li>
                        <li>Two letters of recommendation from former proffesor/s and/or superior/s</li>
                        <li>Medical Certificate indicating that you are physical fit to study/go to school</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>Honorable dismissal from last school attended (for transferees)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <div class="text-uppercase text-warning mb-2 text-center">Upload in the online application</div>
                    <div class="text-uppercase text-warning mb-2">doctoral level</div>
                    <ul>
                        <li>Transcript of Records of Bachelor's Degree</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>E-signature</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row g-2 mb-5">

            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <div class="text-uppercase text-success mb-2 text-center">Upload in the online application</div>
                    <div class="text-uppercase text-success mb-2">master level</div>
                    <ul>
                        <li>Transcript of Records of Bachelor's Degree</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>E-signature</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <label class="text-uppercase text-success mb-2">master level</label>
                    <ul>
                        <li>Transcript of Records of Bachelor's Degree</li>
                        <li>Certificate of Employment (if applicable)</li>
                        <li>Two letters of recommendation from former proffesor/s and/or superior/s</li>
                        <li>Medical Certificate indicating that you are physical fit to study/go to school</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>Honorable dismissal from last school attended (for transferees)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="d-flex fs-5 mb-3">
            <span class="fw-bold me-2 text-warning">|</span>
            <span>Requirements for UNDERGRADUATE LEVEL</span>
        </div>

        <div class="row g-2 mb-5">
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <label class="text-uppercase text-warning mb-2">new student</label>
                    <ul>
                        <li>Form 138 - Grade 12 report card with grades from 1st to 4th quarter</li>
                        <li>Certificate of Good Moral Character</li>
                        <li>PSA-Issued birth certificate</li>
                        <li>Medical Certificate indicating that you are physical fit to study/go to school</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <div class="text-uppercase text-warning mb-2 text-center">Upload in the online application</div>
                    <div class="text-uppercase text-warning mb-2">New student</div>
                    <ul>
                        <li>Form 138 - Grade 12 report card (with at least  1st and 2nd quarter grades)</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>E-signature</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row g-2 mb-5">

            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <div class="text-uppercase text-success mb-2 text-center">Upload in the online application</div>
                    <div class="text-uppercase text-success mb-2">transferee</div>
                    <ul>
                        <li>Transcript of Records/Certified True Copy</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>E-signature</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <label class="text-uppercase text-success mb-2">transferee</label>
                    <ul>
                        <li>Transcript of Records</li>
                        <li>Honorable dismissal from last school attended </li>
                        <li>PSA-Issued birth certificate</li>
                        <li>Barangay Clearance</li>
                        <li>Medical Certificate indicating that you are physical fit to study/go to school</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-2 mb-5">

            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <label class="text-uppercase text-warning mb-2">second courser</label>
                    <ul>
                        <li>Transcript of Records</li>
                        <li>Honorable dismissal from last school attended </li>
                        <li>PSA-Issued birth certificate</li>
                        <li>Photocopy of Diploma of previous degree</li>
                        <li>Barangay Clearance</li>
                        <li>Medical Certificate indicating that you are physical fit to study/go to school</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="container border shadow rounded p-3">
                    <div class="text-uppercase text-warning mb-2 text-center">Upload in the online application</div>
                    <div class="text-uppercase text-warning mb-2">second courser</div>
                    <ul>
                        <li>Transcript of Records</li>
                        <li>Two pieces identical 2x2 photo with name tag</li>
                        <li>E-signature</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
