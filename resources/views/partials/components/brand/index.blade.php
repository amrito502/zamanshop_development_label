@extends('admin.master')

@section('admin')
<div class="container">
    <h1>Brands</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary">Create New Brand</a>
    @include('partials.message')
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Brand Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->brandName }}</td>
                    <td>
                        @if($brand->brandImg)
                            <img src="{{ asset($brand->brandImg) }}" width="50" height="50" alt="Brand Image">
                        @else
                            No image
                        @endif
                    </td>
                    <td>{{ ucfirst($brand->status) }}</td>
                    <td>
                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection