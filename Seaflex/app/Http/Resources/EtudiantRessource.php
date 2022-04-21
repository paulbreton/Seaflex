<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EtudiantRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'parcours' => ParcoursRessource::make($this->parcours),
            'date' => $this->date,
            'inscrit' => $this->inscrit(),
            'cesure' => $this->cesures
        ];
    }
}
