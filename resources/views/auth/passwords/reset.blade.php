@extends('auth.layouts.app')

@section('title', 'Reset Password | ' . config('app.name'))

@section('content')
    <p class="login-box-msg">
        You are only one step a way from your new password, recover your password now.
    </p>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="{{ __('Email Address') }}" name="email" value="{{ $email ?? old('email') }}" required
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
        <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}"
                name="password_confirmation" required autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Reset Password') }}
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
