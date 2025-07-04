<?php

namespace App\Models;

use Illuminate\Support\Collection;
use MongoDB\Laravel\Eloquent\Model;

class Shipping extends Model
{
    protected $collection = 'shippings';
    protected $fillable = ['type', 'price', 'status'];
}
