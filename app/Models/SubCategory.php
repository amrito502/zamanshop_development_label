<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Category::class);
    }
}
