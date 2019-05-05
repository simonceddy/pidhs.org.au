<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $fillable = [
        'title',
        'content',
        'media_id'
    ];

    public function sections()
    {
        return $this->hasMany(Section::class);
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
