@extends('admin.master')

@section('admin')
    <div class="container">
        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col">
                    <h1 class="h3 m-0">Coupons</h1>
                </div>
                <div class="col-auto d-flex"><a href="" class="btn btn-primary">New
                    Coupon</a></div>
            </div>
        </div>
       
        <div class="card">
            <div class="p-4">
                <input type="text" placeholder="Start typing to search for categories"
                    class="form-control form-control--search mx-auto" id="table-search" />
            </div>
            <div class="sa-divider"></div>
            <table style="margin-bottom: 100px!important;" class="sa-datatables-init p-4 table-bordered" data-order='[[ 1, "asc" ]]' data-sa-search-input="#table-search">
                <thead>
                    <tr>
                        <th>OrderNO</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Total Items</th>
                        <th>Delivered</th>
                        <th>Canceled</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($orders as $order)
                       <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->name}}</td>
                        <td>{{ $order->phone}}</td>
                        <td>{{ $order->subtotal}}</td>
                        <td>{{ $order->tax}}</td>
                        <td>{{ $order->total}}</td>
                        <td>{{ $order->status}}</td>
                        <td>{{ $order->created_at}}</td>
                        <td>{{ $order->orderItems->count() }}</td>
                        <td>{{ $order->delivery_date}}</td>
                        <td>{{ $order->canceled_date}}</td>
                       </tr>
                   @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
