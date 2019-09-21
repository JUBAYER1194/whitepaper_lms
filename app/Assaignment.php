<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assaignment extends Model
{
    //
    protected $fillable=['title','user_id','body','file','deadline'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
