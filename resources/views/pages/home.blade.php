@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('pages.home.intro')
    @include('pages.home.about-us')
    @include('pages.home.rooms')
    @include('pages.home.intro-video')
    @include('pages.home.facilities')
    @include('pages.home.food-menu')
    @include('pages.home.stats')
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">
    @vite([
        'resources/sass/common.scss',
        'resources/sass/home/home.scss',
    ])
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite([
        'resources/js/swiper-init.js',
        'resources/js/home.js',
    ])
@endpush