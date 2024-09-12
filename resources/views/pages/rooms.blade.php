@extends('layouts.app')

@section('title', 'Rooms')

@section('content')
    @include('pages.rooms.page-intro')
    @include('pages.rooms.rooms')
@endsection

@push('styles')
    @vite([
        'resources/sass/rooms/rooms.scss',
    ])
@endpush
