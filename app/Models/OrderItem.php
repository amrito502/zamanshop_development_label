<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'options',
        'rstatus',
    ];

    /**
     * Relationship: OrderItem belongs to an Order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relationship: OrderItem belongs to a Product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function product(){
    //     return $this->belongsTo(Product::class,"product_id");
    // }

    // public function order(){
    //     return $this->belongsTo(Order::class,"order_id");
    // }
}
