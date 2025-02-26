@extends('customer.master')
@section('customer')
@include('customer.compoents.home.banner')
@include('customer.compoents.home.category_area')

<div class="rts-grocery-feature-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left">
                        Featured Grocery
                    </h2>
                    <div class="next-prev-swiper-wrapper">
                        <div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="category-area-main-wrapper-one">
                    <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                        "spaceBetween":16,
                        "slidesPerView":6,
                        "loop": true,
                        "speed": 700,
                        "navigation":{
                            "nextEl":".swiper-button-next",
                            "prevEl":".swiper-button-prev"
                          },
                        "breakpoints":{
                        "0":{
                            "slidesPerView":1,
                            "spaceBetween": 12},
                        "320":{
                            "slidesPerView":1,
                            "spaceBetween":12},
                        "480":{
                            "slidesPerView":2,
                            "spaceBetween":12},
                        "640":{
                            "slidesPerView":2,
                            "spaceBetween":16},
                        "840":{
                            "slidesPerView":3,
                            "spaceBetween":16},
                        "1140":{
                            "slidesPerView":5,
                            "spaceBetween":16},
                        "1540":{
                            "slidesPerView":5,
                            "spaceBetween":16},
                        "1840":{
                            "slidesPerView":6,
                            "spaceBetween":16}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/01.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->

                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/02.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Peysan Full Fat Fresh Cottage Cheese</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/03.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Aptamil Gold+ ProNutra Biotik Stage...</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/04.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Abbott Pediasure Chocolate Refill Pack</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/05.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/06.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Aussie Bubs Goat Milk Infant Formula Stage 1,</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/15.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-category-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-card-main-over">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-area-between">
                                <h2 class="title-left mb--0">
                                    Hand Picked Products for 10% Offer
                                </h2>
                                <div class="next-prev-swiper-wrapper d-sm-none">
                                    <div class="swiper-button-prevs"><i class="fa-regular fa-chevron-left"></i></div>
                                    <div class="swiper-button-nexts"><i class="fa-regular fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- rts category area satart -->
                            <div class="rts-caregory-area-one ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="category-area-main-wrapper-one">
                                            <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                                                "spaceBetween":15,
                                                "slidesPerView":4,
                                                "loop": true,
                                                "speed": 1000,
                                                "navigation":{
                                                    "nextEl":".swiper-button-nexts",
                                                    "prevEl":".swiper-button-prevs"
                                                    },
                                                "breakpoints":{
                                                "0":{
                                                    "slidesPerView":1,
                                                    "spaceBetween": 15},
                                                "320":{
                                                    "slidesPerView":1,
                                                    "spaceBetween":15},
                                                "480":{
                                                    "slidesPerView":2,
                                                    "spaceBetween":15},
                                                "640":{
                                                    "slidesPerView":2,
                                                    "spaceBetween":15
                                                },
                                                "840":{
                                                    "slidesPerView":3,
                                                    "spaceBetween":15},
                                                "1140":{
                                                    "slidesPerView":4,
                                                    "spaceBetween":15}
                                                }
                                            }'>
                                                <div class="swiper-wrapper">
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-shopping-card-one tranding-product">
                                                            <a href="shop-details.html" class="thumbnail-preview">
                                                                <img src="assets/images/grocery/08.jpg" alt="grocery">
                                                            </a>
                                                            <div class="body-content">
                                                                <a href="shop-details.html">
                                                                    <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                                                </a>
                                                                <span class="availability">500g Pack</span>
                                                                <div class="price-area">
                                                                    <span class="current">$36.00</span>
                                                                    <div class="previous">$36.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-shopping-card-one tranding-product">
                                                            <a href="shop-details.html" class="thumbnail-preview">
                                                                <img src="assets/images/grocery/09.jpg" alt="grocery">
                                                            </a>
                                                            <div class="body-content">
                                                                <a href="shop-details.html">
                                                                    <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                                                </a>
                                                                <span class="availability">500g Pack</span>
                                                                <div class="price-area">
                                                                    <span class="current">$36.00</span>
                                                                    <div class="previous">$36.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-shopping-card-one tranding-product">
                                                            <a href="shop-details.html" class="thumbnail-preview">
                                                                <img src="assets/images/grocery/10.jpg" alt="grocery">
                                                            </a>
                                                            <div class="body-content">
                                                                <a href="shop-details.html">
                                                                    <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                                                </a>
                                                                <span class="availability">500g Pack</span>
                                                                <div class="price-area">
                                                                    <span class="current">$36.00</span>
                                                                    <div class="previous">$36.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-shopping-card-one tranding-product">
                                                            <a href="shop-details.html" class="thumbnail-preview">
                                                                <img src="assets/images/grocery/11.jpg" alt="grocery">
                                                            </a>
                                                            <div class="body-content">
                                                                <a href="shop-details.html">
                                                                    <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                                                </a>
                                                                <span class="availability">500g Pack</span>
                                                                <div class="price-area">
                                                                    <span class="current">$36.00</span>
                                                                    <div class="previous">$36.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-shopping-card-one tranding-product">
                                                            <a href="shop-details.html" class="thumbnail-preview">
                                                                <img src="assets/images/grocery/12.jpg" alt="grocery">
                                                            </a>
                                                            <div class="body-content">
                                                                <a href="shop-details.html">
                                                                    <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                                                </a>
                                                                <span class="availability">500g Pack</span>
                                                                <div class="price-area">
                                                                    <span class="current">$36.00</span>
                                                                    <div class="previous">$36.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-shopping-card-one tranding-product">
                                                            <a href="shop-details.html" class="thumbnail-preview">
                                                                <img src="assets/images/grocery/13.jpg" alt="grocery">
                                                            </a>
                                                            <div class="body-content">
                                                                <a href="shop-details.html">
                                                                    <h4 class="title">Pastine Mellin Filid Angelo 100% Di Grano Tenero</h4>
                                                                </a>
                                                                <span class="availability">500g Pack</span>
                                                                <div class="price-area">
                                                                    <span class="current">$36.00</span>
                                                                    <div class="previous">$36.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts category area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="weekly-best-selling-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left">
                        Weekly Best Selling Groceries
                    </h2>
                    <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Frozen Foods</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Diet Foods</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Healthy Foods</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vitamine-tab" data-bs-toggle="tab" data-bs-target="#vitamine" type="button" role="tab" aria-controls="vitamine" aria-selected="false">Vitamin Items</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <!-- first tabs area start-->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row g-4">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/15.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <span class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </span>
                                            <span class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </span>
                                            <span class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/16.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Rubio Extra Ordina Rias Spicy Paprika Flavour Crips</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/17.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Great Pumpkin Spice Wuick Bread & Muffin Mix</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Smartfood Popcorn, White Good Cheddar, Party Size!</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/19.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/20.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Peysan Full Fat Fresh Cottage Cheese</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/21.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Foster Farms Breast Nuggets Shaped Chicken</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/22.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/23.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">7 Varieties Pepperidge Farm Chocolate Collection</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/24.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Srorck Werther Original Popcorn, Classic Caramel</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/25.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Cheez-It Cheese Crackers, Baked Snack Crackers, Lunch ...</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/26.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Kellogg's Town House Oven Baked Crackers, Party Snacks,</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- first tabs area start-->

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row g-4">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/15.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/16.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Rubio Extra Ordina Rias Spicy Paprika Flavour Crips</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/17.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Great Pumpkin Spice Wuick Bread & Muffin Mix</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Smartfood Popcorn, White Good Cheddar, Party Size!</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/19.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/20.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Peysan Full Fat Fresh Cottage Cheese</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/21.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Foster Farms Breast Nuggets Shaped Chicken</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/22.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/23.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">7 Varieties Pepperidge Farm Chocolate Collection</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/24.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Srorck Werther Original Popcorn, Classic Caramel</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/25.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Cheez-It Cheese Crackers, Baked Snack Crackers, Lunch ...</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/26.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Kellogg's Town House Oven Baked Crackers, Party Snacks,</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row g-4">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/15.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/16.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Rubio Extra Ordina Rias Spicy Paprika Flavour Crips</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/17.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Great Pumpkin Spice Wuick Bread & Muffin Mix</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Smartfood Popcorn, White Good Cheddar, Party Size!</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/19.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/20.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Peysan Full Fat Fresh Cottage Cheese</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/21.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Foster Farms Breast Nuggets Shaped Chicken</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/22.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/23.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">7 Varieties Pepperidge Farm Chocolate Collection</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/24.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Srorck Werther Original Popcorn, Classic Caramel</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/25.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Cheez-It Cheese Crackers, Baked Snack Crackers, Lunch ...</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/26.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Kellogg's Town House Oven Baked Crackers, Party Snacks,</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="vitamine" role="tabpanel" aria-labelledby="vitamine-tab">
                        <div class="row g-4">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/15.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/16.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Rubio Extra Ordina Rias Spicy Paprika Flavour Crips</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/17.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Great Pumpkin Spice Wuick Bread & Muffin Mix</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Smartfood Popcorn, White Good Cheddar, Party Size!</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/19.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/20.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Peysan Full Fat Fresh Cottage Cheese</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/21.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Foster Farms Breast Nuggets Shaped Chicken</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/22.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits &
                                                Wheat with Milk</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/23.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">7 Varieties Pepperidge Farm Chocolate Collection</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/24.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Srorck Werther Original Popcorn, Classic Caramel</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/25.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Cheez-It Cheese Crackers, Baked Snack Crackers, Lunch ...</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/26.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>
                                            <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-arrows-retweet"></i>
                                            </div>
                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="shop-details.html">
                                            <h4 class="title">Kellogg's Town House Oven Baked Crackers, Party Snacks,</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
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


