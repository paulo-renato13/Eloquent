<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Lessons as LessonsResource;

class Users extends JsonResource
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
            'DRE' => $this->DRE,
            'name' => $this->name,
            'lessons' => LessonsResource::collection($this->lessons)
        ];
    }
}
