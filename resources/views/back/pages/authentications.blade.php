@extends('back.templates.authentications')
@section('title')
@section('content')
<div class="row">
  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
    <div class="login-brand">
      <img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
    </div>

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    @if(Session::get('fail'))
      <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <div class="card card-primary">
      <div class="card-header"><h4>Login</h4></div>

      <div class="card-body">
        <form method="POST" action="{{ route('postlogin') }}" class="needs-validation">
          @csrf
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
          </div>

          <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
          </div>

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
              <label class="custom-control-label" for="remember-me">Remember Me</label>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
              Login
            </button>
          </div>
        </form>

      </div>
    </div>
    <div class="mt-5 text-muted text-center">
      Dont have an account? <a href="auth-register.html">Create One</a>
    </div>
  </div>
</div>
@endsection