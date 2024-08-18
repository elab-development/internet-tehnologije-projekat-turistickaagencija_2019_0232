<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PutnikResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'Ime' => $this->resource->Ime,
            'Prezime' => $this->resource->Prezime,
            'Godine' => $this->resource->Godine,
            'Interesovanja' => $this->resource->Interesovanja,
        ];
    }
}
