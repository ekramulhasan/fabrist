@extends('frontend.master')
@section('title')
    Order | Page
@endsection

@push('frontend_style')

    <style>
        @media (max-width: 600px) {
            .button-container {
                flex-direction: column;
            }

            .button-container .add-to-cart {
                margin: 0 15px;
            }

        }
    </style>

@endpush

@section('main_body')
    @include('frontend.inc_page.singleProduct')
@endsection

@push('frontend_js')
@endpush
