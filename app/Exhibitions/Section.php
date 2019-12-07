<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'exhibition_id',
        'title',
        'content',
        'media_id'
    ];

    protected $with = [
        'media'
    ];

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public function media()
    {
        return $this->hasMany(ExhibitionMedia::class);
    }

    public function thumbnail()
    {
        return $this->hasOne(ExhibitionMedia::class, 'id', 'media_id');
    }
}
