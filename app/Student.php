<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'siswas';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
