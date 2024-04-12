<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';
    protected $fillable = ['Name', 'Description', 'Category_id' ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'Brand_id', 'ID_brand');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_id', 'ID_category');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'Color_id', 'ID_color');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'Size_id', 'ID_size');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'Product_id', 'Id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'Product_id', 'Id');
    }
}
