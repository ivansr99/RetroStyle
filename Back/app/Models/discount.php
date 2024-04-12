<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'Discount_id', 'Id');
    }
}
