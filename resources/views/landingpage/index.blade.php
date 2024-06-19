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
                    <a href="{{ route('ApplyNow') }}">
                        <div class="btn btn-success text-dark rounded text-white">Apply now!</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid whole-bg p-3">
        <div class="text-center mb-4 mt-3 text-white fs-4 fs-style">Our Social Media Page</div>
        <div class="d-flex justify-content-evenly m-0 pb-3 gap-1">
            <div class="card social">
                <div class="">
                    <img src="{{ asset('images/fb.png') }}" alt="" class="card-img-top img-fluid">
                </div>
                <a href="https://www.facebook.com/PampangaStateAgriU" class="nav-link">
                    <div class="card-body text-end m-0 p-0">
                        Visit us <i class="fa-solid fa-arrow-right-long mx-2"></i>
                    </div>
                </a>
            </div>
            <div class="card social">
                <div class="">
                    <img src="{{ asset('images/insta.png') }}" alt="" class="card-img-top img-fluid">
                </div>
                <a href="https://www.instagram.com/psauofficial" class="nav-link">
                    <div class="card-body text-end m-0 p-0">
                        Visit us <i class="fa-solid fa-arrow-right-long mx-2"></i>
                    </div>
                </a>
            </div>
            <div class="card social">
                <div class="">
                    <img src="{{ asset('images/link.png') }}" alt="" class="card-img-top img-fluid">
                </div>
                <a href="https://www.linkedin.com/school/pampangastateagriculturaluniversity" class="nav-link">
                    <div class="card-body text-end m-0 p-0">
                        Visit us <i class="fa-solid fa-arrow-right-long mx-2"></i>
                    </div>
                </a>
            </div>
            <div class="card social">
                <div class="">
                    <img src="{{ asset('images/sunukuan.png') }}" alt="" class="card-img-top img-fluid">
                </div>
                <a href="https://www.facebook.com/psausinukuangazette" class="nav-link">
                    <div class="card-body text-end m-0 p-0">
                        Visit us <i class="fa-solid fa-arrow-right-long mx-2"></i>
                    </div>
                </a>
            </div>
            <div class="card social">
                <div class="">
                    <img src="{{ asset('images/bids.png') }}" alt="" class="card-img-top img-fluid">
                </div>
                <a href="https://www.facebook.com/PSAUBAC" class="nav-link">
                    <div class="card-body text-end m-0 p-0">
                        Visit us <i class="fa-solid fa-arrow-right-long mx-2"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid g-3 p-3 bg-secondary-subtle">
        <div class="row m-0 p-0 g-2">
            {{-- 1st Aside --}}
            <div class="col-md-9 col-sm-12">
                <div class="container border rounded bg-white shadow-sm pb-4">
                    <div class="text-center fs-style fs-3 mt-3 fw-bold">Courses We Offer</div>
                    <div class="row mt-5 justify-content-center">
                        @if (count($courses) > 0)
                        @foreach ($courses as $course)


                        <div class="col-md-6 col-sm-12 p-2">
                            <div class="card shadow  p-1">
                                <div class="">
                                    <img src="{{ Storage::url('courses/' . $course->file) }}" alt="" srcset=""
                                        class="img-fluid card-img-top card-img">
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="fw-bold text-success fs-4">|</div>
                                        <div
                                            class="fw-semibold text-uppercase d-flex flex-column justify-content-center ms-1">
                                            {{ $course->title }} ({{ $course->acronym }})</div>
                                    </div>
                                    <p>{{ $course->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- 2nd Aside  --}}
            <div class="col-md-3 col-sm-12">
                <div class="container border rounded bg-white shadow-sm">
                    <div class="m-3 mb-5 text-center fs-5 fs-style fw-bold"> Admission Requirements</div>
                    <div class="d-flex fs-5 mb-3">
                        <span class="fw-bold me-2 text-warning">|</span>
                        <span>Requirements for GRADUATE LEVEL</span>
                    </div>

                    <div class="row g-2 mb-5">
                        <div class="col-md-12 col-sm-6 ">
                            <div class="container border shadow rounded p-3">
                                <label class="text-uppercase text-warning mb-2">doctoral level</label>
                                <ul>
                                    @if (count($requirements) > 0)
                                        @foreach ($requirements as $doctoral)
                                            @if ($doctoral->doctoral == 1)
                                                <li>{{ $doctoral->title}}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 ">
                            <div class="container border shadow rounded p-3">
                                <label class="text-uppercase text-success mb-2">master level</label>
                                <ul>
                                    @if (count($requirements) > 0)
                                        @foreach ($requirements as $masteral)
                                            @if ($masteral->masteral == 1)
                                                <li>{{ $masteral->title}}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex fs-5 mb-3">
                        <span class="fw-bold me-2 text-warning">|</span>
                        <span>Requirements for UNDERGRADUATE LEVEL</span>
                    </div>

                    <div class="row g-2 mb-5 justify-content-center">
                        <div class="col-md-12 col-sm-6 ">
                            <div class="container border shadow rounded p-3">
                                <label class="text-uppercase text-warning mb-2">new student</label>
                                <ul>
                                    @if (count($requirements) > 0)
                                        @foreach ($requirements as $freshmen)
                                            @if ($freshmen->freshmen == 1)
                                                <li>{{ $freshmen->title}}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 ">
                            <div class="container border shadow rounded p-3">
                                <label class="text-uppercase text-success mb-2">transferee</label>
                                <ul>
                                    @if (count($requirements) > 0)
                                        @foreach ($requirements as $transferee)
                                            @if ($transferee->transferee == 1)
                                                <li>{{ $transferee->title}}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 ">
                            <div class="container border shadow rounded p-3">
                                <label class="text-uppercase text-warning mb-2">second courser</label>
                                <ul>
                                    @if (count($requirements) > 0)
                                        @foreach ($requirements as $second_courser)
                                            @if ($second_courser->second_courser == 1)
                                                <li>{{ $second_courser->title}}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('landingpage.footer')
@endsection
