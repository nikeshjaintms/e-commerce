<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=['code','type','value','status'];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public static function findByCode($code){
        return self::where('code',$code)->first();
    }
    public function discount($total){
        if($this->type=="fixed"){
            return $this->value;
        }
        elseif($this->type=="percent"){
            return ($this->value /100)*$total;
        }
        else{
            return 0;
        }
    }
}
