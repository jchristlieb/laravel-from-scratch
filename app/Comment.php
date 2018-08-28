<?php

namespace App;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
