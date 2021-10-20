<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
            'date' => $this->to_date. " - " .$this->from_date,
            'image' => $this->image,
            'total_budget' => $this->total_budget,
            'daily_budget' => $this->daily_budget,
        ];
    }
}
