 <!-- BEGIN: SIDEMenu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow expanded" data-scroll-to-active="true"
     style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
     <div class="navbar-header expanded">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item me-auto"><a class="navbar-brand" href="/admin/home">
                     {{-- <span class="brand-logo"> --}}
                     {{-- @foreach ($sitesetting as $item)
                             <img class="img-responsive" src="{{ asset('uploads/sitesetting/' . $item->company_logo) }}"
                                 alt="">
                     </span> --}}
                     <h2 class="brand-text">Mindworks Media</h2>
                     {{-- @endforeach --}}
                 </a></li>
             <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg
                         xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round"
                         class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4">
                         <line x1="18" y1="6" x2="6" y2="18"></line>
                         <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round"
                         class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4">
                         <circle cx="12" cy="12" r="10"></circle>
                         <circle cx="12" cy="12" r="3"></circle>
                     </svg></a></li>
         </ul>
     </div>
     <div class="shadow-bottom" style="display: none;"></div>
     <div class="main-menu-content ps ps--active-y">
         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
             <li class="nav-item"><a class="d-flex align-items-center" href="/admin/home"><svg
                         xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-home">
                         <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                         <polyline points="9 22 9 12 15 12 15 22"></polyline>
                     </svg><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>

             </li>
             <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='package'></i>
                     Products</span></a>
             </li>
             <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                         class="fa-solid fa-palette"></i> Artists</span></a>
             </li>
             <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='grid'></i>
                     Categories</span></a>
             </li>
             {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.field') }}"><i
                         class="fa-solid fa-f"></i> Field</span></a>
             </li> --}}
             <li class="nav-item "><a class="d-flex align-items-center" href="#"><i data-feather='settings'></i>
                     sitesettings</span></a>

             </li>
             <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='file-text'></i>
                     Pages</span></a>
             </li>
             <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='file-text'></i>
                     Services</span></a>
             </li>
             <li class="nav-item"><a class="d-flex align-items-center" href="#"><i
                         data-feather='message-square'></i> Messages</span></a>

             </li>
             <li class="nav-item "><a class="d-flex align-items-center" href="#"><i
                         data-feather='sliders'></i>Home-Carousel</a></li>
         </ul>
         <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
             <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
         </div>
         <div class="ps__rail-y" style="top: 0px; height: 257px; right: 0px;">
             <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 38px;"></div>
         </div>
     </div>
 </div>
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
     <div class="navbar-header">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">

                         <img class="img-responsive" src="" alt="">
                     </span>
                     <h2 class="brand-text">Plant House</h2>
                 </a></li>
             <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                         class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                         class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                         data-feather="disc" data-ticon="disc"></i></a></li>
         </ul>
     </div>
     <div class="shadow-bottom"></div>
     <div class="main-menu-content">
         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

             <li><a class="@if (Route::is('admin.home')) active @endif" href="/admin/home"><i
                         class="fa-solid fa-house"></i> Dashboard</a>
             </li>

             {{-- <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Projects</div>
                          </a>
                <ul class="menu-sub">
                    <li class="menu-item ">
                        <a href="{{route('admin.category')}}" class="menu-link menu-toggle">
                            <div>Category</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ route('admin.project') }}" class="menu-link menu-toggle">
                            <div>Lists</div>
                        </a>
                    </li>
                </ul>
            </li> --}}
             <li><a class="@if (Route::is('admin.category')) active @endif" href="{{ route('admin.category') }}">
                     <i class="fa-solid fa-chart-simple"></i> Category</a>
             </li>
             <li><a class="@if (Route::is('admin.product')) active @endif" href="{{ route('admin.product') }}">
                     <i class="fa-solid fa-chart-simple"></i> Products</a>
             </li>
             <li><a class="@if (Route::is('admin.page')) active @endif" href="{{ route('admin.page') }}">
                     <i class="fa-regular fa-file"></i> Pages</a>
             </li>
             <li><a class="@if (Route::is('admin.blog')) active @endif" href="{{ route('admin.blog') }}">
                     <i class="fa-regular fa-file"></i> Blogs</a>
             </li>
             <li><a class="@if (Route::is('admin.faq')) active @endif" href="{{ route('admin.faq') }}">
                     <i class="fa-solid fa-question"></i> Faqs</a>
             </li>
             {{-- <li class="menu-item ">
                 <a href="javascript:void(0)" class="menu-link menu-toggle">
                     <div>Account Settings</div>
                 </a>
                 <ul class="menu-sub">
                     <li class="menu-item ">
                         <a href="#" class="menu-link">
                             <div>Account</div>
                         </a>
                     </li>
                 </ul>
             </li> --}}

             @php
                 $mid = count($all_menus) == 0 ? 0 : $menuid;
                 $menuUrl = route('admin.menu', ['id' => $mid]);
             @endphp
             <li><a class="@if (Route::is($menuUrl)) active @endif" href="{{ $menuUrl }}">
                     <i class="fa-solid fa-bars"></i> Menu</a>
             </li>

             <li><a class="@if (Route::is('admin.sitesetting')) active @endif" href="{{ route('admin.sitesetting') }}">
                     <i class="fa-solid fa-gear"></i> Sitesettings</a>
             </li>


         </ul>
     </div>
 </div>
 <!-- END:  SIDEMenu-->