<div class="top-tranding-product rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left mb--10">
                        Top Trending Products
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-card-main-over">
                    <div class="row g-4">
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Pastine Mellin Filid</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/08.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Di Grano Tenero</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/09.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Mellin Grano Tenero</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/10.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Grano Tenero</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/11.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Jack Froot</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/12.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Fresh Mango</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/13.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Fresh Juice</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="shop-details.html" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/14.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="shop-details.html">
                                        <h4 class="title">Pastine Mellin</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">$36.00</span>
                                        <div class="previous">$36.00</div>
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

<div class="rts-blog-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-card-main-over">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-area-between">
                                <h2 class="title-left mb--0">
                                    Latest Blog Post Insights
                                </h2>
                                <div class="next-prev-swiper-wrapper">
                                    <div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
                                    <div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- rts category area satart -->
                            <div class="rts-caregory-area-one ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="category-area-main-wrapper-one">
                                            <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                                                "spaceBetween":1,
                                                "slidesPerView":1,
                                                "loop": true,
                                                "speed": 1000,
                                                "navigation":{
                                                    "nextEl":".swiper-button-next",
                                                    "prevEl":".swiper-button-prev"
                                                    },
                                                "breakpoints":{
                                                "0":{
                                                    "slidesPerView":1,
                                                    "spaceBetween": 15},
                                                "320":{
                                                    "slidesPerView":1,
                                                    "spaceBetween":15},
                                                "480":{
                                                    "slidesPerView":2,
                                                    "spaceBetween":15},
                                                "640":{
                                                    "slidesPerView":2,
                                                    "spaceBetween":15},
                                                "840":{
                                                    "slidesPerView":3,
                                                    "spaceBetween":15},
                                                "1140":{
                                                    "slidesPerView":4,
                                                    "spaceBetween":15}
                                                }
                                            }'>
                                                <div class="swiper-wrapper">
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-start">
                                                            <a href="blog-details.html" class="thumbnail">
                                                                <img src="assets/images/blog/01.jpg" alt="blog-area">
                                                            </a>
                                                            <div class="blog-body">
                                                                <div class="top-area">
                                                                    <div class="single-meta">
                                                                        <i class="fa-light fa-clock"></i>
                                                                        <span>15 Sep, 2023</span>
                                                                    </div>
                                                                    <div class="single-meta">
                                                                        <i class="fa-regular fa-folder"></i>
                                                                        <span>Modern Fashion</span>
                                                                    </div>
                                                                </div>
                                                                <a href="blog-details.html">
                                                                    <h4 class="title">
                                                                        Fashion Fixation: Fueling Your Passion
                                                                        for All Things Stylish
                                                                    </h4>
                                                                </a>
                                                                <a href="blog-details.html" class="shop-now-goshop-btn">
                                                                    <span class="text">Read Details</span>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-start">
                                                            <a href="blog-details.html" class="thumbnail">
                                                                <img src="assets/images/blog/02.jpg" alt="blog-area">
                                                            </a>
                                                            <div class="blog-body">
                                                                <div class="top-area">
                                                                    <div class="single-meta">
                                                                        <i class="fa-light fa-clock"></i>
                                                                        <span>15 Sep, 2023</span>
                                                                    </div>
                                                                    <div class="single-meta">
                                                                        <i class="fa-regular fa-folder"></i>
                                                                        <span>Modern Fashion</span>
                                                                    </div>
                                                                </div>
                                                                <a href="blog-details.html">
                                                                    <h4 class="title">
                                                                        Fashion Fixation: Fueling Your Passion
                                                                        for All Things Stylish
                                                                    </h4>
                                                                </a>
                                                                <a href="blog-details.html" class="shop-now-goshop-btn">
                                                                    <span class="text">Read Details</span>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-start">
                                                            <a href="blog-details.html" class="thumbnail">
                                                                <img src="assets/images/blog/03.jpg" alt="blog-area">
                                                            </a>
                                                            <div class="blog-body">
                                                                <div class="top-area">
                                                                    <div class="single-meta">
                                                                        <i class="fa-light fa-clock"></i>
                                                                        <span>15 Sep, 2023</span>
                                                                    </div>
                                                                    <div class="single-meta">
                                                                        <i class="fa-regular fa-folder"></i>
                                                                        <span>Modern Fashion</span>
                                                                    </div>
                                                                </div>
                                                                <a href="blog-details.html">
                                                                    <h4 class="title">
                                                                        Fashion Fixation: Fueling Your Passion
                                                                        for All Things Stylish
                                                                    </h4>
                                                                </a>
                                                                <a href="blog-details.html" class="shop-now-goshop-btn">
                                                                    <span class="text">Read Details</span>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-start">
                                                            <a href="blog-details.html" class="thumbnail">
                                                                <img src="assets/images/blog/04.jpg" alt="blog-area">
                                                            </a>
                                                            <div class="blog-body">
                                                                <div class="top-area">
                                                                    <div class="single-meta">
                                                                        <i class="fa-light fa-clock"></i>
                                                                        <span>15 Sep, 2023</span>
                                                                    </div>
                                                                    <div class="single-meta">
                                                                        <i class="fa-regular fa-folder"></i>
                                                                        <span>Modern Fashion</span>
                                                                    </div>
                                                                </div>
                                                                <a href="blog-details.html">
                                                                    <h4 class="title">
                                                                        Fashion Fixation: Fueling Your Passion
                                                                        for All Things Stylish
                                                                    </h4>
                                                                </a>
                                                                <a href="blog-details.html" class="shop-now-goshop-btn">
                                                                    <span class="text">Read Details</span>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-start">
                                                            <a href="blog-details.html" class="thumbnail">
                                                                <img src="assets/images/blog/01.jpg" alt="blog-area">
                                                            </a>
                                                            <div class="blog-body">
                                                                <div class="top-area">
                                                                    <div class="single-meta">
                                                                        <i class="fa-light fa-clock"></i>
                                                                        <span>15 Sep, 2023</span>
                                                                    </div>
                                                                    <div class="single-meta">
                                                                        <i class="fa-regular fa-folder"></i>
                                                                        <span>Modern Fashion</span>
                                                                    </div>
                                                                </div>
                                                                <a href="blog-details.html">
                                                                    <h4 class="title">
                                                                        Fashion Fixation: Fueling Your Passion
                                                                        for All Things Stylish
                                                                    </h4>
                                                                </a>
                                                                <a href="blog-details.html" class="shop-now-goshop-btn">
                                                                    <span class="text">Read Details</span>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                    <!-- single swiper start -->
                                                    <div class="swiper-slide">
                                                        <div class="single-blog-area-start">
                                                            <a href="blog-details.html" class="thumbnail">
                                                                <img src="assets/images/blog/02.jpg" alt="blog-area">
                                                            </a>
                                                            <div class="blog-body">
                                                                <div class="top-area">
                                                                    <div class="single-meta">
                                                                        <i class="fa-light fa-clock"></i>
                                                                        <span>15 Sep, 2023</span>
                                                                    </div>
                                                                    <div class="single-meta">
                                                                        <i class="fa-regular fa-folder"></i>
                                                                        <span>Modern Fashion</span>
                                                                    </div>
                                                                </div>
                                                                <a href="blog-details.html">
                                                                    <h4 class="title">
                                                                        Fashion Fixation: Fueling Your Passion
                                                                        for All Things Stylish
                                                                    </h4>
                                                                </a>
                                                                <a href="blog-details.html" class="shop-now-goshop-btn">
                                                                    <span class="text">Read Details</span>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <div class="plus-icon">
                                                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single swiper start -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts category area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
