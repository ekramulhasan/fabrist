
<div class="section-001">
    <div class="container">
        <div class="akasha-heading style-01">
            <div class="heading-inner">
                <h3 class="title">New Arrival</h3>
                <div class="subtitle">
                    Made with care for your little ones, our products are perfect for every occasion. Check it out.
                </div>
            </div>
        </div>
        <div class="akasha-products style-01">
            <div class="response-product product-list-owl owl-slick equal-container better-height"
            data-slick='{
                "arrows": true,
                "slidesMargin": 0,
                "dots": true,
                "infinite": true,
                "speed": 300,
                "autoplay": true,
                "autoplaySpeed": 3000,
                "slidesToShow": 4,
                "rows": 1
            }'
            data-responsive='[
                {"breakpoint": 480, "settings": {"slidesToShow": 4, "slidesMargin": 0}},
                {"breakpoint": 768, "settings": {"slidesToShow": 4, "slidesMargin": 0}},
                {"breakpoint": 992, "settings": {"slidesToShow": 4, "slidesMargin": 0}},
                {"breakpoint": 1200, "settings": {"slidesToShow": 4, "slidesMargin": 0}},
                {"breakpoint": 1500, "settings": {"slidesToShow": 4, "slidesMargin": 0}}
            ]'
            >

                 @foreach ($product as $value)
                    <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                    href="{{ route('productDetails.page',[$value->slug]) }}" tabindex="0">
                                    <img class="img-responsive"
                                        src="{{ asset('assets/uploads/products') }}/{{ $value->product_img }}"
                                        alt="Black Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="akasha product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="{{ route('productDetails.page',[$value->slug]) }}"
                                        tabindex="0">{{ $value->title }}</a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">$</span>{{ $value->price }}</span></span>
                            </div>
                        </div>
                    </div>
                 @endforeach

            </div>
        </div>
    </div>
</div>
