<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CovidCaseResource extends JsonResource
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
            'cases' => $this->cases,
            'report_date' => $this->report_date
        ];
    }
}
