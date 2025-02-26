@extends('admin.master')

@section('admin')
<div class="container">
    <h1>Create Brand</h1>

    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="brandName">Brand Name</label>
            <input type="text" name="brandName" class="form-control" value="{{ old('brandName') }}" required>
        </div>

        <div class="form-group">
            <label for="brandImg">Brand Image (optional)</label>
            <input type="file" name="brandImg" class="form-control">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Brand</button>
    </form>
</div>
@endsection