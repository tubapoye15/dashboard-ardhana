@extends('layouts.guest')

@section('title', 'Sign In')

@section('content')
<div class="login-userheading">
  <h3>Sign In</h3>
  <h4>Please login to your account</h4>
</div>

@if ($errors->any())
  <div class="alert alert-danger">
    {{ $errors->first() }}
  </div>
@endif

<form method="POST" action="{{ route('login') }}">
  @csrf

  <div class="form-login">
    <label>Email</label>
    <div class="form-addons">
      <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autofocus>
      <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="img">
    </div>
  </div>

  <div class="form-login">
    <label>Password</label>
    <div class="pass-group">
      <input type="password" name="password" class="pass-input" placeholder="Enter your password" required>
      <span class="fas toggle-password fa-eye-slash"></span>
    </div>
  </div>

  <div class="form-login">
    <div class="alreadyuser">
      <label class="custom_check">
        <input type="checkbox" name="remember">
        <span class="checkmark"></span> Remember me
      </label>
    </div>
  </div>

  <div class="form-login">
    <button type="submit" class="btn btn-login">Sign In</button>
  </div>

  <div class="signinform text-center">
    <h4>Don&rsquo;t have an account? <a href="{{ route('register') }}" class="hover-a">Sign Up</a></h4>
  </div>
</form>
@endsection
