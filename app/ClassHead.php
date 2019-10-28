<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassHead extends Model
{
    protected $guarded=[];
    public function Lms_class(){
        return $this->hasMany( Lmsclass::class,'classhead_id','id');
    }

}
