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

    public function users(){
        return $this->belongsToMany(User::class,'lmsclass_user');

    }
    public function announcement(){
        return $this->hasMany(Announcement::class)->latest();

    }
    public function Assaignments(){
        return $this->hasMany(Assaignment::class)->latest();

    }

    public function exam(){
        return $this->hasMany(Exam::class,'class_id','id');
    }

}
