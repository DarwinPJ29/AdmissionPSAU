<nav class="navbar navbar-expand-lg d-flex flex-column sticky-top" id="navbar">
    <div class="container">
            <a class="navbar-brand d-flex" href="{{ route('index') }}">
                <div class="d-flex flex-column justify-content-center">
                    <img src="{{ asset('images/PSAU_logo.png') }}" alt="" class="nav-logo img-fluid">
                </div>
                <div class="d-flex flex-column justify-content-center text-wrap">
                    <div class="text-uppercase ms-1 fs-style f-title" style="line-height: 25px">pampanga state
                        agricultural university</div>
                        <div class="">
                            <p class="f-text ms-2 ">
                                To be a Responsive Premier Agricultural State University for Humane and Blissful Development
                            </p>
                        </div>
                </div>
            </a>

    </div>
    <div class="container">
        <hr class="border border-1 border-success opacity-75 py-0 my-0 w-100">
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex justify-content-between w-100">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark f-text {{ Request::segment(2) == '' ? 'activated' : '' }}"
                            aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark f-text {{ Request::segment(2) == 'applyNow' ? 'activated' : '' }} "
                            aria-current="page" href="{{ route('ApplyNow') }}">Apply Now</a>
                    </li>
                </ul>
                <div class="">
                    <a href="{{ route('login') }}" class="text-end  nav-link">
                        <div class="btn btn-sm rounded btn-success m-1 f-text">Log in</div>
                    </a>
                </div>
            </div>
        </div>
</nav>
