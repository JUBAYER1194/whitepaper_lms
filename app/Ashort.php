<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ashort extends Model
{
    //
    protected $guarded=[];
    public function qshort(){
        return $this->belongsTo(Qshort::class,'id','qshort_id');
    }
}
