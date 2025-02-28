<?php

namespace App\Models;

use App\Models\User;
use App\Models\Brand;
use App\Models\Section;
use App\Models\Category;
use App\Models\District;
use App\Models\SubCategory;
use App\Models\SubDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'sku',
        'barcode',
        'regular_price',
        'special_price',
        'quantity',
        'weight',
        'size',
        'color',
        'description',
        'additional_info',
        'return_policy',
        'tag_title',
        'main_image',
        'video',
        'is_featured',
        'stock_quantity',
        'low_stock_threshold',
        'stock_status',
        'remark',
        'status',
        'division',
        'latitude',
        'longitude',
        'section_id',
        'user_id',
        'admin_id',
        'seller_id',
        'customer_id',
        'district_id',
        'sub_district_id',
        'category_id',
        'sub_category_id',
        'brand_id',
        'product_gallery'
    ];

    protected $casts = [
        'size' => 'json',
        'color' => 'json',
        'product_gallery' => 'json',
    ];


    // Relationships

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function subDistrict()
    {
        return $this->belongsTo(SubDistrict::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
