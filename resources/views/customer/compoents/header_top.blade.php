<!-- rts header area start -->
<div class="rts-header-one-area-one">
    <div class="header-top-area bg_primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bwtween-area-header-top header-top-style-four">
                        <div class="hader-top-menu">
                            <a href="#">About Us</a>
                            <a href="{{ route('customer.dashboard') }}">My Account </a>
                            <a href="#">Wishlist</a>
                            <a href="#">Order Tracking</a>
                        </div>
                        <p>Welcome to our Organic store EkoMart!</p>
                        <div class="follow-us-social">
                            <span>Follow Us:</span>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-regular fa-basketball"></i></a>
                                <a href="#"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-header-area-main-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-header-area-main bg_white without-category">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo-search-category-wrapper style-five-call-us">
                                        <a href="index.html" class="logo-area">
                                            <img src="{{ asset('assets/images/zamanshops.png') }}" alt="logo-main" class="logo">
                                        </a>
                                        <div class="category-search-wrapper style-five">
                                            <div class="location-area">
                                                <div class="icon">
                                                    <i class="fa-regular fa-phone-volume"></i>
                                                </div>
                                                <div class="information">
                                                    <span>Hotline Number</span>
                                                    <a href="#">
                                                        <p>+880 1751-957700</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <form action="#" class="search-header">
                                                <input type="text" placeholder="Search for products, categories"
                                                    required="">
                                                <a href="javascript: void(0);"
                                                    class="rts-btn btn-primary radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Search
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-light fa-magnifying-glass"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-light fa-magnifying-glass"></i>
                                                    </div>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="accont-wishlist-cart-area-header">
                                            <a href="{{ route('customer.dashboard') }}" class="btn-border-only account">
                                                <i class="fa-light fa-user"></i>
                                                Account
                                            </a>
                                            <a href="{{ route('wishlist.index') }}" class="btn-border-only wishlist">
                                                <i class="fa-regular fa-heart"></i>
                                                Wishlist
                                                @if (Surfsidemedia\Shoppingcart\Facades\Cart::instance('wishlist')->content()->count() > 0)
                                                    <span
                                                        class="number">{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('wishlist')->content()->count() }}</span>
                                                @endif

                                            </a>
                                            <div class="btn-border-only cart category-hover-header">
                                                <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                <span class="text">My Cart</span>
                                                @if (Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->content()->count() > 0)
                                                    <span
                                                        class="number">{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->content()->count() }}</span>
                                                @endif
                                                {{-- <div class="category-sub-menu card-number-show">
                                                    <h5 class="shopping-cart-number">Shopping Cart (03)</h5>
                                                    <div class="cart-item-1 border-top">
                                                        <div class="img-name">
                                                            <div class="thumbanil">
                                                                <img src="assets/images/shop/cart-1.png" alt="">
                                                            </div>
                                                            <div class="details">
                                                                <a href="shop-details.html">
                                                                    <h5 class="title">Foster Farms Breast Nuggets
                                                                        Shaped Chicken</h5>
                                                                </a>
                                                                <div class="number">
                                                                    1 <i class="fa-regular fa-x"></i>
                                                                    <span>$36.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="close-c1">
                                                            <i class="fa-regular fa-x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item-1">
                                                        <div class="img-name">
                                                            <div class="thumbanil">
                                                                <img src="assets/images/shop/05.png" alt="">
                                                            </div>
                                                            <div class="details">
                                                                <a href="shop-details.html">
                                                                    <h5 class="title">Foster Farms Breast Nuggets
                                                                        Shaped Chicken</h5>
                                                                </a>
                                                                <div class="number">
                                                                    1 <i class="fa-regular fa-x"></i>
                                                                    <span>$36.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="close-c1">
                                                            <i class="fa-regular fa-x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item-1">
                                                        <div class="img-name">
                                                            <div class="thumbanil">
                                                                <img src="assets/images/shop/04.png" alt="">
                                                            </div>
                                                            <div class="details">
                                                                <a href="shop-details.html">
                                                                    <h5 class="title">Foster Farms Breast Nuggets
                                                                        Shaped Chicken</h5>
                                                                </a>
                                                                <div class="number">
                                                                    1 <i class="fa-regular fa-x"></i>
                                                                    <span>$36.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="close-c1">
                                                            <i class="fa-regular fa-x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sub-total-cart-balance">
                                                        <div class="bottom-content-deals mt--10">
                                                            <div class="top">
                                                                <span>Sub Total:</span>
                                                                <span class="number-c">$108.00</span>
                                                            </div>
                                                            <div class="single-progress-area-incard">
                                                                <div class="progress">
                                                                    <div class="progress-bar wow fadeInLeft"
                                                                        role="progressbar" style="width: 80%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <p>Spend More <span>$125.00</span> to reach <span>Free
                                                                    Shipping</span></p>
                                                        </div>
                                                        <div
                                                            class="button-wrapper d-flex align-items-center justify-content-between">
                                                            <a href="{{ url('cart') }}"
                                                                class="rts-btn btn-primary ">View Cart</a>
                                                            <a href="checkout.html"
                                                                class="rts-btn btn-primary border-only">CheckOut</a>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <a href="{{ url('cart') }}" class="over_link"></a>
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
    </div>
    <div class="rts-header-nav-area-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="nav-and-btn-wrapper">
                        <div class="nav-area-bottom-left-header-four">
                            <div class="category-btn category-hover-header five-style">
                                <img class="parent" src="assets/images/icons/14.svg" alt="icons">
                                <span class="ml--10">Select Location</span>
                                <ul class="category-sub-menu" id="category-active-four">
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/01.svg" alt="icons">
                                            <span>Locations</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">loc-1</a></li>
                                            <li><a class="mobile-menu-link" href="#">loc-2</a></li>
                                            <li><a class="mobile-menu-link" href="#"> loc-3</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="nav-area">
                                <nav>
                                    <ul class="parent-nav">
                                        {{-- <li class="parent has-dropdown">
                                            <a class="nav-link" href="#">Home</a>

                                        </li> --}}
                                        <li class="parent"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="parent with-megamenu">
                                            <a href="#">Shop</a>
                                            <div class="rts-megamenu">
                                                <div class="wrapper">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-8">
                                                            <div class="megamenu-item-wrapper">
                                                                <!-- single item areas start -->
                                                                <div class="single-megamenu-wrapper">
                                                                    <p class="title">Shop Layout</p>
                                                                    <ul>
                                                                        <li><a href="shop-grid-sidebar.html">Shop Grid
                                                                                Sidebar</a></li>
                                                                        <li><a href="shop-list-sidebar.html">Shop list
                                                                                Sidebar</a></li>
                                                                        <li><a href="shop-grid-top-filter.html">Shop
                                                                                Top Filter Grid</a></li>
                                                                        <li><a href="shop-list-top-filter.html">Shop
                                                                                Top Filter List</a></li>
                                                                    </ul>
                                                                </div>
                                                                <!-- single item areas end -->
                                                                <!-- single item areas start -->
                                                                <div class="single-megamenu-wrapper">
                                                                    <p class="title">Shop Details</p>
                                                                    <ul>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details.html">Shop
                                                                                Details</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details-2.html">Shop Details
                                                                                V2</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details-right-sidebar.html">Shop
                                                                                Details V3</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details-4.html">Shop Details
                                                                                V4</a></li>
                                                                    </ul>
                                                                </div>
                                                                <!-- single item areas end -->
                                                                <!-- single item areas start -->
                                                                <div class="single-megamenu-wrapper">
                                                                    <p class="title">Product Feature</p>
                                                                    <ul>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details-variable.html">Variable
                                                                                product</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details-affiliats.html">Affiliate
                                                                                product</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="shop-details-group.html">Shop
                                                                                Details Group</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="shop-compare.html">Shop
                                                                                Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                                <!-- single item areas end -->
                                                                <!-- single item areas start -->
                                                                <div class="single-megamenu-wrapper">
                                                                    <p class="title">Shop Others</p>
                                                                    <ul>
                                                                        <li><a class="sub-b"
                                                                                href="cart.html">Cart</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="checkout.html">Checkout</a></li>
                                                                        <li><a class="sub-b"
                                                                                href="trackorder.html">Track Order</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- single item areas end -->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <a href="shop-grid-sidebar.html"
                                                                class="feature-add-megamenu-area">
                                                                <img src="assets/images/feature/05.jpg"
                                                                    alt="feature_product">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="parent has-dropdown">
                                            <a class="nav-link" href="#">Vendors</a>
                                            {{-- <ul class="submenu">
                                                <li><a class="sub-b" href="vendor-list.html">Vendor List</a></li>
                                                <li><a class="sub-b" href="vendor-grid.html">Vendor Grid</a></li>
                                                <li><a class="sub-b" href="vendor-details.html">Vendor Details</a>
                                                </li>
                                            </ul> --}}
                                        </li>

                                        <li class="parent has-dropdown">
                                            <a class="nav-link" href="#">Blog</a>
                                            {{-- <ul class="submenu">
                                                <li><a class="sub-b" href="blog.html">Blog</a></li>
                                                <li><a class="sub-b" href="blog-list-left-sidebar.html">Blog List
                                                        Right Sidebar</a></li>
                                                <li><a class="sub-b" href="blog-list-right-sidebar.html">Blog List
                                                        Left Sidebar</a></li>
                                                <li><a class="sub-b" href="blog-details.html">Blog Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="parent"><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="right-btn-area header-five">
                            <a href="#" class="btn-narrow">Trending Products</a>
                            <button class="rts-btn btn-primary">
                                Get 30% Discount Now
                                <span>Sale</span>
                            </button>
                        </div>
                        <!-- button-area end -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="logo-search-category-wrapper after-md-device-header header-mid-five-call">
                        <a href="index.html" class="logo-area">
                            <img src="assets/images/logo/logo-01.svg" alt="logo-main" class="logo">
                        </a>
                        <div class="category-search-wrapper">
                            <div class="category-btn category-hover-header">
                                <img class="parent" src="assets/images/icons/bar-1.svg" alt="icons">
                                <span>Categories</span>
                                <ul class="category-sub-menu">
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/01.svg" alt="icons">
                                            <span>Breakfast & Dairy</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/02.svg" alt="icons">
                                            <span>Meats & Seafood</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/03.svg" alt="icons">
                                            <span>Breads & Bakery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/04.svg" alt="icons">
                                            <span>Chips & Snacks</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/05.svg" alt="icons">
                                            <span>Medical Healthcare</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/06.svg" alt="icons">
                                            <span>Breads & Bakery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/07.svg" alt="icons">
                                            <span>Biscuits & Snacks</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/08.svg" alt="icons">
                                            <span>Frozen Foods</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/09.svg" alt="icons">
                                            <span>Grocery & Staples</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-item">
                                            <img src="assets/images/icons/10.svg" alt="icons">
                                            <span>Other Items</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <form action="#" class="search-header">
                                <input type="text" placeholder="Search for products, categories or brands"
                                    required>
                                <button class="rts-btn btn-primary radious-sm with-icon">
                                    <span class="btn-text">
                                        Search
                                    </span>
                                    <span class="arrow-icon">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </span>
                                    <span class="arrow-icon">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                        <div class="main-wrapper-action-2 d-flex">
                            <div class="accont-wishlist-cart-area-header">
                                <a href="account.html" class="btn-border-only account">
                                    <i class="fa-light fa-user"></i>
                                    Account
                                </a>
                                <a href="wishlist.html" class="btn-border-only wishlist">
                                    <i class="fa-regular fa-heart"></i>
                                    Wishlist
                                </a>
                                <div class="btn-border-only cart category-hover-header">
                                    <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                    <span class="text">My Cart</span>
                                    <div class="category-sub-menu card-number-show">
                                        <h5 class="shopping-cart-number">Shopping Cart (03)</h5>
                                        <div class="cart-item-1 border-top">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="assets/images/shop/cart-1.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="shop-details.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken
                                                        </h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>$36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item-1">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="assets/images/shop/05.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="shop-details.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken
                                                        </h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>$36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item-1">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="assets/images/shop/04.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="shop-details.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken
                                                        </h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>$36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="sub-total-cart-balance">
                                            <div class="bottom-content-deals mt--10">
                                                <div class="top">
                                                    <span>Sub Total:</span>
                                                    <span class="number-c">$108.00</span>
                                                </div>
                                                <div class="single-progress-area-incard">
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" role="progressbar"
                                                            style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <p>Spend More <span>$125.00</span> to reach <span>Free Shipping</span>
                                                </p>
                                            </div>
                                            <div
                                                class="button-wrapper d-flex align-items-center justify-content-between">
                                                <a href="cart.html" class="rts-btn btn-primary ">View Cart</a>
                                                <a href="checkout.html"
                                                    class="rts-btn btn-primary border-only">CheckOut</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="cart.html" class="over_link"></a>
                                </div>
                            </div>
                            <div class="actions-area">
                                <div class="search-btn" id="search">

                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z"
                                            fill="#1F1F25"></path>
                                    </svg>

                                </div>
                                <div class="menu-btn" id="menu-btn">

                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts header area end -->
