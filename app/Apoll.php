<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoll extends Model
{
    //
    protected $guarded=[];
    public function qpoll(){
        return $this->belongsTo(Qpoll::class,'id','qpoll_id');
    }
}