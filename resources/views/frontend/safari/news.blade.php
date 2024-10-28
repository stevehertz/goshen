@extends('frontend.layouts.safari.app')

@section('title', 'Our Products - ' . config('app.name'))

@section('content')
    <div class="py-5">
        @include('frontend.includes.safari.blog')
    </div>
@endsection
