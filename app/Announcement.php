<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $fillable=['title','body','lmsclass_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function lmsclass(){
        return $this->belongsTo(User::class);
    }
}
