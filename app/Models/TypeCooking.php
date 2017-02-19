<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCooking extends Model
{
    protected $table = 'cooking_types';
    protected $fillable = [
        'name'
    ];

    public function establishments()
    {
        return $this->hasMany( 'App\Establishment' );
    }
}
