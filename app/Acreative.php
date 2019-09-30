<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acreative extends Model
{
    //
    protected $guarded=[];
    public function qcreative(){
        return $this->belongsTo(Qcreative::class,'id','qcreative_id');
    }

}
