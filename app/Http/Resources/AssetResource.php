<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'message'=>'Asset Added Successfully',
            'attribute' => [
                'id'=> (string)$this->id,
                'type'=>$this->type,
                'serial_number'=>$this->serial_number,
                'description'=>$this->description,
                'fixed_or_Movable'=>$this->fixed_or_Movable,
                'picture_path'=>$this->picture_path,
                'purchase_date'=>$this->purchase_date,
                'start_use_date'=>$this->start_use_date,
                'purchase_price'=>$this->purchase_price,
                'warranty_expiry_date'=>$this->warranty_expiry_date,
                'degradation_in_years'=>$this->degradation_in_years,
                'current_value_in_naira'=>$this->current_value_in_naira,
                'location'=>$this->location
            ]
        ];
    }
}
