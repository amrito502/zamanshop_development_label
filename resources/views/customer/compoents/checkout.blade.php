@extends('customer.master')
@section('customer')
    <div class="section-seperator">
        <div class="container">
            <hr class="section-seperator">
        </div>
    </div>

    <div class="container p-5">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
            <h2 class="text-2xl font-bold mb-6 p-4">নতুন ঠিকানা যোগ করুন</h2>

            <form action="{{ route('store.checkout') }}" method="POST" class="p-4">
                @csrf



                <h1 class="mb-4">Shipping Address</h1>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-8">
                                @if ($address)
                                    <table class="w-full border-collapse border border-gray-300">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="border border-gray-300 p-2">নাম</th>
                                                <th class="border border-gray-300 p-2">ফোন</th>
                                                <th class="border border-gray-300 p-2">ঠিকানা</th>
                                                <th class="border border-gray-300 p-2">শহর</th>
                                                <th class="border border-gray-300 p-2">জেলা</th>
                                                <th class="border border-gray-300 p-2">দেশ</th>
                                                <th class="border border-gray-300 p-2">জিপ</th>
                                                <th class="border border-gray-300 p-2">ধরন</th>
                                                <th class="border border-gray-300 p-2">ডিফল্ট?</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="border border-gray-300 p-2">{{ $address->name }}</td>
                                                <td class="border border-gray-300 p-2">{{ $address->phone }}</td>
                                                <td class="border border-gray-300 p-2">
                                                    {{ $address->locality }}, {{ $address->address }}
                                                    @if ($address->landmark)
                                                        <br><small>ল্যান্ডমার্ক: {{ $address->landmark }}</small>
                                                    @endif
                                                </td>
                                                <td class="border border-gray-300 p-2">{{ $address->city }}</td>
                                                <td class="border border-gray-300 p-2">{{ $address->state }}</td>
                                                <td class="border border-gray-300 p-2">{{ $address->country }}</td>
                                                <td class="border border-gray-300 p-2">{{ $address->zip }}</td>
                                                <td class="border border-gray-300 p-2">{{ ucfirst($address->type) }}</td>
                                                <td class="border border-gray-300 p-2">
                                                    @if ($address->is_default)
                                                        <span class="text-green-600 font-bold">হ্যাঁ</span>
                                                    @else
                                                        <span class="text-gray-600">না</span>
                                                    @endif
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                @else
                                    <!-- নাম -->
                                    <div class="mb-4">
                                        <label for="name" class="block text-gray-700">নাম</label>
                                        <input type="text" name="name" id="name"
                                            class="w-full border rounded p-2" value="{{ old('name') }}" required>
                                    </div>

                                    <!-- ফোন -->
                                    <div class="mb-4">
                                        <label for="phone" class="block text-gray-700">ফোন নম্বর</label>
                                        <input type="text" name="phone" id="phone"
                                            class="w-full border rounded p-2" value="{{ old('phone') }}" required>
                                    </div>

                                    <!-- লোকালিটি -->
                                    <div class="mb-4">
                                        <label for="locality" class="block text-gray-700">এলাকা</label>
                                        <input type="text" name="locality" id="locality"
                                            class="w-full border rounded p-2" value="{{ old('locality') }}" required>
                                    </div>

                                    <!-- ঠিকানা -->
                                    <div class="mb-4">
                                        <label for="address" class="block text-gray-700">ঠিকানা</label>
                                        <textarea name="address" id="address" class="w-full border rounded p-2" required>{{ old('address') }}</textarea>
                                    </div>

                                    <!-- শহর -->
                                    <div class="mb-4">
                                        <label for="city" class="block text-gray-700">শহর</label>
                                        <input type="text" name="city" id="city"
                                            class="w-full border rounded p-2" value="{{ old('city') }}" required>
                                    </div>

                                    <!-- জেলা -->
                                    <div class="mb-4">
                                        <label for="state" class="block text-gray-700">জেলা</label>
                                        <input type="text" name="state" id="state"
                                            class="w-full border rounded p-2" value="{{ old('state') }}" required>
                                    </div>

                                    <!-- দেশ -->
                                    <div class="mb-4">
                                        <label for="country" class="block text-gray-700">দেশ</label>
                                        <input type="text" name="country" id="country"
                                            class="w-full border rounded p-2" value="{{ old('country') }}" required>
                                    </div>

                                    <!-- ল্যান্ডমার্ক -->
                                    <div class="mb-4">
                                        <label for="landmark" class="block text-gray-700">ল্যান্ডমার্ক (ঐচ্ছিক)</label>
                                        <input type="text" name="landmark" id="landmark"
                                            class="w-full border rounded p-2" value="{{ old('landmark') }}">
                                    </div>

                                    <!-- জিপ কোড -->
                                    <div class="mb-4">
                                        <label for="zip" class="block text-gray-700">জিপ কোড</label>
                                        <input type="text" name="zip" id="zip"
                                            class="w-full border rounded p-2" value="{{ old('zip') }}" required>
                                    </div>

                                    <!-- ঠিকানার ধরন -->
                                    <div class="mb-4">
                                        <label for="type" class="block text-gray-700">ঠিকানার ধরন</label>
                                        <select name="type" id="type" class="w-100 form-control">
                                            <option value="home" {{ old('type') == 'home' ? 'selected' : '' }}>Home
                                            </option>
                                            <option value="office" {{ old('type') == 'office' ? 'selected' : '' }}>Office
                                            </option>
                                        </select>
                                    </div>

                                    <!-- ডিফল্ট ঠিকানা -->
                                    <div class="mb-4 flex items-center">
                                        <label for="is_default" class="text-gray-700">ডিফল্ট ঠিকানা হিসেবে সেট
                                            করুন</label>
                                        <input type="checkbox" name="is_default" id="is_default" class="mr-2"
                                            {{ old('is_default') ? 'checked' : '' }}>

                                    </div>
                            </div>
                            @endif
                            <div class="col-md-4">
                                <h4>Your Order</h4>
                                <div>
                                    <table>
                                        <tr>
                                            <td>Product</td>
                                            <td>Subtotal</td>
                                        </tr>

                                        @foreach (Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->content() as $item)
                                            <tr>
                                                <td>{{ $item->name }} x {{ $item->qty }}</td>
                                                <td>{{ $item->subtotal() }}</td>
                                            </tr>
                                        @endforeach

                                        @if (Session::has('discounts'))
                                            <tr>
                                                <td>Subtotal</td>
                                                <td>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Discount {{ Session::get('coupon')['code'] }}</td>
                                                <td>{{ Session::get('discounts')['discount'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Subtotal After Discount</td>
                                                <td>{{ Session::get('discounts')['subtotal'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td>VAT</td>
                                                <td>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->tax() }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->total() }}
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td>Subtotal</td>
                                                <td>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td>VAT</td>
                                                <td>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->tax() }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>{{ Surfsidemedia\Shoppingcart\Facades\Cart::instance('cart')->total() }}
                                                </td>
                                            </tr>
                                        @endif
                                    </table>

                                    <div class="form-group">
                                        <input type="radio" name="mode" value="cod"> Cash on Delivery
                                        <input type="radio" name="mode" value="card"> Card
                                        <input type="radio" name="mode" value="paypal"> PayPal
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Place Order</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
