@extends('layouts.guest')

@section("content")

<div class="container">
    <div class="row my-header">
        <div class="col">
            <a href="{{ route('welcome') }}"><img class="logo" src="{{ asset('images/logo.png') }}"></a>
        </div>
        <div class="col-auto">
          <p class="mt-2 text-link">Need an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col d-none d-md-block"></div>
            <div class="col">
                <div class="card-custom">
                    <div class="card-body-custom">
                        @if (session('status'))
                        <h5 class="card-title-custom">Email sent.</h5>
                        <p class="let">A link has been sent to your email, head over to your email to reset your password.</p>
                        @else
                            <h5 class="card-title-custom">Forgot Your Password ?</h5>
                            <p class="let">Enter the email address associated with your account and we'll send you a link to reset your password.</p>
                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="mb-24">
                                    <label for="email" class="form-label label-bold">Email Address</label>
                                    <input type="email" class="form-control h-5 {{ $errors->has('email') ? 'invalid' : ''  }}" name="email" id="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="feedback">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid gap-2 mb-28">
                                    <button class="btn btn-primary h-5" type="submit">Send reset password link</button>
                                </div>
                                <p class="text-center priv"><a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a></p>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        <div class="col  d-none d-md-block"></div>
    </div>
</div>
@endsection