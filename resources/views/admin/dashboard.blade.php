@extends('admin.master')

@section('admin')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <a href="{{ route('customer.dashboard') }}" class="btn btn-primary">Go to Customer Dashboard</a>
    <a href="{{ route('seller.dashboard') }}" class="btn btn-primary">Go to Seller Dashboard</a>
</div>
@endsection