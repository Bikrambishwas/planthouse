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
                                    <img width="80px" height="auto" src="{{ asset('frontend/assets/images/user.jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>Bikram Bishwas</h4>
                                        <p><i class="fa-regular fa-clock"></i> 03:41:11 PM</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks active" id="stacked-pill-1" data-bs-toggle="pill"
                                    href="#vertical-pill-1" aria-expanded="true">
                                    <i class="fa-solid fa-user"></i> My Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-2" data-bs-toggle="pill"
                                    href="#vertical-pill-2" aria-expanded="false">
                                    <i class="fa-solid fa-location-dot"></i> Delivery Address
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-3" data-bs-toggle="pill"
                                    href="#vertical-pill-3" aria-expanded="false">
                                    <i class="fa-solid fa-truck"></i> My Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-4" data-bs-toggle="pill"
                                    href="#vertical-pill-4" aria-expanded="false">
                                    <i class="fa-solid fa-cart-shopping"></i> My Cart
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-5" data-bs-toggle="pill"
                                    href="#vertical-pill-5" aria-expanded="false">
                                    <i class="fa-solid fa-lock"></i> Change Password
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link mylinks"><i class="fa-solid fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="vertical-pill-1"
                                aria-labelledby="stacked-pill-1" aria-expanded="true">
                                <div class="row my-4">
                                    <div class="col-md-12 text-center">
                                        <h3>Good Afternone! Bikram</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card"
                                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border: none;">
                                            <div class="card-body">
                                                <form action="" class="my-3">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">First Name</label>
                                                            <input type="text" placeholder="First Name"
                                                                class="form-control" name="first_name" id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Last Name</label>
                                                            <input type="text" placeholder="Last Name"
                                                                class="form-control" name="last_name" id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Email</label>
                                                            <input type="text" class="form-control" name="email"
                                                                id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Contact Number</label>
                                                            <input type="text" class="form-control" name="phone"
                                                                id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Birthdate</label>
                                                            <input type="date" class="form-control" name="dob"
                                                                id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Gender</label>
                                                            <div class="d-flex" style="gap: 10px">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDisabled1" id="flexRadioDisabled1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDisabled1">
                                                                        Male
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDisabled2"
                                                                        id="flexRadioCheckedDisabled2" checked>
                                                                    <label class="form-check-label"
                                                                        for="flexRadioCheckedDisabled2">
                                                                        Female
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDisabled3"
                                                                        id="flexRadioCheckedDisabled3">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioCheckedDisabled3">
                                                                        None
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-12 my-2 d-flex align-items-center justify-content-center">
                                                            <button type="submit" class=" btn btn-primary">Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="vertical-pill-2" role="tabpanel" aria-labelledby="stacked-pill-2"
                                aria-expanded="false">
                                <div class="row my-4">
                                    <div class="col-md-12 text-center">
                                        <h3>Good Afternone! Bikram</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card"
                                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border: none;">
                                            <div class="card-body">
                                                <form action="" class="my-3">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">First Name</label>
                                                            <input type="text" placeholder="First Name"
                                                                class="form-control" name="first_name" id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Last Name</label>
                                                            <input type="text" placeholder="Last Name"
                                                                class="form-control" name="last_name" id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Address Line
                                                                1</label>
                                                            <input type="text" class="form-control"
                                                                name="address_line_one" placeholder="Address Line 1"
                                                                id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Address Line
                                                                2</label>
                                                            <input type="text" class="form-control"
                                                                name="address_line_two" placeholder="Address Line 2"
                                                                id="">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="" class="form-label">Contact
                                                                Number</label>
                                                            <input type="number" class="form-control" name="phone"
                                                                placeholder="Contact Number" id="">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="" class="form-label">Company</label>
                                                            <input type="text" class="form-control" name="company"
                                                                placeholder="Company" id="">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="" class="form-label">Postal/Zip
                                                                Code</label>
                                                            <input type="text" class="form-control" name="postal_code"
                                                                placeholder="Postal or Zip Code" id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">City</label>
                                                            <select name="city" class="form-control" id="">
                                                                <option value="" selected disabled hidden>Choose City
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="" class="form-label">Country</label>
                                                            <select name="Country" class="form-control" id="">
                                                                <option value="" selected disabled hidden>Choose
                                                                    Country</option>
                                                            </select>
                                                        </div>
                                                        <div
                                                            class="col-md-12 my-2 d-flex align-items-center justify-content-center">
                                                            <button type="submit"
                                                                class=" btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="vertical-pill-3" role="tabpanel" aria-labelledby="stacked-pill-3"
                                aria-expanded="false">
                                <div class="row my-4">
                                    <div class="col-md-12 text-center">
                                        <h3>Good Afternone! Bikram</h3>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card"
                                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border: none;">
                                            <div class="card-body"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="vertical-pill-4" role="tabpanel" aria-labelledby="stacked-pill-4"
                                aria-expanded="false">
                                <div class="row my-4">
                                    <div class="col-md-12 text-center">
                                        <h3>Good Afternone! Bikram</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card"
                                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border: none;">
                                            <div class="card-body"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="vertical-pill-5" role="tabpanel" aria-labelledby="stacked-pill-5"
                                aria-expanded="false">
                                <div class="row my-4">
                                    <div class="col-md-12 text-center">
                                        <h3>Good Afternone! Bikram</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card"
                                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border: none;">
                                            <div class="card-body text-center">
                                                <p>Update you password for</p>
                                                <strong>bikrambishwas00@gmail.com</strong>
                                                <form action="" class="my-3">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <input type="text" placeholder="Old Password"
                                                                class="form-control" name="old_passowrd" id="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <input type="text" placeholder="New Password"
                                                                class="form-control" name="new_passowrd" id="">
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <input type="text" placeholder="Confirm Password"
                                                                class="form-control" name="confirm_passowrd"
                                                                id="">
                                                        </div>
                                                        <div
                                                            class="col-md-12 my-2 d-flex align-items-center justify-content-center">
                                                            <button type="submit" class=" btn btn-primary">Update
                                                                Password</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
