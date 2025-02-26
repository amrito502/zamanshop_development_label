@extends('admin.master')

@section('admin')
    <div class="container">
        <h1 class="mb-4">Create Product</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Division -->
                <div class="col-md-12 mb-3">
                    <label for="division" class="form-label">বিভাগ নির্বাচন করুন</label>
                    <select id="division" name="division" required class="form-control sa-select2 form-select">
                        <option value="">-- বিভাগ নির্বাচন করুন --</option>
                        <option value="ঢাকা">ঢাকা</option>
                        <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                        <option value="রাজশাহী">রাজশাহী</option>
                        <option value="খুলনা">খুলনা</option>
                        <option value="বরিশাল">বরিশাল</option>
                        <option value="সিলেট">সিলেট</option>
                        <option value="রংপুর">রংপুর</option>
                        <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                    </select>
                </div>
                <!-- District -->
                <div class="col-md-12 mb-3">
                    <label for="district_id" class="form-label">District</label>
                    <select name="district_id" id="district_id" class="form-select">
                        <option value="">Select District</option>
                        @foreach($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Sub District -->
                <div class="col-md-12 mb-3">
                    <label for="sub_district_id" class="form-label">Sub District</label>
                    <select name="sub_district_id" id="sub_district_id" class="form-select">
                        <option value="">Select Sub District</option>
                    </select>
                </div>

                <!-- Category -->
                <div class="col-md-12 mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Sub Category -->
                <div class="col-md-12 mb-3">
                    <label for="sub_category_id" class="form-label">Sub Category</label>
                    <select name="sub_category_id" id="sub_category_id" class="form-select">
                        <option value="">Select Sub Category</option>
                    </select>
                </div>

                <!-- Brand -->
                <div class="col-md-12 mb-3">
                    <label for="brand_id" class="form-label">Brand</label>
                    <select name="brand_id" class="form-select">
                        <option value="">Select Brand</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brandName }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Price -->
                <div class="col-md-12 mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" step="0.01" required>
                </div>
                <!-- Discount Price -->
                <div class="col-md-12 mb-3">
                    <label for="discount_price" class="form-label">Discount Price</label>
                    <input type="number" name="discount_price" class="form-control" step="0.01">
                </div>
                <!-- Star Rating -->
                <div class="col-md-12 mb-3">
                    <label for="star" class="form-label">Star Rating</label>
                    <input type="number" name="star" class="form-control" min="0" max="5" step="0.1" required>
                </div>
                <!-- Remark -->
                <div class="col-md-12 mb-3">
                    <label for="remark" class="form-label">Remark</label>
                    <select name="remark" class="form-select">
                        <option value="popular">Popular</option>
                        <option value="new">New</option>
                        <option value="top">Top</option>
                        <option value="special">Special</option>
                        <option value="trending">Trending</option>
                        <option value="regular">Regular</option>
                    </select>
                </div>
                <!-- Image -->
                <div class="col-md-12 mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <!-- Title -->
                <div class="col-md-12 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <!-- Short Description -->
                <div class="col-md-12 mb-3">
                    <label for="short_des" class="form-label">Short Description</label>
                    <textarea name="short_des" class="form-control"></textarea>
                </div>
               
                <!-- Status -->
                <div class="col-md-12 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                 <!-- Discount -->
                 <div class="col-md-12 mb-3">
                    <label class="form-label">Discount</label>
                    <div class="form-check">
                        <input type="checkbox" name="discount" class="form-check-input">
                        <label class="form-check-label">Apply Discount</label>
                    </div>
                </div>
                
                <!-- Stock -->
                <div class="col-md-12 mb-3">
                    <label class="form-label">Stock</label>
                    <div class="form-check">
                        <input type="checkbox" name="stock" class="form-check-input">
                        <label class="form-check-label">Available</label>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("district_id").addEventListener("change", function () {
                var district_id = this.value;
                var subDistrictSelect = document.getElementById("sub_district_id");

                subDistrictSelect.innerHTML = '<option value="">Loading...</option>';

                if (district_id) {
                    axios.get('{{ route("get.subdistricts") }}', {
                        params: { district_id: district_id }
                    })
                        .then(function (response) {
                            subDistrictSelect.innerHTML = '<option value="">Select Sub District</option>';
                            response.data.forEach(function (subDistrict) {
                                var option = document.createElement("option");
                                option.value = subDistrict.id;
                                option.textContent = subDistrict.name;
                                subDistrictSelect.appendChild(option);
                            });
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                } else {
                    subDistrictSelect.innerHTML = '<option value="">Select Sub District</option>';
                }
            });
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("category_id").addEventListener("change", function () {
                var category_id = this.value;
                var subCategorySelect = document.getElementById("sub_category_id");
                console.log(document.getElementById("category_id"))
                console.log(document.getElementById("subCategorySelect"))
                subCategorySelect.innerHTML = '<option value="">Loading...</option>';

                if (category_id) {
                    axios.get('{{ route("get.subcategories") }}', {
                        params: { category_id: category_id }
                    })
                        .then(function (response) {
                            subCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
                            response.data.forEach(function (subCategory) {
                                var option = document.createElement("option");
                                option.value = subCategory.id;
                                option.textContent = subCategory.sub_categorie_name;
                                subCategorySelect.appendChild(option);
                            });
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                } else {
                    subCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
                }
            });
        });
    </script>
@endsection