<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'city' => $this->city,
            'branch' => $this->branch,
            'DOB' => $this->DOB,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
