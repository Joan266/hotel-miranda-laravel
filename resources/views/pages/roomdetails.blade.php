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
    @vite([
        'resources/sass/common.scss',
        'resources/sass/roomdetails/roomdetails.scss',
    ])
@endpush

@push('scripts')
    @vite([
        'resources/js/swiper-init.js'
    ])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush