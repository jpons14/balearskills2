<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'user', 'establishment', 'text'
    ];

    public $timestamps = TRUE;

    public function establishment(){
        return $this->hasOne('App\Establishment');
    }
}
