<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        //'title',
        'caption',
        'thumbnail',
        'collection_id'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
