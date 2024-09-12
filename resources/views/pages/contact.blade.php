@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    @include('pages.contact.page-intro')
    @include('pages.contact.options')
    @include('pages.contact.map')
    @include('pages.contact.form')
@endsection

@push('styles')
    @vite([
        'resources/sass/contact/contact.scss',
    ])
@endpush
