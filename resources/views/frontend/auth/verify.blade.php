@extends('frontend.app')
@section('content')
    <!-- FOR-MOBILE-VIEW-HMTL-STARTS-FROM-HERE -->
    <section class="slidein-bdr po-relative">
        <div class="container">
            <div class="flex space-between align-center white-font">
                @if (auth()->check())
                    <h4>Hello! {{ auth()->user()->name }}</h4>
                @else
                    <div class="flex gap-60">
                        <a href="{{ route('signin') }}" title="Login" class="white-font">Login</a>
                        <a href="{{ route('signup') }}" title="Register" class="white-font">Register</a>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!-- FOR-MOBILE-VIEW-HMTL-ENDS-FROM-HERE -->
    <!-- MAIN-SECTION-STARTS-HERE -->
    <section class="banner-section login-section-banner pt-150 mb-60 before-h-80">
        <div class="container">
            <div class="white-font text-center pt-60 pb-80">
                <h3>Forget your password ? No worries reset here.</h3>
            </div>
        </div>
        <div class="container">
            <div class="login-form p-bg">
                <div class="flex justify-center main-box-shadow">
                    {{-- <a href="" class="btn primary-btn p-10-100 bdr-radius-0">Reset</a> --}}
                    {{-- <a href="{{ route('signin') }}" class="btn white-btn p-10-100 bdr-radius-0">Login</a> --}}
                </div>
                <form action="{{ route('verifyotp') }}" class="flex f-d-c gap-30 p-all-60" method="POST">
                    @csrf
                    <div class="flex f-d-c gap-10">
                        <label for="otp" class="white-font">Verification Code</label>
                        <p>Please Enter the verification code that is sent to your email.</p>
                        <input type="text" name="otp" id="otp">
                    </div>
                    <input type="hidden" name="user_id" value="{{ $user_id }}" id="">

                    <button type="submit" class="btn white-btn">Verify</button>
                </form>
                {{-- <form id="resendotp" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user_id }}" id="">
                    <button type="submit">Resend Code</button>
                </form> --}}
            </div>
        </div>
    </section>
    <!-- MAIN-SECTION-ENDS-HERE -->
    <!-- MOBILE-VIEW-STARTS-FROM-HERE -->
    <section class="mobile-login pt-35 pb-15">
        <div class="container">
            <div class="login-form p-bg">
                {{-- <div class="flex justify-center main-box-shadow">
                    <a href="" class="btn primary-btn p-10-100 bdr-radius-0">Reset</a>
                    <a href="{{ route('signin') }}" class="btn white-btn p-10-100 bdr-radius-0">Login</a>
                </div> --}}
                <form action="{{ route('verifyotp') }}" class="flex f-d-c gap-30 p-all-60" method="POST">
                    @csrf
                    <div class="flex f-d-c gap-10">
                        <label for="otp" class="white-font">Verification Code</label>
                        <input type="text" name="otp" id="otp">
                    </div>
                    <input type="hidden" name="user_id" value="{{ $user_id }}" id="">

                    <button type="submit" class="btn white-btn">Verify</button>
                </form>
                <form id="resendotp" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user_id }}" id="">
                    <button type="submit">Resend Code</button>
                </form>
            </div>
        </div>
    </section>
@endsection
