<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }
}
