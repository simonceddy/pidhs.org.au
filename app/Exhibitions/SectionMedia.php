<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class SectionMedia extends Model
{
    protected $fillable = [
        'exhibition_id',
        'section_id',
        'thumbnail'
    ];

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
