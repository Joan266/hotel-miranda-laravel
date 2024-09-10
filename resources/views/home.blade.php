@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('home.intro')
    @include('home.about-us')
    @include('home.rooms')
    @include('home.intro-video')
    @include('home.facilities')
    @include('home.food-menu')
    @include('home.stats')
@endsection

@push('styles')
    <!-- Additional styles specific to this page -->
    @vite([
        'resources/sass/home/home.scss',
        'resources/sass/home/swiper/facilities.scss',
        'resources/sass/home/swiper/food.scss',
        'resources/sass/home/swiper/menu.scss',
        'resources/sass/home/swiper/rooms.scss'
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