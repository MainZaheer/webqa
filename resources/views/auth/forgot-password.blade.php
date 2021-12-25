@extends('layouts.guest')

@section("content")

<div class="container">
    <div class="row my-header">
        <div class="col">
            <img class="logo" src="{{ asset('images/logo.png') }}">
        </div>
        <div class="col-auto">
          <p class="mt-2 text-link">Need an account? <a href="register.html" class="text-decoration-none">Sign up</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col d-none d-md-block"></div>
            <div class="col">
                <div class="card-custom">
                    <div class="card-body-custom">
                    <h5 class="card-title-custom">Forgot Your Password ?</h5>
                    <p class="let">Enter the email address associated with your account and we'll send you a link to reset your password.</p>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="mb-24">
                            <label for="email" class="form-label label-bold">Email Address</label>
                            <input type="email" class="form-control h-5 {{ $errors->has('email') ? 'invalid' : ''  }}" name="email" id="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="feedback">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="d-grid gap-2 mb-28">
                            <button class="btn btn-primary h-5" type="submit">Send reset password link</button>
                        </div>
                        <p class="text-center priv"><a href="login.html" class="text-decoration-none">Back to Login</a></p>
                    </form>
                    </div>
                </div>
            </div>
        <div class="col  d-none d-md-block"></div>
    </div>
</div>
@endsection