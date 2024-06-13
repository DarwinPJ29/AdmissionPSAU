<nav class="navbar navbar-expand-lg d-flex flex-column sticky-top" id="navbar">
    <div class="container">
        <div class="d-flex justify-content-between w-100">
            <div class="col-md-10 text-break">
                <a class="navbar-brand d-flex" href="{{ route('index') }}">
                    <div class="d-flex flex-column justify-content-center">
                        <img src="{{ asset('images/PSAU_logo.png') }}" alt="" class="nav-logo img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <span class="text-uppercase ms-1 fs-style">pampanga state <br>agricultural university</span>
                    </div>
                </a>
            </div>

            <div class="col-md-2 d-flex flex-column text-end justify-content-center ">
                <a href="{{ route('login') }}">
                    <div class="btn btn-sm rounded btn-outline-success m-1">Log in</div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="border border-1 border-white opacity-75 py-0 my-0 w-100">
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::segment(2) == '' ? 'activated' : '' }}" aria-current="page"
                        href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::segment(2) == 'applyNow' ? 'activated' : '' }} "
                        aria-current="page" href="{{ route('ApplyNow') }}">Apply Now</a>
                </li>
            </ul>
        </div>
</nav>
