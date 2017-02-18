<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_cooking extends Model
{
    protected $table = 'cooking_type';
    protected $fillable = [
        'name'
    ];
}
