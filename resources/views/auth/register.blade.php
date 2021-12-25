@extends('layouts.guest')
@section("content")

<div class="container">
    <div class="row my-header">
        <div class="col">
            <img class="logo" src="{{ asset('images/logo.png') }}">
        </div>
        <div class="col-auto">
            <p class="text-phone"><a href="{{ route('login') }}" class="btn btn-login">Login</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md">
            <h1 class="text-analyze">Analyze Website Quality, Compliance and Performance</h1>
            <img src="{{ asset('images/register.png') }}" class="img-custom d-none d-md-block">
        </div>
        <div class="col-sm-12 col-md-auto">
            <div class="card-custom">
                <div class="card-body-custom">
                    <h5 class="title-custom">Get Your Free Account</h5>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-24">
                            <label for="name" class="form-label label-bold">Name</label>
                            <input type="text" class="form-control h-5 {{ $errors->has('name') ? 'invalid' : ''  }}" name="name" id="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="feedback">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-24">
                            <label for="email" class="form-label label-bold">Email address</label>
                            <input type="email" class="form-control h-5 {{ $errors->has('email') ? 'invalid' : ''  }}" name="email" id="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="feedback">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        
                        <div class="mb-24">
                            <label for="password" class="form-label label-bold">Password</label>
                            <input type="password" class="form-control h-5 {{ $errors->has('password') ? 'invalid' : ''  }}" name="password" id="password">
                            @if ($errors->has('password'))
                                <span class="feedback">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="mb-24">
                            <label for="password_confirmation" class="form-label label-bold">Confirm Password</label>
                            <input type="password" class="form-control h-5 {{ $errors->has('password') ? 'invalid' : ''  }}" name="password_confirmation" id="password_confirmation">
                        </div>

                        <div class="d-grid gap-2 mb-28">
                            <button type="submit" class="btn btn-primary h-5">Sign Up</button>
                        </div>
                        <p class="text-center priv">By signing in, you agree to our <a href="{{ route('terms') }}" class="text-decoration-none">terms of use</a> & <a href="{{ route('privacy') }}" class="text-decoration-none">Privacy Policy.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection