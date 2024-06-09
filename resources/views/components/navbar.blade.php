<nav class="navbar navbar-expand-lg d-flex flex-column sticky-top" id="navbar">
    <div class="container">
        <div class="row w-100">
            <div class="col-md-6 ">
            <a class="navbar-brand" href="#"><span class="text-uppercase">pampanga state agricultural university</span></a>
            </div>

            <div class="col-md-6 d-flex justify-content-end ">
            <a href="{{ route('login') }}">
                <div class="btn btn-sm rounded btn-outline-success m-1">Log in</div>
            </a>

            <a href="{{ route('dashboard') }}">
                <div class="btn btn-sm rounded btn-outline-success m-1">Dash</div>
            </a>
            </div>


        </div>



        </div>
    </div>
    <div class="container">
        <hr class="border border-1 border-white opacity-75 py-0 my-0 w-100">
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark {{ Request::segment(2) == '' ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark {{ Request::segment(2) == 'admission' ? 'active' : '' }} " aria-current="page" href="{{ route('admission') }}">Admission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark {{ Request::segment(2) == 'courses' ? 'active' : '' }}" aria-current="page" href="{{ route('courses') }}">Courses</a>
              </li>



            </ul>
    </div>
</nav>
