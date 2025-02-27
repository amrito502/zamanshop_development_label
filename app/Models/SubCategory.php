<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'status',
        'user_id',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
   
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function childSubCategories()
    // {
    //     return $this->hasMany(SubCategory::class, 'parent_id')->where('status', 1);
    // }
}
