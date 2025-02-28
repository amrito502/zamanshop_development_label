<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use App\Models\District;
use App\Models\SubCategory;
use App\Models\SubDistrict;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::with(['section', 'user', 'admin', 'seller', 'customer', 'district', 'subDistrict', 'category', 'subCategory', 'brand'])->get();
        return view('partials.components.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function getSubDistricts(Request $request)
    {
        $subDistricts = SubDistrict::where('district_id', $request->district_id)->get();
        return response()->json($subDistricts);
    }

    public function getSubCategories(Request $request)
    {
        $subCategories = SubCategory::where('category_id', $request->category_id)->get();
        return response()->json($subCategories);
    }
    public function create()
    {
        $data['sections']  = Section::all();
        $data['districts']  = District::all();
        $data['categories'] = Category::all();
        $data['brands']     = Brand::all();
        return view('partials.components.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }


        $sku = $request->sku ?? 'PROD-' . strtoupper(Str::random(8));

        while (Product::where('sku', $sku)->exists()) {
            $sku = 'PROD-' . strtoupper(Str::random(8));
        }

        $coordinates = $this->getDivisionCoordinates($request->division);

        $products = new Product();
        $products->name = $request->name;
        $products->size = json_encode($request->size ?? []);
        $products->color = json_encode($request->color ?? []);

        $products->slug = $slug;
        $products->sku = $sku;

        $products->user_id = Auth::id();
        $products->admin_id = Auth::id();
        $products->seller_id = Auth::id();
        $products->customer_id = Auth::id();

        $products->barcode = $request->barcode;
        $products->regular_price = $request->regular_price;
        $products->special_price = $request->special_price;
        $products->quantity = $request->quantity;
        $products->weight = $request->weight;
        $products->description = $request->description;
        $products->additional_info = $request->additional_info;
        $products->return_policy = $request->return_policy;

        $products->tag_title = $request->tag_title;
        $products->is_featured = $request->is_featured;
        $products->stock_quantity = $request->stock_quantity;
        $products->low_stock_threshold = $request->low_stock_threshold;
        $products->stock_status = $request->stock_status;
        $products->remark = $request->remark;
        $products->status = $request->status;

        $products->division = $request->division;
        $products->latitude = $coordinates['latitude'];
        $products->longitude = $coordinates['longitude'];

        $products->section_id = $request->section_id;

        $products->district_id = $request->district_id;
        $products->sub_district_id = $request->sub_district_id;
        $products->category_id = $request->category_id;
        $products->sub_category_id = $request->sub_category_id;
        $products->brand_id = $request->brand_id;
        $products->video = $request->video;
        $products->meta_title = $request->meta_title;
        $products->meta_description = $request->meta_description;
        $products->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('main_image')) {
            $image = $request->file('main_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/products');

            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);
            $products->main_image = 'uploads/products/' . $imageName;
        }

        // Handle the image upload
        if ($request->hasFile('product_gallery')) {
            $imagePaths = []; // Store the image paths

            // Loop through each uploaded image
            foreach ($request->file('product_gallery') as $image) {
                // Generate a unique name for each image
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Define the folder path
                $imagePath = public_path('uploads/product_gallery');

                // Create directory if it doesn't exist
                if (!File::exists($imagePath)) {
                    File::makeDirectory($imagePath, 0755, true);
                }

                // Move the image to the 'product_gallery' folder
                $image->move($imagePath, $imageName);

                // Add the relative image path to the array
                $imagePaths[] = 'uploads/product_gallery/' . $imageName;
            }

            // Convert the image paths to JSON format for storage in the database
            $productGallery = json_encode($imagePaths);
        }


        $products->product_gallery = $productGallery;
        $products->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    private function getDivisionCoordinates($division)
    {
        $divisions = [
            'ঢাকা'      => ['latitude' => '23.8103', 'longitude' => '90.4125'],
            'চট্টগ্রাম' => ['latitude' => '22.3569', 'longitude' => '91.7832'],
            'রাজশাহী'   => ['latitude' => '24.3745', 'longitude' => '88.6042'],
            'খুলনা'     => ['latitude' => '22.8456', 'longitude' => '89.5403'],
            'বরিশাল'    => ['latitude' => '22.7010', 'longitude' => '90.3535'],
            'সিলেট'     => ['latitude' => '24.8949', 'longitude' => '91.8687'],
            'রংপুর'     => ['latitude' => '25.7439', 'longitude' => '89.2752'],
            'ময়মনসিংহ' => ['latitude' => '24.7471', 'longitude' => '90.4203'],
        ];

        return $divisions[$division] ?? ['latitude' => null, 'longitude' => null];
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
