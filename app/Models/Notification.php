<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Notification extends Model
{
    protected $connection = 'mongodb'; // Important!
    protected $collection = 'notifications';
    protected $fillable=['data','type','notifiable','read_at'];
}
