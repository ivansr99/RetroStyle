<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'ID';

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_id', 'Id');
    }

    public function orderDetails()
    {
        return $this->belongsTo(OrderDetails::class, 'Order_id', 'ID');
    }
}
