<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RezervacijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'Putnik' => $this->resource->putnik,
            'Destinacija' => $this->resource->destinacija,
            'datumOd' => $this->resource->datumOd,
            'datumDo' => $this->resource->datumDo,
            'avans' => $this->resource->avans,
            'smestaj' => $this->resource->smestaj,
            'status' => $this->resource->status,
            'brojOsoba' => $this->resource->brojOsoba
        ];
    }
}
