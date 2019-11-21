<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $hidden = [];
    public function module()
    {
        return $this->belongsTo('App\modules');
    }
}
