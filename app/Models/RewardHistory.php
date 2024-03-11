<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardHistory extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $table    = 'reward_history';

    public function reward()
    {
        return $this->belongsTo(Reward::class, 'reward_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
