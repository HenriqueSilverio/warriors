<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
    ];

    public function warriors()
    {
        return $this->hasMany('App\Models\Warrior');
    }
}
