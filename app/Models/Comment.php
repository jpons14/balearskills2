<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'user_id', 'establishment_id', 'text'
    ];

    public $timestamps = TRUE;

    public function userId( )
    {
        return $this->hasOne('App\User');
    }

    public function establishmentId(){
        return $this->hasOne('App\Establishment');
    }

}
