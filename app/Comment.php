<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
    public function comment_likes()
    {
        return $this->hasMany(CommentLike::class);
    }
}
