@extends('layouts.app')

@section('title', 'About us')

@section('content')
  @include('pages.aboutus.page-intro')
  @include('pages.aboutus.about-us')
  @include('pages.aboutus.facilities')
  @include('pages.aboutus.counter')
@endsection

@push('styles')
    @vite([
        'resources/sass/aboutus/aboutus.scss',
    ])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
    @vite([
        'resources/js/swiper-init.js'
    ])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush