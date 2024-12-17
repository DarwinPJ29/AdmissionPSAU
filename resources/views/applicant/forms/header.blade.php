<div class="d-flex mt-3">
    <div class="">
        <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
            style="max-height: 150px">
    </div>
    <div class="w-100">
        <div class="col">
            <div class="text-uppercase fs-3 ms-3 fs-style">pampanga state agricultural university</div>
            <div class="fw-semibold fs-3 ms-3">Office of Admissions and Registration </div>
        </div>
        <div class="col">
            <ul class="nav-menu list-style-none d-flex align-items-center mb-0">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link rounded-circle " data-bs-toggle="dropdown">
                        <div class=" p-2">
                            @php
                                use Illuminate\Support\Str;
                            @endphp

                            @if (auth()->user() && auth()->user()->information)
                                {{ Str::title(auth()->user()->information->first_name) }}
                                @if (!empty(auth()->user()->information->middle_name))
                                    {{ strtoupper(substr(auth()->user()->information->middle_name, 0, 1)) . '. ' }}
                                @endif
                                {{ Str::title(auth()->user()->information->last_name) }}
                            @endif
                            <div class="btn mx-2 btn-outline-success rounded-circle p-2">
                                <i class="fa-solid fa-user-secret text-dark"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-1r border-0 box-shadow-1">

                        <li>
                            <a href="{{ route('settings') }}" class="dropdown-item text-muted"><i
                                    class="fa-solid fa-gear"></i>
                                Settings</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item text-muted"><i class="fa-solid fa-right-from-bracket"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <hr class="border border-dark border-2 opacity-75 w-100">

    </div>
</div>
