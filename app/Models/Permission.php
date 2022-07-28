<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'guard_name',
    ];

    public $timestamp = true;
}
