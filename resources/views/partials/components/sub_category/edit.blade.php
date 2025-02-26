@extends('admin.master')

@section('admin')
<div class="container">
    <h2>Edit Subcategory</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subcategories.update', $subCategory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="sub_categorie_name" class="form-label">Subcategory Name</label>
            <input type="text" name="sub_categorie_name" class="form-control" value="{{ $subCategory->sub_categorie_name }}" required>
        </div>

        <div class="mb-3">
            <label for="categorie_id" class="form-label">Select Category</label>
            <select name="categorie_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $subCategory->categorie_id ? 'selected' : '' }}>
                        {{ $category->categoryName }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sub_categorie_img" class="form-label">Subcategory Image</label>
            <input type="file" name="sub_categorie_img" class="form-control">
            @if($subCategory->sub_categorie_img)
                <img src="{{ asset($subCategory->sub_categorie_img) }}" alt="Subcategory Image" width="100" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="active" {{ $subCategory->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $subCategory->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Subcategory</button>
        <a href="{{ route('subcategories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection