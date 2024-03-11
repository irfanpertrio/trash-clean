<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    protected $primaryKey   = 'id';

    protected $guarded      = ['id'];

    public $incrementing    = false;

    protected $keyType      = 'string';

    protected $table        = 'super_admin';
}
