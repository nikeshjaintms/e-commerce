<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Message extends Model
{
    public $fillable=['name','message','email','phone','read_at','photo','subject'];
}
