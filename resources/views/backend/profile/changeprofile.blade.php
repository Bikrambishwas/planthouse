@extends('backend.app')
@section('content')
    <!--PAGE HEADER-->
    <div class="contents">
        <div class="row">
            <div class="col-md-6">
                <h3>Profile Setting</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a> </li>
                    <li class="breadcrumb-item active"> Profile Settings</li>
                </ol>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
    <!--PAGE HEADER-->
    <!--MAIN CONTENT-->
    <div class="row mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.update-profile') }}" method="POST">
                        @csrf
                        <div class="my-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ auth()->user()->name }}" id="name">

                                                @if ($errors->any('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ auth()->user()->email }}" id="email">

                                                @if ($errors->any('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Contact Number</label>
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ auth()->user()->phone }}" id="phone">

                                                @if ($errors->any('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    value="{{ auth()->user()->address }}" id="address">

                                                @if ($errors->any('address'))
                                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.update_password') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="old_password">Old Password</label>
                                <input type="password" name="old_password" class="form-control" id="old_password">

                                @if ($errors->any('old_password'))
                                    <span class="text-danger">{{ $errors->first('old_password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" class="form-control" id="new_password">
                                @if ($errors->any('new_password'))
                                    <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                                @if ($errors->any('confirm_password'))
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="body-mycards">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--MAIN CONTENT-->
@endsection
