<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'image',
        'title',
        'caption',
    ];

    public function collection()
    {
        $this->belongsTo('collection');
    }
}
