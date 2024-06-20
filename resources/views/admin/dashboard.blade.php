@extends('layout.layoutAdmin')
@section('page-title', 'Dashboard')
@section('content')

    <div class="container-fluid">
        <div class="container mt-3">
            <div class="row g-3 p-3">
                <div class="col-sm-6">
                    <div class="card main-bg rounded shadow-md p-3">
                        <div class="fs-4 ms-3">No. of Submitted</div>
                        <div class="row p-2">
                            <div class="col-md-3">
                                <i class="fa-solid fa-ticket-simple fs-1 rounded shadow p-3 d-flex justify-content-center"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="text-center fs-3 p-2">1</div>
                            </div>
                        </div>
                        <hr class="border border-1 border-dark m-0">
                        <div class="text-end p-2 m-0 mb-0 pb-0">
                            <a href="{{ route('Submitted') }}" class="nav-link fw-bold">
                              <i class="fa-solid fa-arrow-right"></i>  View Information
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card main-bg rounded shadow-md p-3">
                        <div class="fs-4 ms-3">No. of Courses</div>
                        <div class="row p-2">
                            <div class="col-md-3">
                                <i class="fa-solid fa-clipboard-list fs-1 rounded shadow p-3 d-flex justify-content-center"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="text-center fs-3 p-2">1</div>
                            </div>
                        </div>
                        <hr class="border border-1 border-dark m-0">
                        <div class="text-end p-2 m-0 mb-0 pb-0">
                            <a href="{{ route('courses') }}" class="nav-link fw-bold">
                              <i class="fa-solid fa-arrow-right"></i>  View Information
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card main-bg rounded shadow-md p-3">
                        <div class="fs-4 ms-3">No. of Requirements</div>
                        <div class="row p-2">
                            <div class="col-md-3">
                                <i class="fa-solid fa-file fs-1 rounded shadow p-3 d-flex justify-content-center "></i>
                            </div>
                            <div class="col-md-9">
                                <div class="text-center fs-3 p-2">1</div>
                            </div>
                        </div>
                        <hr class="border border-1 border-dark m-0">
                        <div class="text-end p-2 m-0 mb-0 pb-0">
                            <a href="{{ route('requirement') }}" class="nav-link fw-bold">
                              <i class="fa-solid fa-arrow-right"></i>  View Information
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card main-bg rounded shadow-md p-3">
                        <div class="fs-4 ms-3">No. of Interviewee</div>
                        <div class="row p-2">
                            <div class="col-md-3">
                                <i class="fa-solid fa-users fs-1 rounded shadow p-3 d-flex justify-content-center"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="text-center fs-3 p-2">1</div>
                            </div>
                        </div>
                        <hr class="border border-1 border-dark m-0">
                        <div class="text-end p-2 m-0 mb-0 pb-0">
                            <a href="{{ route('interviewee') }}" class="nav-link fw-bold">
                              <i class="fa-solid fa-arrow-right"></i>  View Information
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
