<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = [
        'name',
    ];

    public function warriors()
    {
        return $this->belongsToMany('App\Models\Warrior')->withTimestamps();
    }
}
