@extends('frontend.app')
@section('content')
      <section>
          <div class="container-lg">
              <div class="dashboard-wrapper">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <div class="d-flex align-items-center " style="gap: 20px">
                                     <img width="80px" height="auto" src="{{ asset('frontend/assets/images/user.jpg') }}" alt="">
                                     <div>
                                        <h4>Bikram Bishwas</h4>
                                        <p><i class="fa-regular fa-clock"></i> 03:41:11 PM</p>
                                     </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks active" id="stacked-pill-1" data-bs-toggle="pill"
                                    href="#vertical-pill-1" aria-expanded="true">
                                    My Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-2" data-bs-toggle="pill"
                                    href="#vertical-pill-2" aria-expanded="false">
                                    Delivery Address
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-3" data-bs-toggle="pill"
                                    href="#vertical-pill-3" aria-expanded="false">
                                    My Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-4" data-bs-toggle="pill"
                                    href="#vertical-pill-4" aria-expanded="false">
                                    My Cart
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-5" data-bs-toggle="pill"
                                    href="#vertical-pill-5" aria-expanded="false">
                                    Change Password
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="class="nav-link mylinks""><i class="fa-solid fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="vertical-pill-1"
                                aria-labelledby="stacked-pill-1" aria-expanded="true">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>My Profile</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="vertical-pill-2" role="tabpanel" aria-labelledby="stacked-pill-2"
                                aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Delivery Address</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="vertical-pill-3" role="tabpanel" aria-labelledby="stacked-pill-3"
                                aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>My Orders</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="vertical-pill-4" role="tabpanel" aria-labelledby="stacked-pill-4"
                                aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Cart Details</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="vertical-pill-5" role="tabpanel" aria-labelledby="stacked-pill-5"
                                aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Change Password</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

            </div>
              </div>
          </div>
      </section>
@endsection
