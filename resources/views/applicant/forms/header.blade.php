<div class="d-flex mt-3">
    <div class="">
        <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
            style="max-height: 150px">
    </div>
    <div class="row">
        <div class="d-flex ">
            <div class="mb-0 pb-0 mt-4">
                <div class="text-uppercase ms-3 fs-style f-title">pampanga state agricultural university</div>
                <div class="fw-semibold ms-3 f-tag">Office of Admissions and Registration </div>
            </div>
            <div class=" d-flex justify-content-center">
                <ul class="nav-menu list-style-none d-flex align-items-center mb-0 r">
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link text-center mt-3" data-bs-toggle="dropdown">
                            <div class="btn btn-outline-success rounded-circle">
                                <i class="fa-solid fa-user-secret text-dark"></i>
                            </div>
                        </a>
                        <div class=" p-2 text">
                            @php
                                use Illuminate\Support\Str;
                            @endphp

                            @if (auth()->user() && auth()->user()->information)
                                {{ Str::title(auth()->user()->information->first_name) }}
                                {{-- @if (!empty(auth()->user()->information->middle_name))
                                    {{ strtoupper(substr(auth()->user()->information->middle_name, 0, 1)) . '. ' }}
                                @endif
                                {{ Str::title(auth()->user()->information->last_name) }} --}}
                            @endif
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end mt-1r border-0 box-shadow-1">

                            <li>
                                <a href="{{ route('settings') }}" class="dropdown-item text-muted"><i
                                        class="fa-solid fa-gear"></i>
                                    Settings</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item text-muted"><i
                                            class="fa-solid fa-right-from-bracket"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <hr class=" border-dark border-2 opacity-75 w-100 p-0 m-0">
    </div>
</div>
<style>
    @media only screen and (max-width: 431px) {
        .f-title {
            font-size: 14px !important;
        }

        .f-tag {
            font-size: 12px !important;
        }

        .f-text {
            font-size: 10px;
        }
    }

    @media only screen and (max-width: 780px) {
        .f-title {
            font-size: 18px;
        }

        .f-tag {
            font-size: 16px !important;
        }

        .f-text {
            font-size: 14px;
        }

        .text {
            /* visibility: hidden; */
        }
    }

    @media only screen and (min-width: 781px) {
        .f-title {
            font-size: 30px;
        }

        .f-tag {
            font-size: 20px !important;
        }

        .f-text {
            font-size: 16px;
        }

    }
</style>
