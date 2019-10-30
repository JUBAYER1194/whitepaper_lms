<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassHead extends Model
{
    protected $guarded=[];
    public function Lms_class(){
        return $this->hasMany( Lmsclass::class,'classhead_id','id');
    }
    public function UserClass(){
        return $this->belongsToMany( User::class,'user_class_heads','classhead_id','user_id');
    }

}
