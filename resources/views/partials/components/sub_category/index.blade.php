@extends('admin.master')
@section('admin')
<div class="container">
    <h2>Subcategories List</h2>

    @include('partials.message')

    <a href="{{ route('subcategories.create') }}" class="btn btn-primary mb-3">Add New Subcategory</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Subcategory Name</th>
                <th>Subcategory Image</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subCategories as $subCategory)
                <tr>
                    <td>{{ $subCategory->category ? $subCategory->category->categoryName : 'No Category' }}</td>
                    <td>{{ $subCategory->sub_categorie_name }}</td>
                    <td>
                        @if ($subCategory->sub_categorie_img)
                            <img src="{{ asset($subCategory->sub_categorie_img) }}" alt="Subcategory Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <span class="badge text-{{ $subCategory->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($subCategory->status) }}
                        </span>
                    </td>
                    <td>{{ $subCategory->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <a href="{{ route('subcategories.edit', $subCategory->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('subcategories.destroy', $subCategory->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subcategory?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

  
</div>
@endsection