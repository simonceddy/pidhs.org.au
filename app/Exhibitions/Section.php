<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function exhibition()
    {
        $this->belongsTo('exhibition');
    }
}
