<?php

namespace App;

use App\Comment;
use App\User;
use Carbon\Carbon;

class Post extends Model
{

    // declare relationship to Comments: A post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // declare relationship to User: A post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // add a comment to the post
    public function addComment($body)
    {
        $this->comments()->create([
            'body' => $body,
            'user_id' => auth()->id()
        ]);
    }

    public function scopeFilter($query, $filters)
    {

        if (isset($filters['month'])) {
            if ($month = $filters['month']) {
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }
        }

        if (isset($filters['year'])) {
            if ($year = $filters['year']) {
                $query->whereYear('created_at', $year);
            }
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }


}
