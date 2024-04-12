<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_sell extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'ID';

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID', 'ID_user');
    }
}
