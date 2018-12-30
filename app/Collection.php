<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //

    public function item()
    {
        $this->hasMany('items');
    }
}
