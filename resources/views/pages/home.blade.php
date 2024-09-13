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
    @vite([
        'resources/sass/common.scss',
        'resources/sass/home/home.scss',
    ])
@endpush

@push('scripts')
    @vite([
        'resources/js/swiper-init.js'
    ])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush