<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'ID_category';

    public function products()
    {
        return $this->hasMany(Product::class, 'Category_id', 'ID_category');
    }
}
