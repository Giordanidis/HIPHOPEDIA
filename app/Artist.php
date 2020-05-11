<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('artists.show', $this);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
