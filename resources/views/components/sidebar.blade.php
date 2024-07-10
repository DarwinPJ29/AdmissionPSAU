    <!-- sidebar start -->
    <aside class="offcanvas offcanvas-start box-shadow-1 border-0 pt-0 mt-0" tabindex="-1" id="mainSidebar"
        aria-labelledby="mainSidebarLabel">
        <div class="offcanvas-header">
            <div class="container">
                <div class="text-center">
                    <img src="{{ asset('images/PSAU_logo.png') }}" alt="" class="img-fluid side-icon" />
                </div>
                <div class="text-center" style="font-family: 'sans-serif'">Pampanga State Agricultural University</div>
            </div>
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
                    <a href="{{ route('Submitted') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'submitted' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-ticket-simple me-2"></i>
                        Submitted</a>
                </li>
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('college') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'college' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-clipboard-check me-2"></i>
                        College</a>
                </li>
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('courses') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'courses' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-clipboard-list me-2"></i>
                        Course</a>
                </li>

                <li class="nav-item rounded mb-1">
                    <a href="{{ route('requirement') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'requirement' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-file me-2"></i>
                        Requirments</a>
                </li>

                <li class="nav-item rounded mb-1">
                    <a href="{{ route('exam') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'exam' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-brain me-2"></i>
                        Exam</a>
                </li>
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('evaluation') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'evaluation' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-square-poll-vertical me-2"></i>
                        Evaluation</a>
                </li>
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('records') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'records' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-clipboard-user me-2"></i>
                        Records</a>
                </li>
                <li class="nav-item rounded mb-1">
                    <a href="{{ route('report') }}"
                        class="nav-link ps-2  {{ Request::segment(1) === 'report' ? 'activeDashboard shadow' : 'text-dark' }}"><i
                            class="fa-solid fa-folder-tree me-2"></i>
                        Reports</a>
                </li>

            </ul>
        </div>
    </aside>
    <!-- sidebar end -->
