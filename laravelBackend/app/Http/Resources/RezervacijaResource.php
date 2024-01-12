<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezervacijaResource extends JsonResource
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
            'putnikId' => $this->resource->putnik,
            'destinacijaId' => $this->resource->destinacija,
            'id' => $this->resource->id,
            'datumOd' => $this->resource->datumOd,
            'datumDo' => $this->resource->datumDo,
            'avans' => $this->resource->avans,
            'smestaj' => $this->resource->smestaj,
            'status' => $this->resource->status,
            'brojOsoba' => $this->resource->brojOsoba
        ];
    }
}
