<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DestinacijaResource extends JsonResource
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
            'Naziv' => $this->resource->Naziv,
            'GeoSirina' => $this->resource->GeoSirina,
            'GeoDuzina' => $this->resource->GeoDuzina,
            'Opis' => $this->resource->Opis,
            'Klima' => $this->resource->Klima,
            'Atrakcije' => $this->resource->Atrakcije
        ];
    }
}
