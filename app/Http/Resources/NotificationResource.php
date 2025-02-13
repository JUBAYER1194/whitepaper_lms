<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
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
            'id'=>$this->id,
            'data'=>$this->data['data'],
            'name'=>$this->data['subject_name'],
            'title'=>$this->data['title'],
            'path'=>$this->data['path'],
            'type'=>$this->type,

        ];
    }
}
