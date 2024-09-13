@extends('layouts.app')

@section('title', 'Offers')

@section('content')
    @include('pages.offers.page-intro')
    @include('pages.offers.offers')
    @include('pages.offers.popular')
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite([
        'resources/sass/common.scss',
        'resources/sass/offers/offers.scss',
    ])    
@endpush

@push('scripts')
    @vite([
        'resources/js/swiper-init.js'
    ])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush