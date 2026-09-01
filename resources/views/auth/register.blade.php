@extends('layouts.guest')

@section('title', 'Sign Up')

@section('content')
<div class="login-userheading">
  <h3>Sign Up</h3>
  <h4>Create a staff account</h4>
</div>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('register') }}">
  @csrf

  <div class="form-login">
    <label>Name</label>
    <div class="form-addons">
      <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autofocus>
    </div>
  </div>

  <div class="form-login">
    <label>Email</label>
    <div class="form-addons">
      <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>
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
    <label>Confirm Password</label>
    <div class="pass-group">
      <input type="password" name="password_confirmation" class="pass-input" placeholder="Confirm your password" required>
      <span class="fas toggle-password fa-eye-slash"></span>
    </div>
  </div>

  <div class="form-login">
    <button type="submit" class="btn btn-login">Sign Up</button>
  </div>

  <div class="signinform text-center">
    <h4>Already have an account? <a href="{{ route('login') }}" class="hover-a">Sign In</a></h4>
  </div>
</form>
@endsection
