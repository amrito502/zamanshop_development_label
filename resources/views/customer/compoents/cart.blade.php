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
                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <form action="{{ route('cart.remove', ['rowId' => $item->rowId]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="close section-activation">
                                                <button type="submit"><i class="fa-regular fa-x"></i></button>
                                            </div>
                                        </form>

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
                                            <input type="text" class="input" name="quantity"
                                                value="{{ $item->qty }}">
                                            <div class="button-wrapper-action">
                                                <form action="{{ route('cart.decrease', ['rowId' => $item->rowId]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="button cart_qty_decrease"><i
                                                            class="fa-regular fa-chevron-down"></i></button>
                                                </form>

                                                <form action="{{ route('cart.increase', ['rowId' => $item->rowId]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="button cart_qty_increase plus">+<i
                                                            class="fa-regular fa-chevron-up"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="subtotal">
                                        <p>{{ $item->subtotal }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="mt-5 mx-5">
                                @if (Session::has('success'))
                                    <p class="text-success">{{ Session::get('success') }}</p>
                                @elseif(Session::has('error'))
                                    <p class="text-danger">{{ Session::get('error') }}</p>
                                @endif
                            </div>
                            <div class="bottom-cupon-code-cart-area">

                                <form action="{{ Session::has('coupon') ? route('remove.coupon.code') : route('apply.coupon.code') }}" method="POST">
                                    @csrf
                                    @if (Session::has('coupon'))
                                        @method('DELETE')
                                        <input type="text" name="coupon_code"
                                            value="{{ Session::get('coupon')['code'] }} Applied!"
                                            class="form-control is-valid" readonly>
                                        <button type="submit" class="rts-btn btn-danger">Remove Coupon</button>
                                    @else
                                        <input type="text" name="coupon_code" class="form-control" placeholder="Coupon Code">
                                        <button type="submit" class="rts-btn btn-primary">Apply Coupon</button>
                                    @endif
                                </form>

                                <form action="{{ route('cart.destroy') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rts-btn btn-primary mr--50">Clear All</button>
                                </form>

                            </div>

                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-12 col-md-12 col-12 order-1 order-xl-2 order-lg-1 order-md-1 order-sm-1">
                        @if (Session::has('discounts'))
                            <div class="cart-total-area-start-right">
                                <h5 class="title">Cart Totals</h5>
                                <div class="subtotal">
                                    <span>Subtotal</span>
                                    <h6 class="price">
                                        {{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</h6>
                                </div>

                                <div class="subtotal">
                                    <span>Discount {{ Session::get('coupon')['code'] }}</span>
                                    <h6 class="price">
                                        {{ Session::get('discounts')['discount'] }}
                                    </h6>
                                </div>

                                <div class="subtotal">
                                    <span>Subtotal After Discount</span>
                                    <h6 class="price">
                                        {{ Session::get('discounts')['subtotal'] }}
                                    </h6>
                                </div>

                                <div class="shipping">
                                    <span>Shipping</span>
                                    <ul>
                                        <li>
                                            <input type="radio" id="f-option" name="selector">
                                            <label for="f-option">Free Shipping</label>

                                            <div class="check"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="subtotal">
                                    <span>VAT</span>
                                    <h6 class="price">
                                        {{ Session::get('discounts')['tax'] }}
                                </div>
                                <div class="bottom">
                                    <div class="wrapper">
                                        <span>total</span>
                                        <h6 class="price">
                                            {{ Session::get('discounts')['total'] }}
                                    </div>
                                    <div class="button-area">
                                        <button class="rts-btn btn-primary">Proceed To Checkout</button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="cart-total-area-start-right">
                                <h5 class="title">Cart Totals</h5>
                                <div class="subtotal">
                                    <span>Subtotal</span>
                                    <h6 class="price">
                                        {{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</h6>
                                </div>
                                <div class="shipping">
                                    <span>Shipping</span>
                                    <ul>
                                        <li>
                                            <input type="radio" id="f-option" name="selector">
                                            <label for="f-option">Free Shipping</label>

                                            <div class="check"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="subtotal">
                                    <span>VAT</span>
                                    <h6 class="price">
                                        {{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->tax() }}</h6>
                                </div>
                                <div class="bottom">
                                    <div class="wrapper">
                                        <span>total</span>
                                        <h6 class="price">
                                            {{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->total() }}</h6>
                                    </div>
                                    <div class="button-area">
                                        <button class="rts-btn btn-primary">Proceed To Checkout</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @else
                    <p>No item found in your cart</p>
                    <a href="{{ url('/') }}" class="btn btn-sm btn-success">Shop Now</a>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(".cart_qty_decrease").on("click", function(e) {
            e.preventDefault();
            $(this).closest('form').submit();
        });

        $(".cart_qty_increase").on("click", function() {
            $(this).closest('form').submit();
        });
    </script>
@endsection
