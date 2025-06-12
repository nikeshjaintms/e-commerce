<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Settings extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'settings';
    protected $fillable=['short_des','description','photo','address','phone','email','logo'];
}
