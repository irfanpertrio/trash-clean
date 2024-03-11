<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $table    = 'reward';

    public function reward_history()
    {
        return $this->hasMany(RewardHistory::class);
    }
}
