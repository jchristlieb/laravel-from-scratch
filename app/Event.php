<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopePopular($query) {

        return $query->where('popular', true);
    }
}
