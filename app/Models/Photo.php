<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = [
        'name',
        'route',
        'alt_text',
        'establishment_id'
    ];

    public $timestamps = TRUE;

    public function establishmentId(  )
    {
        return $this->hasOne('App\Establishment');
    }
}
