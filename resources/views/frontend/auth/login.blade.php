@extends('frontend.app')
@section('content')
<div class="login-container">
    <div class="login-card">
        <h1>Login</h1>
      <form class="login-form">
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <p>Don't have an account yet? <br> <a href="/signup" class="text-primary">Create account</a></p>
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
