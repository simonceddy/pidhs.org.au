<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    public function exhibition()
    {
        $this->belongsTo('exhibition');
    }
}
