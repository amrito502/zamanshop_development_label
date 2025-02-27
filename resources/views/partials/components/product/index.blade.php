@extends('admin.master')

@section('admin')
    <h1>Product List</h1>

    <a class="btn btn-primary mb-3" href="{{ route('products.create') }}">Create New Product</a>
    @include('partials.message')
    <table class="table table-bordered table-responsive" data-order='[[ 0, "asc" ]]'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Short Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Discount Price</th>
                <th>Image</th>
                <th>Stock</th>
                <th>Star Rating</th>
                <th>Remark</th>
                <th>Status</th>
                <th>User</th>
                <th>District</th>
                <th>Sub District</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Brand</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->barcode }}</td>
                    <td>{{ $product->regular_price }}</td>
                    <td>{{ $product->special_price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>
                        @if (!empty($product->size))
                            @php
                                // Check if it's an array already, if not decode from JSON
                                $sizes = is_array($product->size) ? $product->size : json_decode($product->size, true);
                                $sizes = is_array($sizes) ? $sizes : []; // Ensure it's an array
                            @endphp
                            @foreach ($sizes as $size)
                                <ul>
                                    <li><span class="badge bg-primary">{{ $size }}</span></li>
                                </ul>
                            @endforeach
                        @else
                            <span class="text-muted">No Size</span>
                        @endif
                    </td>
                    
                    <td>
                        @if (!empty($product->color))
                            @php
                                // Check if it's an array already, if not decode from JSON
                                $colors = is_array($product->color) ? $product->color : json_decode($product->color, true);
                                $colors = is_array($colors) ? $colors : []; // Ensure it's an array
                            @endphp
                            @foreach ($colors as $color)
                                <ul>
                                    <li><span class="badge bg-success">{{ $color }}</span></li>
                                </ul>
                            @endforeach
                        @else
                            <span class="text-muted">No Color</span>
                        @endif
                    </td>
            
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->additional_info }}</td>
                    <td>{{ $product->return_policy }}</td>
                    <td>{{ $product->tag_title }}</td>
                    <td>{{ $product->video }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->discount ? 'Yes' : 'No' }}</td>
                    <td>${{ number_format($product->discount_price, 2) }}</td>
                    <td>
                        @if ($product->main_image)
                            <img src="{{ asset($product->main_image) }}" width="50" height="50" alt="Product Image">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $product->stock ? 'In Stock' : 'Out of Stock' }}</td>
                    <td>{{ $product->star }}</td>
                    <td>{{ ucfirst($product->remark) }}</td>
                    <td>{{ ucfirst($product->status) }}</td>
                    <td>{{ $product->user->name ?? 'N/A' }}</td>
                    <td>{{ $product->district->name ?? 'N/A' }}</td>
                    <td>{{ $product->subDistrict->name ?? 'N/A' }}</td>
                    <td>{{ $product->category ? $product->category->name : 'N/A' }}</td>
                    <td>{{ $product->subCategory ? $product->subCategory->name : 'N/A' }}</td>
                    <td>{{ $product->brand->name ?? 'N/A' }}</td>
                    <td class="d-flex">
                        <a class="btn btn-warning btn-sm mx-3" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
