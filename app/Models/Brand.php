<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
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
}
