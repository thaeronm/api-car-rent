<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'id'         => $this->id,
            'user'       => new UserResource($this->user),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y')
        ];
    }
}
