<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        //[
        //    'id'=> $this->id,
        //    'name'=> $this->name,
        //    'start_date' => $this->start_date,
        //   'end_date' => $this->end_date,
        //];
    }
}
