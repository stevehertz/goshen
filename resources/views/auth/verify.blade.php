@extends('auth.layouts.app')

@section('title', 'Verify Email | ' . config('app.name'))

@section('content')

    <p class="login-box-msg">
        {{ __('Verify Your Email Address') }}
    </p>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <p class="login-box-msg">
            {{ __('Before proceeding, please check your email for a verification link.') }}
        </p>
        <p class="login-box-msg">
            {{ __('If you did not receive the email') }},
        </p>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-outline-success btn-block">
                    {{ __('click here to request another') }}
                </button>
            </div>
            <!-- /.col -->
        </div>
    </form>
@endsection
