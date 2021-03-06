<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookingType extends Model
{
    protected $table = 'cooking_types';
    protected $fillable = [
        'name'
    ];

    public $timestamps = TRUE;

    public function establishments()
    {
        return $this->belongsToMany('App\Models\Establishment');
    }
}
