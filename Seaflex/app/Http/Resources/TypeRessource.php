<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeRessource extends JsonResource
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
            'code_parcours' => $this->code_parcours,
            'semestre' => $this->semestre,
            'annee' => $this->annee,
            'majeur' => $this->majeur,
            'mineur' => $this->mineur,
            'periode' => $this->periode,
        ];
    }
}
