<header id="header" class="header style-02 header-dark header-transparent header-sticky">

    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-middle">
                <div class="akasha-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img alt="Akasha" src="{{ asset('assets') }}/images/fabrist.png"
                                                      class="logo"></a></div>
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Home" href="/">Home</a>
                                </li>
                                <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Shop"
                                       href="{{ route('allproduct.page') }}">Products</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-shop">
                                        <div class="row">

                                            @foreach ($categoryWithSub as $value)

                                                <div class="col-md-4 mt-3">

                                                    <div class="akasha-listitem style-01">
                                                        <div class="listitem-inner">
                                                            <h4 class="title">{{ $value->title }}</h4>
                                                            <ul class="listitem-list">

                                                                @foreach ($value->subCategoryes as $subCategory)
                                                                <li>
                                                                    <a href="{{ route('mensproduct.page',['slug' => $subCategory->slug]) }}" target="_self">{{ $subCategory->title }}</a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                    </div>
                                </li>
                                <li id="menu-item-229"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="{{ route('allproduct.page') }}">Shop</a>
                                    {{-- <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-elements">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Element 1 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="banner.html"
                                                                   target="_self">Banner </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-element.html"
                                                                   target="_self">Blog Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="categories-element.html"
                                                                   target="_self">
                                                                    Categories Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-element.html"
                                                                   target="_self">
                                                                    Product Element </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Element 2 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="client.html"
                                                                   target="_self">
                                                                    Client </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-layout.html"
                                                                   target="_self">
                                                                    Product Layout </a>
                                                            </li>
                                                            <li>
                                                                <a href="google-map.html"
                                                                   target="_self">
                                                                    Google map </a>
                                                            </li>
                                                            <li>
                                                                <a href="iconbox.html"
                                                                   target="_self">
                                                                    Icon Box </a>
                                                            </li>
                                                            <li>
                                                                <a href="team.html"
                                                                   target="_self">
                                                                    Team </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Element 3 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="instagram-feed.html"
                                                                   target="_self">
                                                                    Instagram Feed </a>
                                                            </li>
                                                            <li>
                                                                <a href="newsletter.html"
                                                                   target="_self">
                                                                    Newsletter </a>
                                                            </li>
                                                            <li>
                                                                <a href="testimonials.html"
                                                                   target="_self">
                                                                    Testimonials </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li id="menu-item-996"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Blog"
                                       href="/about">About</a>
                                    {{-- <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-blog">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Blog Layout </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="blog.html" target="_self">No Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html" target="_self">Blog Standard </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html" target="_self">Blog Grid </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Post Layout </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-post.html" target="_self">No
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-instagram.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="{{ asset('assets') }}/images/label-hot.jpg"
                                                                             class="attachment-full size-full" alt="img">
                                                                    </span>
                                                                    Instagram In Post
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-product.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="{{ asset('assets') }}/images/label-new.jpg"
                                                                             class="attachment-full size-full" alt="img">
                                                                    </span>
                                                                    Product In Post
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Post Format </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-post.html" target="_self">Standard </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-gallery.html" target="_self">Gallery </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-video.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="{{ asset('assets') }}/images/label-hot.jpg"
                                                                             class="attachment-full size-full" alt="img">
                                                                    </span>
                                                                    Video
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="akasha-menu-item-title" title="Pages" href="/contact">Contact</a>
                                    {{-- <span class="toggle-submenu"></span>
                                    <ul role="menu" class="submenu">
                                        <li id="menu-item-987"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                            <a class="akasha-menu-item-title" title="About"
                                               href="/about">About</a></li>
                                        <li id="menu-item-988"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                            <a class="akasha-menu-item-title" title="Contact"
                                               href="/contact">Contact</a></li>
                                        <li id="menu-item-990"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                            <a class="akasha-menu-item-title" title="Page 404"
                                               href="404.html">Page 404</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-control">
                        <div class="header-control-inner">
                            <div class="meta-dreaming">
                                <ul class="wpml-menu">
                                    {{-- <li class="menu-item akasha-dropdown block-language">
                                        <a href="#" data-akasha="akasha-dropdown">
                                            <img src="{{ asset('assets') }}/images/en.png"
                                                 alt="en" width="18" height="12">
                                            English
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="#">
                                                    <img src="{{ asset('assets') }}/images/it.png"
                                                         alt="it" width="18" height="12">
                                                    Italiano
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <div class="wcml-dropdown product wcml_currency_switcher">
                                            <ul>
                                                <li class="wcml-cs-active-currency">
                                                    <a class="wcml-cs-item-toggle">USD</a>
                                                    <ul class="wcml-cs-submenu">
                                                        <li>
                                                            <a>EUR</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                </ul>
                                <div class="header-search akasha-dropdown">
                                    <div class="header-search-inner" data-akasha="akasha-dropdown">
                                        <a href="#" class="link-dropdown block-link">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </a>
                                    </div>
                                    <div class="block-search">
                                        <form role="search" method="get"
                                              class="form-search block-search-form akasha-live-search-form">
                                            <div class="form-content search-box results-search">
                                                <div class="inner">
                                                    <input autocomplete="off" class="searchfield txt-livesearch input"
                                                           name="s" value="" placeholder="Search here..." type="text">
                                                </div>
                                            </div>
                                            <input name="post_type" value="product" type="hidden">
                                            <input name="taxonomy" value="product_cat" type="hidden">
                                            <div class="category">
                                                <select title="product_cat" name="product_cat" id="64788262"
                                                        class="category-search-option"
                                                        tabindex="-1" style="display: none;">
                                                    <option value="0">All Categories</option>
                                                    <option class="level-0" value="light">Shoes</option>
                                                    <option class="level-0" value="chair">Accessories</option>
                                                    <option class="level-0" value="table">Bags</option>
                                                    <option class="level-0" value="bed">Life style</option>
                                                    <option class="level-0" value="new-arrivals">New arrivals</option>
                                                    <option class="level-0" value="lamp">Summer Sale</option>
                                                    <option class="level-0" value="specials">Specials</option>
                                                    <option class="level-0" value="sofas">Women</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn-submit">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </button>
                                        </form><!-- block search -->
                                    </div>
                                </div>
                                <div class="akasha-dropdown-close">x</div>
                                <div class="menu-item block-user block-dreaming akasha-dropdown">
                                    <a class="block-link" href="/login">
                                        <span class="flaticon-profile"></span>
                                    </a>

                                    @auth
                                        <ul class="sub-menu">
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                                <a href="{{ route('customer.profile') }}">Profile</a>
                                            </li>
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                                <a href="{{ route('cart.page') }}">ViewCart</a>
                                            </li>
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--downloads">
                                                <a href="{{ route('cutomer.checkout') }}">Checkout</a>
                                            </li>

                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                                <a href="#">Account details</a>
                                            </li>
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                                <a href="{{ route('customer.logout') }}">Logout</a>
                                            </li>
                                        </ul>
                                    @else

                                        <ul class="sub-menu">
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                                <a href="/login">Login</a>
                                            </li>

                                        </ul>

                                    @endauth

                                </div>
                                <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                                    <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                                        <a class="block-link link-dropdown" href="cart.html">
                                            <span class="flaticon-bag"></span>
                                            <span class="count">
                                                @php
                                                $item = \Cart::getContent();
                                                echo $item->count();
                                                @endphp</span>
                                        </a>
                                    </div>
                                    <div class="widget akasha widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <h3 class="minicart-title">Your Cart<span class="minicart-number-items">
                                                @php
                                                $item = \Cart::getContent();
                                                echo $item->count();
                                                @endphp</span></h3>
                                            <ul class="akasha-mini-cart cart_list product_list_widget">

                                                @php
                                                    $items = \Cart::getContent();
                                                    $subTotal = \Cart::getSubTotal();
                                                @endphp

                                                @foreach ( $items as $value )
                                                    <li class="akasha-mini-cart-item mini_cart_item">
                                                        <a href="{{ route('remove_item',[$value->id]) }}" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/uploads/products') }}/{{ $value->attributes->product_img }}"
                                                                    class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                                    alt="img" width="600" height="778">{{ $value->name }}&nbsp;
                                                        </a>
                                                        <span class="quantity">{{ $value->quantity }} × <span
                                                                class="akasha-Price-amount amount"><span
                                                                class="akasha-Price-currencySymbol">$</span>{{ $value->price*$value->quantity }}</span></span>
                                                    </li>
                                                @endforeach


                                            </ul>
                                            <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                                <span class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>{{ $subTotal }}</span>
                                            </p>
                                            <p class="akasha-mini-cart__buttons buttons">
                                                <a href="{{ route('cart.page') }}" class="button akasha-forward">Viewcart</a>
                                                <a href="{{ route('cutomer.checkout') }}" class="button checkout akasha-forward">Checkout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search akasha-dropdown">
                <div class="header-search-inner" data-akasha="akasha-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form akasha-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat"
                                    class="category-search-option" tabindex="-1"
                            >
                                <option value="0">All Categories</option>
                                <option class="level-0" value="light">Shoes</option>
                                <option class="level-0" value="chair">Accessories</option>
                                <option class="level-0" value="table">Bags</option>
                                <option class="level-0" value="bed">Life style</option>
                                <option class="level-0" value="new-arrivals">New arrivals</option>
                                <option class="level-0" value="lamp">Summer Sale</option>
                                <option class="level-0" value="specials">Specials</option>
                                <option class="level-0" value="sofas">Women</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item akasha-dropdown block-language">
                    <a href="#" data-akasha="akasha-dropdown">
                        <img src="{{ asset('assets') }}/images/en.png"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="{{ asset('assets') }}/images/it.png"
                                     alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="wcml-dropdown product wcml_currency_switcher">
                        <ul>
                            <li class="wcml-cs-active-currency">
                                <a class="wcml-cs-item-toggle">USD</a>
                                <ul class="wcml-cs-submenu">
                                    <li>
                                        <a>EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Akasha" src="{{ asset('assets') }}/images/fabrist.png" class="logo"></a>
            </div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming akasha-dropdown">
                        <a class="block-link" href="/login">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">

                            @auth
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                    <a href="{{ route('customer.profile') }}">Profile</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                    <a href="{{ route('cart.page') }}">ViewCart</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--downloads">
                                    <a href="{{ route('cutomer.checkout') }}">Checkout</a>
                                </li>

                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                    <a href="#">Account details</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                    <a href="{{ route('customer.logout') }}">Logout</a>
                                </li>
                                @else
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                    <a href="/login">Login</a>
                                </li>
                            @endauth

                        </ul>
                    </div>
                    <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                            <a class="block-link link-dropdown" href="#">
                                <span class="flaticon-bag"></span>
                                <span class="count">
                                    @php
                                        $item = \Cart::getContent();
                                        echo $item->count();
                                    @endphp</span>
                            </a>
                        </div>
                        <div class="widget akasha widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Your Cart<span class="minicart-number-items">
                                    @php
                                        $item = \Cart::getContent();
                                        echo $item->count();
                                    @endphp</span></h3>
                                <ul class="akasha-mini-cart cart_list product_list_widget">

                                    @php
                                        $items = \Cart::getContent();
                                        $subTotal = \Cart::getSubTotal();
                                    @endphp

                                    @foreach ( $items as $value )

                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="{{ route('remove_item',[$value->id]) }}" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="{{ asset('assets/uploads/products') }}/{{ $value->attributes->product_img }}"
                                                        class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                        alt="img" width="600" height="778">{{ $value->name }}&nbsp;
                                            </a>
                                            <span class="quantity">{{ $value->quantity }} × <span
                                                    class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span>{{ $value->price*$value->quantity }}</span></span>
                                        </li>
                                    @endforeach

                                </ul>
                                <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                    <span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">$</span>{{ $subTotal }}</span>
                                </p>
                                <p class="akasha-mini-cart__buttons buttons">
                                    <a href="{{ route('cart.page') }}" class="button akasha-forward">Viewcart</a>
                                    <a href="{{ route('cutomer.checkout') }}" class="button checkout akasha-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
