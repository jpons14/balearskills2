<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $table = 'establishments';
    protected $fillable = [
        'name', 'description_esp', 'description_cat', 'timetable_esp', 'timetable_cat',
        'city', 'address', 'phone', 'web', 'price'
    ];

    public $timestamps = TRUE;

    public function cookingTypes(){
        return $this->belongsToMany('App\Models\CookingType');
    }
    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }
}
