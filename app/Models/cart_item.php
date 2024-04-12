<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_item extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'Id';

    public function shoppingSession()
    {
        return $this->belongsTo(ShoppingSession::class, 'Session_id', 'Id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_id', 'Id');
    }
}
