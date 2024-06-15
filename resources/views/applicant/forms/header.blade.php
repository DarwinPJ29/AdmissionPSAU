<div class="d-flex mt-3">
    <div class="">
        <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
            style="max-height: 150px">

    </div>
    <div class="w-100">
        <div class="text-uppercase fs-3 ms-3">pampanga state agricultural university</div>
        <div class="fw-bold fs-3 ms-3">Office of Admission and Registration </div>
        <hr class="border border-dark border-2 opacity-75 w-100">
    </div>
</div>
<div class="text-center mt-3">
    <div class="d-flex justify-content-evenly gap-1 mx-5">
        <div class="d-flex">
            <div class="d-flex">
                <div class="btn btn-success  rounded-circle bnt-sm border btn-sm"><i
                        class="fa-solid fa-user text-warning p-lg-1 py-md-auto text-center"></i></div>
                <div class=" d-flex flex-column justify-content-center ms-2" style="font-size: 8px">Information</div>
            </div>
        </div>
        <div style="width:15%"><hr class="border border-success opacity-75"></div>
        <div class="d-flex">
            <div class="d-flex">
                <div class="btn btn-outline-success  rounded-circle bnt-sm border btn-sm"><i
                        class="fa-solid fa-pencil text-warning p-lg-1 py-md-auto text-center"></i></div>
                <div class=" d-flex flex-column justify-content-center ms-2" style="font-size: 8px">Choice</div>
            </div>
        </div>
        <div style="width:15%"><hr class="border border-success opacity-75"></div>
        <div class="d-flex">
            <div class="d-flex">
                <div class="btn btn-outline-success  rounded-circle bnt-sm border btn-sm"><i
                        class="fa-solid fa-pencil text-warning p-lg-1 py-md-auto text-center"></i></div>
                <div class=" d-flex flex-column justify-content-center ms-2" style="font-size: 8px">Education</div>
            </div>
        </div>
        <div style="width:15%"><hr class="border border-success opacity-75"></div>
        <div class="d-flex">
            <div class="d-flex">
                <div class="btn btn-outline-success  rounded-circle bnt-sm border btn-sm"><i
                        class="fa-solid fa-pencil text-warning p-lg-1 py-md-auto text-center"></i></div>
                <div class=" d-flex flex-column justify-content-center ms-2" style="font-size: 8px">Parent's <br>Info</div>
            </div>
        </div>
        <div style="width:15%"><hr class="border border-success opacity-75"></div>
        <div class="d-flex">
            <div class="d-flex">
                <div class="btn btn-outline-success  rounded-circle bnt-sm border btn-sm"><i
                        class="fa-solid fa-pencil text-warning p-lg-1 py-md-auto text-center"></i></div>
                <div class=" d-flex flex-column justify-content-center ms-2" style="font-size: 8px">Declaration</div>
            </div>
        </div>
    </div>

</div>

<!-- stepper 2 -->
{{-- <div class="container-fluid p-0">
    <div class="row">
            <div class="col px-3">
                <ul class="nav nav-pills nav-fill pill-cust mt-3 py-1 rounded-lg" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active d-flex align-items-center" id="pills-st1-tab" data-toggle="pill"
                            href="#pills-st1" role="tab" aria-controls="pills-st1" aria-selected="true">
                            <span
                                class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <p class="text-uppercase mb-0 pl-3">
                                <span class="d-flex text-dark small">Step-1</span>
                                <span class="d-flex mt-n1 text-primary text-capitalize">Your Ambition</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex align-items-center" id="pills-st2-tab" data-toggle="pill"
                            href="#pills-st2" role="tab" aria-controls="pills-st2" aria-selected="false">
                            <span
                                class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <p class="text-uppercase mb-0 pl-3">
                                <span class="d-flex text-dark small">Step-2</span>
                                <span class="d-flex mt-n1 text-primary text-capitalize">Previous Work History</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex align-items-center" id="pills-st3-tab" data-toggle="pill"
                            href="#pills-st3" role="tab" aria-controls="pills-st3" aria-selected="false">
                            <span
                                class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <p class="text-uppercase mb-0 pl-3">
                                <span class="d-flex text-dark small">Step-3</span>
                                <span class="d-flex mt-n1 text-primary text-capitalize">Your Availability</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex align-items-center" id="pills-st4-tab" data-toggle="pill"
                            href="#pills-st4" role="tab" aria-controls="pills-st4" aria-selected="false">
                            <span
                                class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <p class="text-uppercase mb-0 pl-3">
                                <span class="d-flex text-dark small">Step-4</span>
                                <span class="d-flex mt-n1 text-primary text-capitalize">Your Information</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
    </div>
</div>
<style>
    .pill-cust {
        background-color: #EFF0F8;

        .nav-item {
            .nav-link {
                &::after {
                    display: inline-block;
                    content: "";
                    border-top: .1rem dashed #000000;
                    width: 4rem;
                    margin: 2rem 1rem 0;
                    transform: translateY(-1rem);
                    flex-grow: 1;
                }

                .fa-cust {
                    width: 40px;
                    height: 40px;
                    background: white;
                    color: #000000;
                }
            }

            .nav-link.active {
                color: white;
                background-color: transparent;

                &::after {
                    border-top: .1rem solid #007bff;
                }

                .fa-cust {
                    background: #007bff;
                    color: #ffffff;
                }
            }

            &:last-child .nav-link::after {
                display: none;
            }
        }
    }
</style> --}}
