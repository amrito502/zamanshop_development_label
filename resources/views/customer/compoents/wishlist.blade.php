@extends('customer.master')
@section('customer')
<div class="rts-cart-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="rts-cart-list-area wishlist">
                    @if ($items->count() == 0)
                    <div class="single-cart-area-list main  item-parent">
                        <div class="product-main-cart">
                            <div class="information">
                                <h6 class="title">No items in wishlist</h6>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="single-cart-area-list head">
                        <div class="product-main">
                            <P>Products</P>
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
                        <div class="button-area">

                        </div>
                    </div>
                        @foreach ($items as $item)
                        <div class="single-cart-area-list main  item-parent">
                            <div class="product-main-cart">
                                <form action="{{ route('wishlist.remove',['rowId'=>$item->rowId]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="close section-activation">
                                        <button type="submit"><i class="fa-regular fa-x"></i></button>
                                    </div>
                                </form>
                            
                                <div class="thumbnail">
                                    <img src="assets/images/shop/02.png" alt="shop">
                                </div>
                                <div class="information">
                                    <h6 class="title">{{ $item->name }}</h6>
                                    <span>SKU:BG-1001</span>
                                </div>
                            </div>
                            <div class="price">
                                <p>TK {{ $item->price }}</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-edit">
                                    <input type="text" readonly class="input" value="{{ $item->qty }}" min="1">
                                    {{-- <div class="button-wrapper-action">
                                        <button disabled class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                        <button disabled class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="subtotal">
                                <p>TK {{ $item->subtotal }}</p>
                            </div>
                            <div class="button-area">
                                <form action="{{ route('wishlist.move_to_cart',['rowId'=>$item->rowId]) }}" method="POST">
                                    @csrf
                                    <button class="rts-btn btn-primary radious-sm with-icon" type="submit">
                                        <div class="btn-text">
                                            Move To Cart
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-regular fa-cart-shopping"></i>
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-regular fa-cart-shopping"></i>
                                        </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        <div class="mt-5" style="width: 100%; float: right; margin: 0 auto; display: inline-block;">
                            <form action="{{ route('wishlist.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="close section-activation">
                                    <button class="rts-btn btn-primary" type="submit">Clear All</button>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection