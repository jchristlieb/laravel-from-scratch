<?php

namespace App;

use App\Comment;

class Post extends Model
{

    // declare relationship to Comments: A post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // add a comment to the post
    public function addComment($body)
    {
        $this->comments()->create([
           'body' => $body,
           'post_id' => $this->id,
        ]);
    }


}
