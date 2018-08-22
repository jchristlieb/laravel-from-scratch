<?php

namespace App;

class Comment extends Model
{
    // declare relationship: Comments belong to a post
    public function post(){

        return $this->belongsTo(Post::class);
    }
}
