<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Http\Resources\ManufacturerResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ModelVehicleResource extends JsonResource
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
            'manufacturer'    => new ManufacturerResource($this->manufacturer),
            'name'            => $this->name,
            'daily_hire_rate' => $this->daily_hire_rate,
            'created_at'      => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y')
        ];
    }
}
