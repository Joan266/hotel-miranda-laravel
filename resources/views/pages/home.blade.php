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
    <!-- Additional styles specific to this page -->
    @vite([
        'resources/sass/home/home.scss',
    ])
    <!-- External Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <!-- Additional scripts specific to this page -->
    @vite([
        'resources/js/swiper-init.js'
    ])
    <!-- External Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush