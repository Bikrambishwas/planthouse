@extends('backend.app')
@section('content')
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Home</li>
            </ol>
        </nav>
    </div>
    <div class="row match-height">
        <!-- Medal Card -->
        {{-- <div class="col-xl-4 col-md-6 col-12">
            <div class="card card-congratulation-medal">
                <div class="card-body">
                    <h5>Congratulations 🎉 John!</h5>
                    <p class="card-text font-small-3">You have won gold medal</p>
                    <h3 class="mb-75 mt-2 pt-50">
                        <a href="#">$48.9k</a>
                    </h3>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light">View Sales</button>
                    <img src="../../../Admin/app-assets/images/illustration/badge.svg" class="congratulation-medal"
                        alt="Medal Pic">
                </div>
            </div>
        </div> --}}
        <!--/ Medal Card -->

        <!-- Statistics Card -->
        <div class="col-xl-12 col-md-12 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <a href="#">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary me-2">
                                        <div class="avatar-content">
                                            <i data-feather='package'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">8.549k</h4>
                                        <h4 class="card-text font-small-3 mb-0">Products</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <a href="#">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i class="fa-solid fa-palette"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">8.549k</h4>
                                        <h4 class="card-text font-small-3 mb-0">Artist</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <a href="#">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather='grid'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">8.549k</h4>
                                        <h4 class="card-text font-small-3 mb-0">Category</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <a href="#">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather='file-text'></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">8.549k</h4>
                                        <h4 class="card-text font-small-3 mb-0">Pages</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Card -->
    </div>


    <div class="col-lg-8 col-12">
        <div class="card card-company-table">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Category</th>
                                <th>Views</th>
                                <th>Revenue</th>
                                <th>Sales</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/toolbox.svg') }}"
                                                    alt="Toolbar svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Dixons</div>
                                            <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-primary me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-monitor font-medium-3">
                                                    <rect x="2" y="3" width="20" height="14" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="8" y1="21" x2="16" y2="21">
                                                    </line>
                                                    <line x1="12" y1="17" x2="12" y2="21">
                                                    </line>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Technology</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">23.4k</span>
                                        <span class="font-small-2 text-muted">in 24 hours</span>
                                    </div>
                                </td>
                                <td>$891.2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">68%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-down text-danger font-medium-1">
                                            <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                            <polyline points="17 18 23 18 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/parachute.svg') }}"
                                                    alt="Parachute svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Motels</div>
                                            <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-success me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-coffee font-medium-3">
                                                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                    <line x1="6" y1="1" x2="6" y2="4">
                                                    </line>
                                                    <line x1="10" y1="1" x2="10" y2="4">
                                                    </line>
                                                    <line x1="14" y1="1" x2="14" y2="4">
                                                    </line>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Grocery</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">78k</span>
                                        <span class="font-small-2 text-muted">in 2 days</span>
                                    </div>
                                </td>
                                <td>$668.51</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">97%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-up text-success font-medium-1">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/brush.svg') }}"
                                                    alt="Brush svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Zipcar</div>
                                            <div class="font-small-2 text-muted">davcilse@is.gov</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-warning me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-watch font-medium-3">
                                                    <circle cx="12" cy="12" r="7"></circle>
                                                    <polyline points="12 9 12 12 13.5 13.5"></polyline>
                                                    <path
                                                        d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Fashion</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">162</span>
                                        <span class="font-small-2 text-muted">in 5 days</span>
                                    </div>
                                </td>
                                <td>$522.29</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">62%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-up text-success font-medium-1">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/star.svg') }}"
                                                    alt="Star svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Owning</div>
                                            <div class="font-small-2 text-muted">us@cuhil.gov</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-primary me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-monitor font-medium-3">
                                                    <rect x="2" y="3" width="20" height="14" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="8" y1="21" x2="16" y2="21">
                                                    </line>
                                                    <line x1="12" y1="17" x2="12" y2="21">
                                                    </line>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Technology</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">214</span>
                                        <span class="font-small-2 text-muted">in 24 hours</span>
                                    </div>
                                </td>
                                <td>$291.01</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">88%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-up text-success font-medium-1">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/book.svg') }}"
                                                    alt="Book svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Cafés</div>
                                            <div class="font-small-2 text-muted">pudais@jife.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-success me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-coffee font-medium-3">
                                                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                    <line x1="6" y1="1" x2="6" y2="4">
                                                    </line>
                                                    <line x1="10" y1="1" x2="10" y2="4">
                                                    </line>
                                                    <line x1="14" y1="1" x2="14" y2="4">
                                                    </line>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Grocery</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">208</span>
                                        <span class="font-small-2 text-muted">in 1 week</span>
                                    </div>
                                </td>
                                <td>$783.93</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">16%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-down text-danger font-medium-1">
                                            <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                            <polyline points="17 18 23 18 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/rocket.svg') }}"
                                                    alt="Rocket svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Kmart</div>
                                            <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-warning me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-watch font-medium-3">
                                                    <circle cx="12" cy="12" r="7"></circle>
                                                    <polyline points="12 9 12 12 13.5 13.5"></polyline>
                                                    <path
                                                        d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Fashion</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">990</span>
                                        <span class="font-small-2 text-muted">in 1 month</span>
                                    </div>
                                </td>
                                <td>$780.05</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">78%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-up text-success font-medium-1">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar rounded">
                                            <div class="avatar-content">
                                                <img src="{{ asset('backend/app-assets/images/icons/speaker.svg') }}"
                                                    alt="Speaker svg">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-bolder">Payers</div>
                                            <div class="font-small-2 text-muted">luk@izug.io</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-warning me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-watch font-medium-3">
                                                    <circle cx="12" cy="12" r="7"></circle>
                                                    <polyline points="12 9 12 12 13.5 13.5"></polyline>
                                                    <path
                                                        d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>Fashion</span>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bolder mb-25">12.9k</span>
                                        <span class="font-small-2 text-muted">in 12 hours</span>
                                    </div>
                                </td>
                                <td>$531.49</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bolder me-1">42%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trending-up text-success font-medium-1">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
