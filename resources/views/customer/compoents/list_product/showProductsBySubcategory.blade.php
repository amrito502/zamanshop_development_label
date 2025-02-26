@extends('customer.master')
@section('customer')

<h1>Products under {{ $subcategory->sub_categorie_name }} Subcategory</h1>

<ul>
    @foreach($products as $product)
        <li>
            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">
            <span>{{ $product->title }}</span>
            <p>{{ $product->short_des }}</p>
        </li>
    @endforeach
</ul>


all product

@endsection