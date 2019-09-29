<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QshortResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'question_id'=>$this->question_id,
            'question'=>$this->question,
            'marks'=>$this->marks,

        ];

    }
}
