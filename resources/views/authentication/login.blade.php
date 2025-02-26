@extends('customer.master')
@section('customer')
<h2>Register</h2>
@if(session('error')) <p style="color: red;">{{ session('error') }}</p> @endif
<form method="POST" action="{{ route('store.sign_up') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone Number" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
    <button type="submit">Register</button>
</form>
@endsection
