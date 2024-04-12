<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'ID';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'ID_user');
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'Discount_id', 'Id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'Order_id', 'ID');
    }

    public function bill()
    {
        return $this->hasOne(Bill::class, 'order_id', 'ID');
    }
}
