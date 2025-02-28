@extends('customer.master')
@section('customer')

<div class="rts-cart-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="row g-5">

            @if ($items->count() > 0)
            <div class="col-xl-9 col-lg-12 col-md-12 col-12 order-2 order-xl-1 order-lg-2 order-md-2 order-sm-2">
                <div class="cart-area-main-wrapper">
                    <div class="cart-top-area-note">
                        <p>Add <span>$59.69</span> to cart and get free shipping</p>
                        <div class="bottom-content-deals mt--10">
                            <div class="single-progress-area-incard">
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rts-cart-list-area">
                    <div class="single-cart-area-list head">
                        <div class="product-main">
                            <P>Name</P>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>
                        <div class="quantity">
                            <p>Quantity</p>
                        </div>
                        <div class="subtotal">
                            <p>SubTotal</p>
                        </div>
                    </div>
                    @foreach ($items as $item)
                        <div class="single-cart-area-list main  item-parent">
                            <div class="product-main-cart">
                                <div class="close section-activation">
                                    <i class="fa-regular fa-x"></i>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset($item->image) }}" alt="shop">
                                </div>
                                <div class="information">
                                    <h6 class="title">{{ $item->name }}</h6>
                                    <span>{{ $item->sku }}</span>
                                </div>
                            </div>
                            <div class="price">
                                <p>{{ $item->price }}</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-edit">
                                    <input type="text" class="input" name="quantity" value="{{ $item->qty }}">
                                    <div class="button-wrapper-action">
                                        <form action="{{ route('cart.decrease',['rowId'=>$item->rowId]) }}" method="POST">
                                            @csrf
                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                        </form>
                                        
                                        <form action="{{ route('cart.increase',['rowId'=>$item->rowId]) }}" method="POST">
                                            @csrf
                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="subtotal">
                                <p>{{ $item->subtotal }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="bottom-cupon-code-cart-area">
                        <form action="#">
                            <input type="text" placeholder="Cupon Code">
                            <button class="rts-btn btn-primary">Apply Coupon</button>
                        </form>
                        <a href="#" class="rts-btn btn-primary mr--50">Clear All</a>
                    </div>

                </div>
            </div>


            <div class="col-xl-3 col-lg-12 col-md-12 col-12 order-1 order-xl-2 order-lg-1 order-md-1 order-sm-1">
                <div class="cart-total-area-start-right">
                    <h5 class="title">Cart Totals</h5>
                    <div class="subtotal">
                        <span>Subtotal</span>
                        <h6 class="price">${{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</h6>
                    </div>
                    <div class="shipping">
                        <span>Shipping</span>
                        <ul>
                            <li>
                                <input type="radio" id="f-option" name="selector">
                                <label for="f-option">Free Shipping</label>

                                <div class="check"></div>
                            </li>

                            <li>
                                <input type="radio" id="s-option" name="selector">
                                <label for="s-option">Flat Rate</label>

                                <div class="check">
                                    <div class="inside"></div>
                                </div>
                            </li>

                            <li>
                                <input type="radio" id="t-option" name="selector">
                                <label for="t-option">Local Pickup</label>

                                <div class="check">
                                    <div class="inside"></div>
                                </div>
                            </li>
                            <li>
                                <p>VAT</p>
                                <p>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->tax() }}</p>
                            </li>

                            <li>
                                <p>Shipping options will be updated
                                    during checkout</p>
                                <p class="bold">Calculate Shipping</p>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <div class="wrapper">
                            <span>total</span>
                            <h6 class="price">{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->total() }}</h6>
                        </div>
                        <div class="button-area">
                            <button class="rts-btn btn-primary">Proceed To Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <p>No item found in your cart</p>
            <a href="" class="btn btn-sm btn-success">Shop Now</a>
            @endif
        </div>
    </div>
</div>

@endsection
