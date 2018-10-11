<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warrior extends Model
{
    protected $fillable = [
        'type_id',
        'name',
        'health',
        'defense',
        'damage',
        'attack_speed',
        'move_speed',
        'thumbnail',
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function specialities()
    {
        return $this->belongsToMany('App\Models\Speciality')->withTimestamps();
    }
}
