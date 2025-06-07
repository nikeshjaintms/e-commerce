<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
class Shipping extends Model
{
    protected $fillable=['type','price','status'];
}
