    <!-- sidebar start -->
    <aside class="offcanvas offcanvas-start box-shadow-1 border-0 pt-0 mt-0" tabindex="-1" id="mainSidebar"
        aria-labelledby="mainSidebarLabel">
        <div class="offcanvas-header">
            <img src="" alt="" class="w-11r" />
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ">
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link ps-2  {{ Request::segment(2) === 'dashboard' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-house me-2"></i>
                        Dashboard</a>
                </li>
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('account') }}"
                        class="nav-link ps-2  {{ Request::segment(2) === 'account' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-user me-2"></i>
                        Account</a>
                </li>

            </ul>
        </div>
    </aside>
    <!-- sidebar end -->