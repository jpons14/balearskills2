<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookingType extends Model
{
    protected $table = 'cooking_types';
    protected $fillable = [
        'name'
    ];

    public $timestamps = FALSE;

    public function establishments()
    {
        return $this->hasMany( 'App\Establishment' );
    }
}
