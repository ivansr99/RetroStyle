<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizes extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_size';

    public function products()
    {
        return $this->hasMany(Product::class, 'Size_id', 'ID_size');
    }
}
