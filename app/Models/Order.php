<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // protected $guaraded = [];



    protected $fillable = [
        'user_id',
        'subtotal',
        'discount',
        'tax',
        'total',
        'name',
        'phone',
        'locality',
        'address',
        'city',
        'state',
        'country',
        'landmark',
        'zip',
        'type',
        'status',
        'is_shipping_different',
        'delivery_date',
        'canceled_date',
    ];

    /**
     * Relationship: Order belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: Order has many Order Items.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Relationship: Order has one Shipping Address (if different).
     */
    // public function user(){
    //     return $this->belongsTo(User::class,"user_id");
    // }

    // public function orderItems(){
    //     return $this->hasMany(OrderItem::class,"order_id");
    // }

    public function transaction(){
        return $this->hasOne(Transaction::class,"order_id");
    }

}
