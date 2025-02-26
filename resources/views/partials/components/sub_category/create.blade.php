@extends('admin.master')

@section('admin')
<div class="container">
    <h2>Add New Subcategory</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="sub_categorie_name" class="form-label">Subcategory Name</label>
            <input type="text" name="sub_categorie_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Select Category</label>
            <select name="category_id" class="form-control">
                <option value="">Choose Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sub_categorie_img" class="form-label">Subcategory Image</label>
            <input type="file" name="sub_categorie_img" class="form-control">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Subcategory</button>
        <a href="{{ route('subcategories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection