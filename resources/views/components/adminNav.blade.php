<!-- navbar start -->
<header id="main-header" class="navbar navbar-expand-md bg-light px-4 py-2 sticky-top">
    <div class="container-fluid">
        <div class="d-flex">
            <button data-bs-target="#mainSidebar" data-bs-toggle="offcanvas" class="navbar-toggler border-0"><span
                    class="navbar-toggler-icon"></span></button>
        </div>
        <ul class="nav-menu list-style-none d-flex align-items-center mb-0">
            <li class="nav-item dropdown">
                <a href="" class="nav-link rounded-circle "
                    data-bs-toggle="dropdown">
                    <div class=" p-2">
                        <div class="btn btn-outline-warning d-flex">
                            <div class="text-dark me-2">Name</div>
                            <div class="ms-2 text-dark d-flex flex-column justify-content-center">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-1r border-0 box-shadow-1">

                    <li>
                        <a href="" class="dropdown-item text-muted"><i
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
</header>
<!-- navbar end -->
