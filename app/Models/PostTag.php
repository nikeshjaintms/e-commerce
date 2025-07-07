<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class PostTag extends Model
{
    protected $fillable=['title','slug','status'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, null, 'post_tag_ids', 'post_ids')
            ->where('status', 'active');
    }
}
