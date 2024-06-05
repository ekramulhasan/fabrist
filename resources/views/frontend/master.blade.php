@php
    $categories      = App\Models\category::where( 'isActive', 1 )->with( 'product' )->latest( 'id' )->select( ['id', 'title', 'slug'] )->get();
    $categoryWithSub = App\Models\category::where('isActive',1)->with(['subCategoryes.subsubcategories'])->latest( 'id' )->select(['id', 'title', 'slug'] )->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.css.css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@include('frontend.inc_page.header')

<div class="fullwidth-template">

@yield('main_body')

</div>
@include('frontend.inc_page.footer')
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="{{ route('home') }}">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="{{ route('cart.page') }}">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="{{ route('cart.page') }}">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">

            @auth
                <a href="{{ route('customer.profile') }}">
                    <span class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                Account
                </a>
                @else
                <a href="/login">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Login
            </a>
            @endauth

        </div>
    </div>
</div>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@include('frontend.js.js')
</body>
</html>
