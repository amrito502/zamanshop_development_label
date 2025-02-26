@extends('admin.master')

@section('admin')
<div class="container">
    <h1>Edit Brand</h1>

    <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="brandName">Brand Name</label>
            <input type="text" name="brandName" class="form-control" value="{{ old('brandName', $brand->brandName) }}" required>
        </div>

        <div class="form-group">
            <label for="brandImg">Brand Image (optional)</label>
            <input type="file" name="brandImg" class="form-control">
            @if($brand->brandImg)
                <img src="{{ asset($brand->brandImg) }}" width="50" height="50" alt="Brand Image">
            @endif
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="active" {{ old('status', $brand->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $brand->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Brand</button>
    </form>
</div>
@endsection