@extends('frontend.master')
@section('title')
fabrist fashion
@endsection

@push('frontend_style')

@endpush

@section('main_body')

@include('frontend.inc_page.slide')

@include('frontend.inc_page.categoryBanner')
@include('frontend.inc_page.bestSeller')
@include('frontend.inc_page.bestSellerBanner')
@include('frontend.inc_page.newArrival')
@include('frontend.inc_page.serviceBanner')
@include('frontend.inc_page.newCollectionBanner')

@endsection

@push('frontend_js')

@endpush
