<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingSession extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'Session_id', 'Id');
    }
}
