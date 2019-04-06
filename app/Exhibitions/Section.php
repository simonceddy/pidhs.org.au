<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'exhibition_id',
        'title',
        'content'
    ];

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }
}
