<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinacijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Naziv' => $this->resource->Naziv,
            'GeoSirina' => $this->resource->GeoSirina,
            'GeoDuzina' => $this->resource->GeoDuzina,
            'Opis' => $this->resource->Opis,
            'Klima' => $this->resource->Klima,
            'Atrakcije' => $this->resource->Atrakcije
        ];
    }
}
