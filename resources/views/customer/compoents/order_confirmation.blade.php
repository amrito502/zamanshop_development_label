@extends('customer.master')
@section('customer')
    <div class="section-seperator">
        <div class="container">
            <hr class="section-seperator">
        </div>
    </div>

    <div class="container p-5">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
            <h2 class="text-2xl font-bold mb-6 p-4">Order Confirmation</h2>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Order Total</th>
                        <th>Payment Method</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->transaction->mode }}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered">
                <tr>
                    <td>Product</td>
                    <td>Subtotal</td>

                </tr>
                @foreach ($order->orderItems as $item)
                    <tr>
                        <td>{{ $item->product->name }} x {{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>Shipping</td>
                    <td>Free Shipping</td>

                <tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>{{ $order->subtotal }}</td>
                    <tr>
                        <tr>
                            <td>Discount</td>
                            <td>{{ $order->discount }}</td>
                        <tr>
                        <tr>
                            <td>VAT</td>
                            <td>{{ $order->tax }}</td>
                        <tr>
                    <td>Total</td>
                    <td>{{ $order->total }}</td>
                </tr>
                <tr>
                    
                    <td></td>
                </tr>
            </table>


        </div>
    </div>
@endsection

@section('scripts')
@endsection
