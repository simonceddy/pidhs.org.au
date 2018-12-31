<?php

namespace App\Exhibitions;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $fillable = [
        'title'
    ];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
