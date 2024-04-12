<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';

    public function orderDetails()
    {
        return $this->belongsTo(OrderDetails::class, 'order_id', 'ID');
    }
}
