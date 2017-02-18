<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $table = 'establishments';
    protected $fillable = [
        'name', 'description_esp', 'description_cat', 'timetable_esp', 'timetable_cat',
        'city', 'address', 'phone', 'web', 'price', 'cooking_type', 'photo'
    ];
    
//    public function cooking_type(){
//        return $this->hasMany('App\Type_cooking');
//    }
//    public function photo(){
//        return $this->hasMany('App\Photo');
//    }
}
