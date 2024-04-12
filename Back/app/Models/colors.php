<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colors extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'ID_color';

    public function products()
    {
        return $this->hasMany(Product::class, 'Color_id', 'ID_color');
    }
}
