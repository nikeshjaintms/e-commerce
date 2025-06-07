<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class PostTag extends Model
{
    protected $fillable=['title','slug','status'];
}
