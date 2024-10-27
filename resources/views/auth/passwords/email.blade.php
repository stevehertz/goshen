@extends('auth.layouts.app')

@section('title', 'Forgot Password | ' . config('app.name'))

@section('content')
    <p class="login-box-msg">
        You forgot your password? Here you can easily retrieve a new password.
    </p>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required
                autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-outline-success btn-block">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    @if (Route::has('login'))
        <p class="mt-3 mb-1">
            <a href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        </p>
    @endif
@endsection
