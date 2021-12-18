<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'message'=>'Registration Successful',
            'attribute' => [
                'id'=> (string)$this->id,
                'first_name'=>$this->first_name,
                'middle_name'=>$this->middle_name,
                'last_name'=>$this->last_name,
                'email'=>$this->email,
                'phone'=>$this->phone,
                'pic_url'=>$this->pic_url,
                'is_disabled'=>$this->is_disabled,
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at
            ]
        ];
    }
}
