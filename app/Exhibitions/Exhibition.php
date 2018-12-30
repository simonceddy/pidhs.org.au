<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    public function section()
    {
        $this->hasMany('section');
    }
}
