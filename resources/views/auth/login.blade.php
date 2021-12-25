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
                    <h2 class="title-custom">Login</h2>
                    <form action="index.html" method="POST">
                        <div class="mb-24">
                            <label for="email_address" class="form-label label-bold">Email Address</label>
                            <input type="email" class="form-control h-5" name="email_address" id="email_address" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-24">
                            <label for="password" class="form-label label-bold">Password</label>
                            <input type="password" class="form-control h-5" name="password" id="password">
                        </div>
                        <div class="mb-24 form-check">
                            <input type="checkbox" name="remember_me" class="form-check-input" id="remember_me">
                            <label class="form-check-label" for="remember_me">Keep me logged in</label>
                        </div>
                        <div class="mb-28 d-grid gap-2">
                            <button type="submit" class="btn btn-primary label-bold h-5">Login</button>
                        </div>
                        <p class="text-center priv"><a href="login.html" class="text-decoration-none">Forgot your Password?</a></p>
                        <p class="text-center priv">By signing in, you agree to our <a href="{{ route('terms') }}" class="text-decoration-none">terms of use</a> & <a href="{{ route('privacy') }}" class="text-decoration-none">Privacy Policy.</a></p>
                    </form>
                    </div>
                </div>
            </div>
        <div class="col  d-none d-md-block"></div>
    </div>
</div>
@endsection