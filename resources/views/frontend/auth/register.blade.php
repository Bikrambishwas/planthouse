@extends('frontend.app')
@section('content')
<div class="login-container">
    <div class="login-card">
        <h1>Register</h1>
      <form class="login-form">
        <input type="text" placeholder="Full name" required>
        <input type="email" placeholder="Email" required>
        <input type="phone" placeholder="Phone" required>
        <input type="password" placeholder="Password" required>
        <div class="login-buttons">
          <a type="submit" class="login-button btn btn-success btn-sm">Login</a>
          <a href="/" class="register-button">Return To Store</a>
        </div>
      </form>
      <p class="my-4">OR</p>
      <a href="" class="fb-login social-login">
        Login with Facebook
      </a>
       <a href="" class="google-login social-login">
        Login with Google
      </a>
    </div>
  </div>
@endsection
