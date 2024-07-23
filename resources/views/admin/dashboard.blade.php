@extends('layout.layoutAdmin')
@section('page-title', 'Dashboard')
@section('content')

    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row g-2 justify-content-center">

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('Submitted') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i
                                            class="fa-solid fa-ticket-simple fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Submitted</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('college') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i
                                            class="fa-solid fa-clipboard-check fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Colleges</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('courses') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i
                                            class="fa-solid fa-clipboard-list fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Courses</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('requirement') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i class="fa-solid fa-file fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Requirement</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('exam') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i class="fa-solid fa-users fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Exam Participants</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('evaluation') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i
                                            class="fa-solid fa-square-poll-vertical fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Evaluation</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('records') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i
                                            class="fa-solid fa-clipboard-user fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Records</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <a href="{{ route('report') }}" class="nav-link  f-text pt-1">
                        <div class="card main-bg rounded shadow-md p-3 hover-db">
                            <div class="row">
                                <div class="col-5 d-flex flex-column justify-content-center ">
                                    <div class="">
                                        <i class="fa-solid fa-folder-tree fs-2 shadow rounded-circle p-3  text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="text-center fs-3 ">1</div>
                                    </div>
                                    <div class="">
                                        <div class="f-text mb-1 fs-style text-center">Reports</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>



    {{-- <div class="container mt-3">
        <div class="row mb-2 g-3 p-3 justify-content-center">
            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Submitted</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i class="fa-solid fa-ticket-simple fs-2 rounded shadow p-1 d-flex justify-content-center"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('Submitted') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Colleges</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i
                                class="fa-solid fa-clipboard-check fs-2 rounded shadow p-1 d-flex justify-content-center"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('college') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Courses</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i
                                class="fa-solid fa-clipboard-list fs-2 rounded shadow p-1 d-flex justify-content-center"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('courses') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Requirements</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i class="fa-solid fa-file fs-2 rounded shadow p-1 d-flex justify-content-center "></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('requirement') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Exam Participants</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i class="fa-solid fa-users fs-2 rounded shadow p-1 d-flex justify-content-center"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('exam') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Evaluation</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i
                                class="fa-solid fa-square-poll-vertical fs-2 rounded shadow p-1 d-flex justify-content-center"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('evaluation') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 ">
                <div class="card main-bg rounded shadow-md p-3">
                    <div class="f-text ms-3 fw-semibold mb-1">No. of Records</div>
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            <i
                                class="fa-solid fa-clipboard-user fs-2 rounded shadow p-1 d-flex justify-content-center"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="text-center fs-3 ">1</div>
                        </div>
                    </div>
                    <hr class="border border-1 border-dark m-0">
                    <div class="text-end  m-0 mb-0 pb-0">
                        <a href="{{ route('records') }}" class="nav-link  f-text pt-1">
                            <i class="fa-solid fa-arrow-right"></i> View Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
