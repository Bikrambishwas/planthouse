@extends('frontend.app')
@section('content')
    <!-- FOR-MOBILE-VIEW-HMTL-STARTS-FROM-HERE -->
    <section class="slidein-bdr po-relative">
        <div class="container">
            <div class="flex space-between align-center white-font">
                <h4>Hello! User</h4>
                <div class="flex gap-60">
                    <a href="{{ route('signin') }}" title="Login" class="white-font">Login</a>
                    <a href="{{ route('signup') }}" title="Register" class="white-font">Register</a>
                </div>
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
                <form id="sendmail" class="flex f-d-c gap-30 p-all-60" method="POST">
                    @csrf
                    <div class="flex f-d-c gap-10">
                        <label for="email" class="white-font">Registered Email Address</label>
                        <input type="text" name="email" id="email">
                        <span class="invalid-feedback email_error"></span>

                    </div>
                    <button type="submit" class="btn white-btn">Send Mail</button>
                </form>
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
                <form id="sendmail" class="flex f-d-c gap-30 p-all-60" method="POST">
                    @csrf
                    <div class="flex f-d-c gap-10">
                        <label for="email" class="white-font">Registered Email Address</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <button type="submit" class="btn white-btn">Send Mail</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        $('#sendmail').submit(function(e) {
            e.preventDefault();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/forgetpassword',
                data: new FormData(this),
                contentType: false,
                processData: false,
                async: false,
                beforeSend: function() {
                    $(document).find('span.invalid-feedback').text('');
                },
                success: function(response) {
                    if (response.status == 400) {
                        $.each(response.errors, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                        $('.danger-toast-message').html(response.message);
                        const toast = new bootstrap.Toast('.danger-toast')
                        toast.show();
                    } else {
                        $('.success-toast-message').html(response.message);
                        const toast = new bootstrap.Toast('.success-toast')
                        toast.show();
                        setTimeout(function() {
                            window.location = '/resetpassword_view';
                        }, 1000);
                    }
                }
            });
        });
    </script>
@endsection
