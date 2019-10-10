<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email','password','father_name','mother_name','class_teacher_name','phone','parents_contact','email','nid','Address','status','role_id','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);

    }
    public function announcement(){
        return $this->hasMany(Announcement::class)->latest();

    }
    public function assignment(){
        return $this->hasMany(Assaignment::class)->latest();

    }
    public function class(){
        return $this->hasMany(Lmsclass::class)->latest();
    }
    public function material(){
    return $this->hasMany(Material::class)->latest();
    }
    public function lmsclass(){
        return $this->belongsToMany(Lmsclass::class);
    }

    public function Acreative(){
        return $this->hasMany(Acreative::class,'user_id','id');
    }
    public function Amultiple(){
        return $this->hasMany(Amultiple::class,'user_id','id');
    }
    public function Apoll(){
        return $this->hasMany(Apoll::class,'user_id','id');
    }

    public function Ashort(){
        return $this->hasMany(Ashort::class,'user_id','id');
    }
    public function exams(){
        return $this->belongsToMany(Exam::class,'exam_users');
    }




}
