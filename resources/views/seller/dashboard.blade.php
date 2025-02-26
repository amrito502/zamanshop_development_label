@extends('seller.master')

@section('seller')
<div class="container">
    <h1>Seller Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <a href="{{ route('customer.dashboard') }}" class="btn btn-primary">Go to Customer Dashboard</a>
    @if(auth()->user()->role === 'admin')
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go to Admin Dashboard</a>
    @endif
</div>
@endsection