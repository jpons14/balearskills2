<?php

namespace App;

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
        return $this->hasMany('App\Type_cooking');
    }
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}