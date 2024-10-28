@extends('frontend.layouts.safari.app')

@section('title', 'Our Products - ' . config('app.name'))

@section('content')
    <br>
    @include('frontend.includes.safari.products')

@endsection
