<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
