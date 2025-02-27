<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'status',
        'user_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];


    // public function subCategories()
    // {
    //     return $this->hasMany(SubCategory::class, 'category_id')
    //         ->where('status', 1);
    // }
}

