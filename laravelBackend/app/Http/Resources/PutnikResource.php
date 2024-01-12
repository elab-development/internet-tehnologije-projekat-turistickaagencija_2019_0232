<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PutnikResource extends JsonResource
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
            'Ime' => $this->resource->Ime,
            'Prezime' => $this->resource->Prezime,
            'Godine' => $this->resource->Godine,
            'Interesovanja' => $this->resource->Interesovanja
        ];
    }
}
