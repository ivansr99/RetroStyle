<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'ID_user';

    public function formSells()
    {
        return $this->hasMany(FormSell::class, 'User_ID', 'ID_user');
    }

    public function shoppingSessions()
    {
        return $this->hasMany(ShoppingSession::class, 'ID_user', 'ID_user');
    }


    public function orders()
    {
        return $this->hasMany(OrderDetails::class, 'user_id', 'ID_user');
    }
}

