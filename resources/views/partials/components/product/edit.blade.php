@extends('admin.master')

@section('admin')


    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="title">Title</label>
            <input type="text" class="form-control my-3" name="title" value="{{ old('title', $product->title) }}" required>

            <label for="short_des">Short Description</label>
            <textarea class="form-control my-3" name="short_des">{{ old('short_des', $product->short_des) }}</textarea>

            <label for="price">Price</label>
            <input class="form-control my-3" type="number" name="price" step="0.01"
                value="{{ old('price', $product->price) }}" required>

            <label for="discount_price">Discount Price</label>
            <input class="form-control my-3" type="number" name="discount_price" step="0.01"
                value="{{ old('discount_price', $product->discount_price) }}">

            <label for="image">Image</label>
            <input class="form-control my-3" type="file" name="image">
            @if ($product->image)
                <img src="{{ asset($product->image)}}" alt="Product Image" width="100">
            @endif             <br>


            <label for="star">Star Rating</label>
            <input class="form-control my-3" type="number" name="star" min="0" max="5" step="0.1"
                value="{{ old('star', $product->star) }}" required>

            <label for="remark">Remark</label>
            <select class="form-control my-3" name="remark">
                <option value="popular" {{ old('remark', $product->remark) == 'popular' ? 'selected' : '' }}>Popular</option>
                <option value="new" {{ old('remark', $product->remark) == 'new' ? 'selected' : '' }}>New</option>
                <option value="top" {{ old('remark', $product->remark) == 'top' ? 'selected' : '' }}>Top</option>
                <option value="special" {{ old('remark', $product->remark) == 'special' ? 'selected' : '' }}>Special</option>
                <option value="trending" {{ old('remark', $product->remark) == 'trending' ? 'selected' : '' }}>Trending
                </option>
                <option value="regular" {{ old('remark', $product->remark) == 'regular' ? 'selected' : '' }}>Regular</option>
            </select>

            <label for="status">Status</label>
            <select class="form-control my-3" name="status">
                <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inactive
                </option>
            </select>

           
            <!-- Additional dropdowns for district, category, etc. -->
            <label for="district_id">District</label>
            <select class="form-control my-3" name="district_id">
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ old('district_id', $product->district_id) == $district->id ? 'selected' : '' }}>
                        {{ $district->name }}
                    </option>
                @endforeach
            </select>

            <label for="sub_district_id">Sub District</label>
            <select class="form-control my-3" name="sub_district_id">
                @foreach($subDistricts as $subDistrict)
                    <option value="{{ $subDistrict->id }}" {{ old('sub_district_id', $product->sub_district_id) == $subDistrict->id ? 'selected' : '' }}>
                        {{ $subDistrict->name }}
                    </option>
                @endforeach
            </select>

            <label for="category_id">Category</label>
            <select class="form-control my-3" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->categoryName }}
                    </option>
                @endforeach
            </select>

            <label for="sub_category_id">Sub Category</label>
            <select class="form-control my-3" name="sub_category_id">
                @foreach($subCategories as $subCategory)
                    <option value="{{ $subCategory->id }}" {{ old('sub_category_id', $product->sub_category_id) == $subCategory->id ? 'selected' : '' }}>
                        {{ $subCategory->sub_categorie_name }}
                    </option>
                @endforeach
            </select>

            <label for="brand_id">Brand</label>
            <select class="form-control my-3" name="brand_id">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                        {{ $brand->brandName }}
                    </option>
                @endforeach
            </select>

            <label for="division">Division</label>
            <input class="form-control my-3" type="text" name="division" value="{{ old('division', $product->division) }}">

            <label class="form-check form-switch mb-4 mt-3"
            ><input name="discount" {{ old('discount', $product->discount) ? 'checked' : '' }} type="checkbox" class="form-check-input" /><span
                class="form-check-label"
                >Apply Discount</span
            ></label>

            <label class="form-check form-switch mb-5"
            ><input name="stock" {{ old('stock', $product->stock) ? 'checked' : '' }} type="checkbox" class="form-check-input" /><span
                class="form-check-label"
                >Stock Available</span
            ></label>
            <button class="btn btn-primary" type="submit">Update Product</button>
        </form>
    </div>
@endsection