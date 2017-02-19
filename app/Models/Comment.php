<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'user_id', 'establishment_id', 'text'
    ];

    public $timestamps = TRUE;

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function establishment()
    {
        return $this->belongsTo( 'App\Establishment' );
    }

}
