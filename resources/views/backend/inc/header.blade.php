<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu ficon">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg></a></li>
            </ul>

            <ul class="nav navbar-nav">

            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Bikram Bishwas</span><span
                            class="user-status">admin@admin.com</span></div><span class="avatar"><img class="round"
                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar"
                            height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('admin.change-profile') }}"><i class="me-50"
                            data-feather="help-circle"></i>
                        Profile</a>
                    {{-- <a class="dropdown-item" href="{{ route('admin.change-password') }}"><i class="me-50"
                            data-feather="help-circle"></i>
                        Setting</a> --}}
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="me-50"
                            data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend/app-assets/images/icons/xls.png') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend/app-assets/images/icons/jpg.png') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend/app-assets/images/icons/pdf.png') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('backend/app-assets/images/icons/doc.png') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                        Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-8.jpg') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.jpg') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-14.jpg') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img
                        src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-6.jpg') }}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75"
                    data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>

<!-- END: Header-->
