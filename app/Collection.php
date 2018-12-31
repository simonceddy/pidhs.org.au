<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'title',
        'caption'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
