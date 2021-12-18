<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetassignmentResource extends JsonResource
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
            'message'=>'Asset Assignment Added Successfully',
            'attribute' => [
                'id'=> (string)$this->id,
                'asset_id'=>$this->asset_id,
                'assignment_date'=>$this->assignment_date,
                'status'=>$this->status,
                'is_due'=>$this->is_due,
                'due_date'=>$this->due_date,
                'assigned_user_id'=>$this->assigned_user_id,
                'assigned_by'=>$this->assigned_by
            ]
        ];
    }
}
