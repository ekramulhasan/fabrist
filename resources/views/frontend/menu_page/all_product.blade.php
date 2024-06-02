@extends('frontend.master')
@section('title')
Products | Page
@endsection

@push('frontend_style')

@endpush

@section('main_body')

<div class="section-001">
    <div class="container mt-5">
        <div class="akasha-heading style-01">
            <div class="heading-inner">
                <h3 class="title">All Products</h3>
                <div class="subtitle">Made with care for your little ones, our products are perfect for every
                    occasion. Check it out.
                </div>
            </div>
        </div>
        <div class="akasha-products style-02">
            <div class="response-product product-list-owl owl-slick equal-container better-height"
                data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}"
                data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">

                @foreach ($product as $value)

                <div
                    class="product-item featured_products style-02 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link" href="{{ route('productDetails.page',[$value->slug]) }}" tabindex="0">
                                <img class="img-responsive" src="{{ asset('assets/uploads/products') }}/{{ $value->product_img }}"
                                    alt="Maternity Shoulder" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span>
                            </div>
                            <a href="#" class="button yith-wcqv-button">Quick View</a>
                        </div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong>
                                        out of 5</span></div>
                                <span class="review">(0)</span>
                            </div>
                            <h3 class="product-name product_title">
                                <a href="{{ route('productDetails.page',[$value->slug]) }}" tabindex="0">{{ $value->title }}</a>
                            </h3>
                            <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">$</span>{{ $value->price }}</span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="{{ route('productDetails.page',[$value->slug]) }}" class="button product_type_grouped">
                                    View products</a>
                            </div>
                            <div class="akasha product compare-button">
                                <a href="#" class="compare button">Compare</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


                </div>
            </div>
            <div class="col-12 text-center d-flex justify-content-center ">
{{--
                <div class="py-3">

                    {{ $product->links() }}

                </div> --}}

            </div>
        </div>
    </div>
</div>


@endsection

@push('frontend_js')

@endpush
