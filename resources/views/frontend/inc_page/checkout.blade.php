<div class="banner-wrapper has_background">
    <img src="{{ asset('assets') }}/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447"
        alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Checkout</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Checkout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>

                        <div class="checkout-before-top">

                            <div class="akasha-checkout-login">
                                <div class="akasha-notices-wrapper"></div>
                                <form class="checkout_coupon akasha-form-coupon" method="post"
                                    action="{{ route('coupon.apply') }}">
                                    @csrf
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <p class="form-row form-row-first">
                                        <input type="text" name="coupon_code" class="input-text"
                                            placeholder="Coupon code" id="coupon_code" value="" required>
                                    </p>
                                    <p class="form-row form-row-last">
                                        <button type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                            Apply coupon
                                        </button>
                                    </p>

                                    <div class="clear"></div>
                                </form>


                            </div>


                        </div>

                        <form name="checkout" method="post" class="checkout akasha-checkout"
                            action="{{ route('place.order') }}" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="akasha-billing-fields">
                                        <h3>Billing details</h3>
                                        <div class="akasha-billing-fields__field-wrapper">

                                            <p class="form-row form-row-wide adchair-field validate-required"
                                                id="billing_city_field" data-priority="70"
                                                data-o_class="form-row form-row-wide adchair-field validate-required">
                                                <label for="billing_city" class="">Name &nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                        class="input-text " name="name" id="billing_city"
                                                        placeholder="" value="{{ $user_data->name }}"
                                                        autocomplete="adchair-level2" required></span>
                                            </p>

                                            <p class="form-row form-row-wide" id="billing_company_field"
                                                data-priority="30"><label for="billing_company"
                                                    class="">Address&nbsp;<span
                                                        class="optional"></span></label><span
                                                    class="akasha-input-wrapper"><input type="text"
                                                        class="input-text " name="address" id="billing_company"
                                                        placeholder="" value="{{ $user_data->address }}"
                                                        autocomplete="organization" required></span>
                                            </p>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 col-12">
                                                    <p>District*</p>
                                                    <select id="district_id"
                                                        class="form-control js-example-basic-single @error('district_id')
                                                            is-invalid
                                                        @enderror"
                                                        name="district_id">
                                                        <option selected disabled>Select a district</option>

                                                        @foreach ($district as $value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}
                                                            </option>
                                                        @endforeach


                                                    </select>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <p>Town/Upazila*</p>
                                                    <select id="upazila_id" name="upazila_id"
                                                        class="form-control js-example-basic-single @error('upazila_id')
                                                        is-invalid
                                                    @enderror">
                                                        <option value="">Select a upazila</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <p class="form-row form-row-wide validate-required validate-phone mt-5"
                                                id="billing_phone_field" data-priority="100"><label
                                                    for="billing_phone" class="">Phone&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="tel"
                                                        class="input-text " name="phone" id="billing_phone"
                                                        placeholder="" value="{{ $user_data->phone }}" autocomplete="tel" required></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-email"
                                                id="billing_email_field" data-priority="110"><label
                                                    for="billing_email" class="">Email &nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="akasha-input-wrapper"><input type="email"
                                                        class="input-text " name="email" id="billing_email"
                                                        placeholder="" value="{{ $user_data->email }}"
                                                        autocomplete="email username" required></span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2">
                                    <div class="akasha-shipping-fields">
                                    </div>
                                    <div class="akasha-additional-fields">
                                        <h3>Additional information</h3>
                                        <div class="akasha-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                                <label for="order_comments" class="">Order notes&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="akasha-input-wrapper">
                                                    <textarea name="massage" class="input-text " id="order_comments"
                                                        placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="akasha-checkout-review-order">
                                <table class="shop_table akasha-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($carts as $value)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $value->name }} <strong class="product-quantity">×
                                                        {{ $value->quantity }}</strong>

                                                        <br>
                                                        <span>Size: <strong>{{ $value->attributes->size }}</strong></span>

                                                    </td>
                                                <td class="product-total">
                                                    <span class="akasha-Price-amount amount"><span
                                                            class="akasha-Price-currencySymbol">$</span>{{ $value->price * $value->quantity }}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$
                                                    </span>
                                                    @if (Session::has('coupon'))
                                                        {{ Session::get('coupon')['balance'] }} <del
                                                            class="text-danger">${{ Session::get('coupon')['cart_total'] }}</del>
                                                    @else
                                                        {{ $total_price }}
                                                    @endif
                                                </span>
                                                <br>

                                                @if (Session::has('coupon'))
                                                    <a href="{{ route('coupon.remove', ['coupon_name']) }}"
                                                        class="remove h6" aria-label="Remove this item">× <b
                                                            class="text-danger">{{ Session::get('coupon')['coupon_name'] }}</b>
                                                        is Applied</a>
                                                @endif
                                            </td>
                                        </tr>

                                        <tr class="cart-subtotal">
                                            <th>
                                                <span>Delivery options :</span>

                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" id="insideDhaka" name="deliveryOption" value="80" onclick="updateDeliveryCharge()" checked>
                                                    <label class="form-check-label" for="insideDhaka">Inside Dhaka: 80</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="outsideDhaka" name="deliveryOption" value="110" onclick="updateDeliveryCharge()">
                                                    <label class="form-check-label" for="outsideDhaka">Outside Dhaka: 110</label>
                                                </div>

                                            </th>
                                            <td>
                                                <span class="akasha-Price-amount amount">
                                                <span class="akasha-Price-currencySymbol">$</span>
                                                <span id="deliveryCharge">80</span>
                                            </span>

                                    </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="akasha-Price-amount amount"><span
                                                            class="akasha-Price-currencySymbol">$
                                                        </span>
                                                        @if (Session::has('coupon'))
                                                            {{ Session::get('coupon')['balance'] }}
                                                        @else
                                                            {{ $total_price }}
                                                        @endif
                                                    </span></strong>

                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <input type="hidden" name="lang" value="en">
                                <div id="payment" class="akasha-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">

                                        <li class="wc_payment_method payment_method_cod">
                                            <input id="payment_method_cod" type="radio" class="input-radio"
                                                name="payment_method" value="cod" data-order_button_text="">
                                            <label for="payment_method_cod">
                                                Cash on delivery </label>
                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>
                                            Since your browser does not support JavaScript, or it is disabled, please
                                            ensure you click the <em>Update Totals</em> button before placing your
                                            order. You may be charged more than the amount stated above if you fail to
                                            do so. <br />
                                            <button type="submit" class="button alt"
                                                name="akasha_checkout_update_totals" value="Update totals">
                                                Update totals
                                            </button>
                                        </noscript>
                                        <div class="akasha-terms-and-conditions-wrapper">
                                            <div class="akasha-privacy-policy-text">
                                                <p>Your personal data will be
                                                    used to process your order, support your experience throughout this
                                                    website, and for other purposes described in our <a href="#"
                                                        class="akasha-privacy-policy-link" target="_blank">privacy
                                                        policy</a>.</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="button alt" name="akasha_checkout_place_order"
                                            id="place_order" value="Place order" data-value="Place order">Place
                                            order
                                        </button>
                                        <input type="hidden" id="akasha-process-checkout-nonce"
                                            name="akasha-process-checkout-nonce" value="634590c981"><input
                                            type="hidden" name="_wp_http_referer"
                                            value="/akasha/?akasha-ajax=update_order_review">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
