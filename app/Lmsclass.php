<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lmsclass extends Model
{
    //
    protected $fillable=['name','section','description','user_id','class_code'];
    public function getRouteKeyName()
    {
        return 'name';
    }
    public  function user(){
       return  $this->belongsTo(User::class);
    }
    public function material(){
        return $this->hasMany(Material::class)->latest();
    }
}
