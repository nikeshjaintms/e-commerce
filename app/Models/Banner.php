<?php

namespace App\Models;


use MongoDB\Laravel\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','description','photo','status'];
}
