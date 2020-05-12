<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];
    
    public function path()
    {
        return route('albums.show', $this);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
