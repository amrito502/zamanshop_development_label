@extends('customer.master')
@section('customer')

   @include('customer.compoents.account')
   <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection

