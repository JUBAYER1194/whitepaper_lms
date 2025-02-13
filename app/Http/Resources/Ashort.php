<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ashort extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'question_id'=>$this->question_id,
            'qshort_id'=>$this->qshort_id,
            'user_id'=>$this->user_id,
            'answer'=>$this->answer,
            'marks'=>$this->marks,
        ];
    }
}
