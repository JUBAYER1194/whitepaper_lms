<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $fillable=['user_id','lmsclass_id','title','file','body','option'];

    public function lmsclass(){
        return $this->belongsTo(Lmsclass::class);
}
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


}
