<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $guarded = [];

    public function Exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function Qcreative()
    {
        return $this->hasMany(Qcreative::class, 'question_id', 'id');

    }

    public function Qmultiple()
    {
        return $this->hasMany(Qmultiple::class, 'question_id', 'id');

    }

    public function Qpoll()
    {
        return $this->hasMany(Qpoll::class, 'question_id', 'id');

    }


}
