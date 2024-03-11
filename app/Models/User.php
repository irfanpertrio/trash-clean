<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded      = ['id'];

    protected $primaryKey   = 'id';

    public $incrementing    = false;

    protected $keyType      = 'string';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function reward_history()
    {
        return $this->hasMany(RewardHistory::class);
    }
}
