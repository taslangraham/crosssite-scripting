<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Review', 'module_id');
    }
}
