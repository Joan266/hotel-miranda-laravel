@extends('layouts.app')

@section('title', 'Room Details')

@section('content')
    @include('pages.roomdetails.page-intro')
    <section class="room-details container"> 
        @include('pages.roomdetails.info')
        @include('pages.roomdetails.form') 
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">
    @vite([
        'resources/sass/common.scss',
        'resources/sass/roomdetails/roomdetails.scss',
    ])
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite([
        'resources/js/swiper-init.js',
        'resources/js/flatpickr-init.js',
    ])
@endpush
